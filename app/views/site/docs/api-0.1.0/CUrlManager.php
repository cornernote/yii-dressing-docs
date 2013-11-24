<?php
$this->pageTitle = $this->pageHeading = 'CUrlManager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CUrlManager';
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
  <td><?php echo CHtml::link('system.web', array('/site/doc', '#' => 'system.web')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CUrlManager &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php">yii/web/CUrlManager.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CUrlManager manages the URLs of Yii Web applications.
<br/><br/>
It provides URL construction (<?php echo CHtml::link('createUrl()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'createUrl')); ?>) as well as parsing (<?php echo CHtml::link('parseUrl()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'parseUrl')); ?>) functionality.
<br/><br/>
URLs managed via CUrlManager can be in one of the following two formats,
by setting <?php echo CHtml::link('urlFormat', array('/site/doc', 'view' => 'CUrlManager', '#' => 'setUrlFormat')); ?> property:
<ul>
<li>'path' format: /path/to/EntryScript.php/name1/value1/name2/value2...</li>
<li>'get' format:  /path/to/EntryScript.php?name1=value1&name2=value2...</li>
</ul>
<br/><br/>
When using 'path' format, CUrlManager uses a set of rules to:
<ul>
<li>parse the requested URL into a route ('ControllerID/ActionID') and GET parameters;</li>
<li>create URLs based on the given route and GET parameters.</li>
</ul>
<br/><br/>
A rule consists of a route and a pattern. The latter is used by CUrlManager to determine
which rule is used for parsing/creating URLs. A pattern is meant to match the path info
part of a URL. It may contain named parameters using the syntax '&lt;ParamName:RegExp&gt;'.
<br/><br/>
When parsing a URL, a matching rule will extract the named parameters from the path info
and put them into the $_GET variable; when creating a URL, a matching rule will extract
the named parameters from $_GET and put them into the path info part of the created URL.
<br/><br/>
If a pattern ends with '/*', it means additional GET parameters may be appended to the path
info part of the URL; otherwise, the GET parameters can only appear in the query string part.
<br/><br/>
To specify URL rules, set the rules property as an array of rules (pattern=>route).
For example,
<pre>
array(
    'articles'=&gt;'article/list',
    'article/&lt;id:\d+&gt;/*'=&gt;'article/read',
)
</pre>
Two rules are specified in the above:
<ul>
<li>The first rule says that if the user requests the URL '/path/to/index.php/articles',
  it should be treated as '/path/to/index.php/article/list'; and vice versa applies
  when constructing such a URL.</li>
<li>The second rule contains a named parameter 'id' which is specified using
  the &lt;ParamName:RegExp&gt; syntax. It says that if the user requests the URL
  '/path/to/index.php/article/13', it should be treated as '/path/to/index.php/article/read?id=13';
  and vice versa applies when constructing such a URL.</li>
</ul>
<br/><br/>
The route part may contain references to named parameters defined in the pattern part.
This allows a rule to be applied to different routes based on matching criteria.
For example,
<pre>
array(
     '&lt;_c:(post|comment)&gt;/&lt;id:\d+&gt;/&lt;_a:(create|update|delete)&gt;'=&gt;'&lt;_c&gt;/&lt;_a&gt;',
     '&lt;_c:(post|comment)&gt;/&lt;id:\d+&gt;'=&gt;'&lt;_c&gt;/view',
     '&lt;_c:(post|comment)&gt;s/*'=&gt;'&lt;_c&gt;/list',
)
</pre>
In the above, we use two named parameters '<_c>' and '<_a>' in the route part. The '<_c>'
parameter matches either 'post' or 'comment', while the '<_a>' parameter matches an action ID.
<br/><br/>
Like normal rules, these rules can be used for both parsing and creating URLs.
For example, using the rules above, the URL '/index.php/post/123/create'
would be parsed as the route 'post/create' with GET parameter 'id' being 123.
And given the route 'post/list' and GET parameter 'page' being 2, we should get a URL
'/index.php/posts/page/2'.
<br/><br/>
It is also possible to include hostname into the rules for parsing and creating URLs.
One may extract part of the hostname to be a GET parameter.
For example, the URL <code>http://admin.example.com/en/profile</code> may be parsed into GET parameters
<code>user=admin</code> and <code>lang=en</code>. On the other hand, rules with hostname may also be used to
create URLs with parameterized hostnames.
<br/><br/>
In order to use parameterized hostnames, simply declare URL rules with host info, e.g.:
<pre>
array(
    'http://&lt;user:\w+&gt;.example.com/&lt;lang:\w+&gt;/profile' =&gt; 'user/profile',
)
</pre>
<br/><br/>
Starting from version 1.1.8, one can write custom URL rule classes and use them for one or several URL rules.
For example,
<pre>
array(
  // a standard rule
  '&lt;action:(login|logout)&gt;' =&gt; 'site/&lt;action&gt;',
  // a custom rule using data in DB
  array(
    'class' =&gt; 'application.components.MyUrlRule',
    'connectionID' =&gt; 'db',
  ),
)
</pre>
Please note that the custom URL rule class should extend from <?php echo CHtml::link('CBaseUrlRule', array('/site/doc', 'view' => 'CBaseUrlRule')); ?> and
implement the following two methods,
<ul>
   <li><?php echo CHtml::link('CBaseUrlRule::createUrl()', array('/site/doc', 'view' => 'CBaseUrlRule', '#' => 'createUrl')); ?></li>
   <li><?php echo CHtml::link('CBaseUrlRule::parseUrl()', array('/site/doc', 'view' => 'CBaseUrlRule', '#' => 'parseUrl')); ?></li>
</ul>
<br/><br/>
CUrlManager is a default application component that may be accessed via
<?php echo CHtml::link('CWebApplication::getUrlManager()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getUrlManager')); ?>.</div>
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
<tr id="appendParams">
  <td><?php echo CHtml::link('appendParams', array('/site/doc', 'view' => 'CUrlManager', '#' => 'appendParams-detail')); ?></td>
  <td>boolean</td>
  <td>whether to append GET parameters to the path info part.</td>
  <td>CUrlManager</td>
</tr>
<tr id="baseUrl">
  <td><?php echo CHtml::link('baseUrl', array('/site/doc', 'view' => 'CUrlManager', '#' => 'baseUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the base URL of the application.</td>
  <td>CUrlManager</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="cacheID">
  <td><?php echo CHtml::link('cacheID', array('/site/doc', 'view' => 'CUrlManager', '#' => 'cacheID-detail')); ?></td>
  <td>string</td>
  <td>the ID of the cache application component that is used to cache the parsed URL rules.</td>
  <td>CUrlManager</td>
</tr>
<tr id="caseSensitive">
  <td><?php echo CHtml::link('caseSensitive', array('/site/doc', 'view' => 'CUrlManager', '#' => 'caseSensitive-detail')); ?></td>
  <td>boolean</td>
  <td>whether routes are case-sensitive.</td>
  <td>CUrlManager</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="matchValue">
  <td><?php echo CHtml::link('matchValue', array('/site/doc', 'view' => 'CUrlManager', '#' => 'matchValue-detail')); ?></td>
  <td>boolean</td>
  <td>whether the GET parameter values should match the corresponding
sub-patterns in a rule before using it to create a URL.</td>
  <td>CUrlManager</td>
</tr>
<tr id="routeVar">
  <td><?php echo CHtml::link('routeVar', array('/site/doc', 'view' => 'CUrlManager', '#' => 'routeVar-detail')); ?></td>
  <td>string</td>
  <td>the GET variable name for route.</td>
  <td>CUrlManager</td>
</tr>
<tr id="rules">
  <td><?php echo CHtml::link('rules', array('/site/doc', 'view' => 'CUrlManager', '#' => 'rules-detail')); ?></td>
  <td>array</td>
  <td>the URL rules (pattern=>route).</td>
  <td>CUrlManager</td>
</tr>
<tr id="showScriptName">
  <td><?php echo CHtml::link('showScriptName', array('/site/doc', 'view' => 'CUrlManager', '#' => 'showScriptName-detail')); ?></td>
  <td>boolean</td>
  <td>whether to show entry script name in the constructed URL.</td>
  <td>CUrlManager</td>
</tr>
<tr id="urlFormat">
  <td><?php echo CHtml::link('urlFormat', array('/site/doc', 'view' => 'CUrlManager', '#' => 'urlFormat-detail')); ?></td>
  <td>string</td>
  <td>Returns the URL format.</td>
  <td>CUrlManager</td>
</tr>
<tr id="urlRuleClass">
  <td><?php echo CHtml::link('urlRuleClass', array('/site/doc', 'view' => 'CUrlManager', '#' => 'urlRuleClass-detail')); ?></td>
  <td>string</td>
  <td>the class name or path alias for the URL rule instances.</td>
  <td>CUrlManager</td>
</tr>
<tr id="urlSuffix">
  <td><?php echo CHtml::link('urlSuffix', array('/site/doc', 'view' => 'CUrlManager', '#' => 'urlSuffix-detail')); ?></td>
  <td>string</td>
  <td>the URL suffix used when in 'path' format.</td>
  <td>CUrlManager</td>
</tr>
<tr id="useStrictParsing">
  <td><?php echo CHtml::link('useStrictParsing', array('/site/doc', 'view' => 'CUrlManager', '#' => 'useStrictParsing-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable strict URL parsing.</td>
  <td>CUrlManager</td>
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
<tr id="addRules">
  <td><?php echo CHtml::link('addRules()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'addRules-detail')); ?></td>
  <td>Adds new URL rules.</td>
  <td>CUrlManager</td>
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
<tr id="createPathInfo">
  <td><?php echo CHtml::link('createPathInfo()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'createPathInfo-detail')); ?></td>
  <td>Creates a path info based on the given parameters.</td>
  <td>CUrlManager</td>
</tr>
<tr id="createUrl">
  <td><?php echo CHtml::link('createUrl()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'createUrl-detail')); ?></td>
  <td>Constructs a URL.</td>
  <td>CUrlManager</td>
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
<tr id="getBaseUrl">
  <td><?php echo CHtml::link('getBaseUrl()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'getBaseUrl-detail')); ?></td>
  <td>Returns the base URL of the application.</td>
  <td>CUrlManager</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="getUrlFormat">
  <td><?php echo CHtml::link('getUrlFormat()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'getUrlFormat-detail')); ?></td>
  <td>Returns the URL format.</td>
  <td>CUrlManager</td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CUrlManager</td>
</tr>
<tr id="parsePathInfo">
  <td><?php echo CHtml::link('parsePathInfo()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'parsePathInfo-detail')); ?></td>
  <td>Parses a path info into URL segments and saves them to $_GET and $_REQUEST.</td>
  <td>CUrlManager</td>
</tr>
<tr id="parseUrl">
  <td><?php echo CHtml::link('parseUrl()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'parseUrl-detail')); ?></td>
  <td>Parses the user request.</td>
  <td>CUrlManager</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="removeUrlSuffix">
  <td><?php echo CHtml::link('removeUrlSuffix()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'removeUrlSuffix-detail')); ?></td>
  <td>Removes the URL suffix from path info.</td>
  <td>CUrlManager</td>
</tr>
<tr id="setBaseUrl">
  <td><?php echo CHtml::link('setBaseUrl()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'setBaseUrl-detail')); ?></td>
  <td>Sets the base URL of the application (the part after host name and before query string).</td>
  <td>CUrlManager</td>
</tr>
<tr id="setUrlFormat">
  <td><?php echo CHtml::link('setUrlFormat()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'setUrlFormat-detail')); ?></td>
  <td>Sets the URL format.</td>
  <td>CUrlManager</td>
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
<tr id="createUrlDefault">
  <td><?php echo CHtml::link('createUrlDefault()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'createUrlDefault-detail')); ?></td>
  <td>Creates a URL based on default settings.</td>
  <td>CUrlManager</td>
</tr>
<tr id="createUrlRule">
  <td><?php echo CHtml::link('createUrlRule()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'createUrlRule-detail')); ?></td>
  <td>Creates a URL rule instance.</td>
  <td>CUrlManager</td>
</tr>
<tr id="processRules">
  <td><?php echo CHtml::link('processRules()', array('/site/doc', 'view' => 'CUrlManager', '#' => 'processRules-detail')); ?></td>
  <td>Processes the URL rules.</td>
  <td>CUrlManager</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="appendParams-detail">
appendParams<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$appendParams</b>;</div>

<p>whether to append GET parameters to the path info part. Defaults to true.
This property is only effective when <?php echo CHtml::link('urlFormat', array('/site/doc', 'view' => 'CUrlManager', '#' => 'urlFormat')); ?> is 'path' and is mainly used when
creating URLs. When it is true, GET parameters will be appended to the path info and
separate from each other using slashes. If this is false, GET parameters will be in query part.</p>


<div class="detailHeader" id="baseUrl-detail">
baseUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getBaseUrl</b>', array('/site/doc', 'view' => 'CUrlManager', '#' => 'getBaseUrl')); ?>()<br/>public void <?php echo CHtml::link('<b>setBaseUrl</b>', array('/site/doc', 'view' => 'CUrlManager', '#' => 'setBaseUrl')); ?>(string $value)</div>

<p>Returns the base URL of the application.</p>


<div class="detailHeader" id="cacheID-detail">
cacheID<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheID</b>;</div>

<p>the ID of the cache application component that is used to cache the parsed URL rules.
Defaults to 'cache' which refers to the primary cache application component.
Set this property to false if you want to disable caching URL rules.</p>


<div class="detailHeader" id="caseSensitive-detail">
caseSensitive<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$caseSensitive</b>;</div>

<p>whether routes are case-sensitive. Defaults to true. By setting this to false,
the route in the incoming request will be turned to lower case first before further processing.
As a result, you should follow the convention that you use lower case when specifying
controller mapping (<?php echo CHtml::link('CWebApplication::controllerMap', array('/site/doc', 'view' => 'CWebApplication', '#' => 'controllerMap')); ?>) and action mapping
(<?php echo CHtml::link('CController::actions', array('/site/doc', 'view' => 'CController', '#' => 'actions')); ?>). Also, the directory names for organizing controllers should
be in lower case.</p>


<div class="detailHeader" id="matchValue-detail">
matchValue<span class="detailHeaderTag">
property
 (available since v1.1.0)
</span>
</div>

<div class="signature">
public boolean <b>$matchValue</b>;</div>

<p>whether the GET parameter values should match the corresponding
sub-patterns in a rule before using it to create a URL. Defaults to false, meaning
a rule will be used for creating a URL only if its route and parameter names match the given ones.
If this property is set true, then the given parameter values must also match the corresponding
parameter sub-patterns. Note that setting this property to true will degrade performance.</p>


<div class="detailHeader" id="routeVar-detail">
routeVar<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$routeVar</b>;</div>

<p>the GET variable name for route. Defaults to 'r'.</p>


<div class="detailHeader" id="rules-detail">
rules<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$rules</b>;</div>

<p>the URL rules (pattern=>route).</p>


<div class="detailHeader" id="showScriptName-detail">
showScriptName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$showScriptName</b>;</div>

<p>whether to show entry script name in the constructed URL. Defaults to true.</p>


<div class="detailHeader" id="urlFormat-detail">
urlFormat<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUrlFormat</b>', array('/site/doc', 'view' => 'CUrlManager', '#' => 'getUrlFormat')); ?>()<br/>public void <?php echo CHtml::link('<b>setUrlFormat</b>', array('/site/doc', 'view' => 'CUrlManager', '#' => 'setUrlFormat')); ?>(string $value)</div>

<p>Returns the URL format.</p>


<div class="detailHeader" id="urlRuleClass-detail">
urlRuleClass<span class="detailHeaderTag">
property
 (available since v1.1.8)
</span>
</div>

<div class="signature">
public string <b>$urlRuleClass</b>;</div>

<p>the class name or path alias for the URL rule instances. Defaults to 'CUrlRule'.
If you change this to something else, please make sure that the new class must extend from
<?php echo CHtml::link('CBaseUrlRule', array('/site/doc', 'view' => 'CBaseUrlRule')); ?> and have the same constructor signature as <?php echo CHtml::link('CUrlRule', array('/site/doc', 'view' => 'CUrlRule')); ?>.
It must also be serializable and autoloadable.</p>


<div class="detailHeader" id="urlSuffix-detail">
urlSuffix<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$urlSuffix</b>;</div>

<p>the URL suffix used when in 'path' format.
For example, ".html" can be used so that the URL looks like pointing to a static HTML page. Defaults to empty.</p>


<div class="detailHeader" id="useStrictParsing-detail">
useStrictParsing<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$useStrictParsing</b>;</div>

<p>whether to enable strict URL parsing.
This property is only effective when <?php echo CHtml::link('urlFormat', array('/site/doc', 'view' => 'CUrlManager', '#' => 'urlFormat')); ?> is 'path'.
If it is set true, then an incoming URL must match one of the <?php echo CHtml::link('URL rules', array('/site/doc', 'view' => 'CUrlManager', '#' => 'rules')); ?>.
Otherwise, it will be treated as an invalid request and trigger a 404 HTTP exception.
Defaults to false.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="addRules-detail">
addRules()
<span class="detailHeaderTag">
method
(available since v1.1.4)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>addRules</b>(array $rules, boolean $append=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$rules</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">new URL rules (pattern=>route).</td>
</tr>
<tr>
  <td class="paramNameCol">$append</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the new URL rules should be appended to the existing ones. If false,
they will be inserted at the beginning.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L240">yii/web/CUrlManager.php#L240</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">addRules</span><span style="color: #007700">(</span><span style="color: #0000BB">$rules</span><span style="color: #007700">,</span><span style="color: #0000BB">$append</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$append</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$rules&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$route</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrlRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rules</span><span style="color: #007700">=</span><span style="color: #0000BB">array_reverse</span><span style="color: #007700">(</span><span style="color: #0000BB">$rules</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$rules&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$route</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrlRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Adds new URL rules.
In order to make the new rules effective, this method must be called BEFORE
<?php echo CHtml::link('CWebApplication::processRequest', array('/site/doc', 'view' => 'CWebApplication', '#' => 'processRequest')); ?>.</p>


<div class="detailHeader" id="createPathInfo-detail">
createPathInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>createPathInfo</b>(array $params, string $equal, string $ampersand, string $key=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of GET parameters</td>
</tr>
<tr>
  <td class="paramNameCol">$equal</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the separator between name and value</td>
</tr>
<tr>
  <td class="paramNameCol">$ampersand</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the separator between name-value pairs</td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">this is used internally.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the created path info</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L429">yii/web/CUrlManager.php#L429</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createPathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$equal</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pairs&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$key</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">.</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">$k</span><span style="color: #007700">.</span><span style="color: #DD0000">']'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pairs</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">,</span><span style="color: #0000BB">$equal</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pairs</span><span style="color: #007700">[]=</span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">).</span><span style="color: #0000BB">$equal</span><span style="color: #007700">.</span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">,</span><span style="color: #0000BB">$pairs</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Creates a path info based on the given parameters.</p>


<div class="detailHeader" id="createUrl-detail">
createUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>createUrl</b>(string $route, array $params=array (
), string $ampersand='&')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the controller and the action (e.g. article/read)</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of GET parameters (name=>value). Both the name and value will be URL-encoded.
If the name is '#', the corresponding value will be treated as an anchor
and will be appended at the end of the URL.</td>
</tr>
<tr>
  <td class="paramNameCol">$ampersand</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the token separating name-value pairs in the URL. Defaults to '&'.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the constructed URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L283">yii/web/CUrlManager.php#L283</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">=</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$param</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$param</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$anchor</span><span style="color: #007700">=</span><span style="color: #DD0000">'#'</span><span style="color: #007700">.</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$anchor</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$rule</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasHostInfo</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$anchor&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #0000BB">$anchor</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #0000BB">$anchor</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrlDefault</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">).</span><span style="color: #0000BB">$anchor</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructs a URL.</p>


<div class="detailHeader" id="createUrlDefault-detail">
createUrlDefault()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>createUrlDefault</b>(string $route, array $params, string $ampersand)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the controller and the action (e.g. article/read)</td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of GET parameters</td>
</tr>
<tr>
  <td class="paramNameCol">$ampersand</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the token separating name-value pairs in the URL.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the constructed URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L320">yii/web/CUrlManager.php#L320</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createUrlDefault</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlFormat</span><span style="color: #007700">()===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PATH_FORMAT</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendParams</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">),</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">urlSuffix</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$route</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">urlSuffix</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #DD0000">'='</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$query</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.</span><span style="color: #DD0000">'?'</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showScriptName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.=</span><span style="color: #DD0000">'/'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$route</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.=</span><span style="color: #DD0000">'?'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">.</span><span style="color: #DD0000">'='</span><span style="color: #007700">.</span><span style="color: #0000BB">$route</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$query</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #DD0000">'='</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">))!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.=</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$query</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createPathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,</span><span style="color: #DD0000">'='</span><span style="color: #007700">,</span><span style="color: #0000BB">$ampersand</span><span style="color: #007700">))!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">.=</span><span style="color: #DD0000">'?'</span><span style="color: #007700">.</span><span style="color: #0000BB">$query</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Creates a URL based on default settings.</p>


<div class="detailHeader" id="createUrlRule-detail">
createUrlRule()
<span class="detailHeaderTag">
method
(available since v1.1.0)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CUrlRule', array('/site/doc', 'view' => 'CUrlRule')); ?> <b>createUrlRule</b>(mixed $route, string $pattern)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$route</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the route part of the rule. This could be a string or an array</td>
</tr>
<tr>
  <td class="paramNameCol">$pattern</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the pattern part of the rule</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CUrlRule', array('/site/doc', 'view' => 'CUrlRule')); ?></td>
  <td class="paramDescCol">the URL rule instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L263">yii/web/CUrlManager.php#L263</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createUrlRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$route</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$route</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$urlRuleClass</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">urlRuleClass</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;</span><span style="color: #0000BB">$urlRuleClass</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Creates a URL rule instance.
The default implementation returns a CUrlRule object.</p>


<div class="detailHeader" id="getBaseUrl-detail">
getBaseUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getBaseUrl</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the base URL of the application (the part after host name and before query string).
If <?php echo CHtml::link('showScriptName', array('/site/doc', 'view' => 'CUrlManager', '#' => 'showScriptName')); ?> is true, it will include the script name part.
Otherwise, it will not, and the ending slashes are stripped off.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L465">yii/web/CUrlManager.php#L465</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">showScriptName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getScriptUrl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Returns the base URL of the application.</p>


<div class="detailHeader" id="getUrlFormat-detail">
getUrlFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUrlFormat</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL format. Defaults to 'path'. Valid values include 'path' and 'get'.
Please refer to the guide for more details about the difference between these two formats.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L497">yii/web/CUrlManager.php#L497</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrlFormat</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_urlFormat</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the URL format.</p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L203">yii/web/CUrlManager.php#L203</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processRules</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.</p>


<div class="detailHeader" id="parsePathInfo-detail">
parsePathInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>parsePathInfo</b>(string $pathInfo)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pathInfo</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">path info</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L391">yii/web/CUrlManager.php#L391</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">parsePathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$segs</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$segs</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">+=</span><span style="color: #0000BB">2</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$segs</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$key</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$segs</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #DD0000">'['</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$m</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\[(.*?)\]/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$j</span><span style="color: #007700">=</span><span style="color: #0000BB">$m</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;</span><span style="color: #0000BB">$j</span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">;--</span><span style="color: #0000BB">$j</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$j</span><span style="color: #007700">]===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$j</span><span style="color: #007700">]=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">],</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Parses a path info into URL segments and saves them to $_GET and $_REQUEST.</p>


<div class="detailHeader" id="parseUrl-detail">
parseUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>parseUrl</b>(<?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?> $request)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$request</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?></td>
  <td class="paramDescCol">the request application component</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the route (controllerID/actionID) and perhaps GET parameters in path format.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L360">yii/web/CUrlManager.php#L360</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">parseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlFormat</span><span style="color: #007700">()===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PATH_FORMAT</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawPathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPathInfo</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">removeUrlSuffix</span><span style="color: #007700">(</span><span style="color: #0000BB">$rawPathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">urlSuffix</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$rule</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$rule</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">createComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$rule</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$r</span><span style="color: #007700">=</span><span style="color: #0000BB">$rule</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$request</span><span style="color: #007700">,</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">$rawPathInfo</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$r</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useStrictParsing</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">404</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;resolve&nbsp;the&nbsp;request&nbsp;"{route}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{route}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">routeVar</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Parses the user request.</p>


<div class="detailHeader" id="processRules-detail">
processRules()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>processRules</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L212">yii/web/CUrlManager.php#L212</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">processRules</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rules</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrlFormat</span><span style="color: #007700">()===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">GET_FORMAT</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getComponent</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheID</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash</span><span style="color: #007700">=</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rules</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">CACHE_KEY</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]===</span><span style="color: #0000BB">$hash</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">=</span><span style="color: #0000BB">$data</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rules&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$route</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrlRule</span><span style="color: #007700">(</span><span style="color: #0000BB">$route</span><span style="color: #007700">,</span><span style="color: #0000BB">$pattern</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">CACHE_KEY</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_rules</span><span style="color: #007700">,</span><span style="color: #0000BB">$hash</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Processes the URL rules.</p>


<div class="detailHeader" id="removeUrlSuffix-detail">
removeUrlSuffix()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>removeUrlSuffix</b>(string $pathInfo, string $urlSuffix)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pathInfo</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">path info part in the URL</td>
</tr>
<tr>
  <td class="paramNameCol">$urlSuffix</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL suffix to be removed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">path info with URL suffix removed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L451">yii/web/CUrlManager.php#L451</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">removeUrlSuffix</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">$urlSuffix</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$urlSuffix</span><span style="color: #007700">!==</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,-</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$urlSuffix</span><span style="color: #007700">))===</span><span style="color: #0000BB">$urlSuffix</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$urlSuffix</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Removes the URL suffix from path info.</p>


<div class="detailHeader" id="setBaseUrl-detail">
setBaseUrl()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setBaseUrl</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the base URL of the application</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L487">yii/web/CUrlManager.php#L487</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the base URL of the application (the part after host name and before query string).
This method is provided in case the <?php echo CHtml::link('baseUrl', array('/site/doc', 'view' => 'CUrlManager', '#' => 'baseUrl')); ?> cannot be determined automatically.
The ending slashes should be stripped off. And you are also responsible to remove the script name
if you set <?php echo CHtml::link('showScriptName', array('/site/doc', 'view' => 'CUrlManager', '#' => 'showScriptName')); ?> to be false.</p>


<div class="detailHeader" id="setUrlFormat-detail">
setUrlFormat()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setUrlFormat</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL format. It must be either 'path' or 'get'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CUrlManager.php#L506">yii/web/CUrlManager.php#L506</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setUrlFormat</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PATH_FORMAT&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">===</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">GET_FORMAT</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_urlFormat</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CUrlManager.UrlFormat&nbsp;must&nbsp;be&nbsp;either&nbsp;"path"&nbsp;or&nbsp;"get".'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Sets the URL format.</p>


