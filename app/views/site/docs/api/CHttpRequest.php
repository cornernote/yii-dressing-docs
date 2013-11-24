<?php
$this->pageTitle = $this->pageHeading = 'CHttpRequest';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CHttpRequest';
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
  <td>class CHttpRequest &raquo;
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
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php">yii\web\CHttpRequest.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CHttpRequest encapsulates the $_SERVER variable and resolves its inconsistency among different Web servers.
<br/><br/>
CHttpRequest also manages the cookies sent from and sent to the user.
By setting <?php echo CHtml::link('enableCookieValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCookieValidation')); ?> to true,
cookies sent from the user will be validated to see if they are tampered.
The property <?php echo CHtml::link('cookies', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getCookies')); ?> returns the collection of cookies.
For more details, see <?php echo CHtml::link('CCookieCollection', array('/site/doc', 'view' => 'CCookieCollection')); ?>.
<br/><br/>
CHttpRequest is a default application component loaded by <?php echo CHtml::link('CWebApplication', array('/site/doc', 'view' => 'CWebApplication')); ?>. It can be
accessed via <?php echo CHtml::link('CWebApplication::getRequest()', array('/site/doc', 'view' => 'CWebApplication', '#' => 'getRequest')); ?>.</div>
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
<tr id="acceptTypes">
  <td><?php echo CHtml::link('acceptTypes', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'acceptTypes-detail')); ?></td>
  <td>string</td>
  <td>Returns user browser accept types, null if not present.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="baseUrl">
  <td><?php echo CHtml::link('baseUrl', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'baseUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the relative URL for the application.</td>
  <td>CHttpRequest</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="browser">
  <td><?php echo CHtml::link('browser', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'browser-detail')); ?></td>
  <td>array</td>
  <td>Returns information about the capabilities of user browser.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="cookies">
  <td><?php echo CHtml::link('cookies', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'cookies-detail')); ?></td>
  <td><?php echo CHtml::link('CCookieCollection', array('/site/doc', 'view' => 'CCookieCollection')); ?></td>
  <td>Returns the cookie collection.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="csrfCookie">
  <td><?php echo CHtml::link('csrfCookie', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'csrfCookie-detail')); ?></td>
  <td>array</td>
  <td>the property values (in name-value pairs) used to initialize the CSRF cookie.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="csrfToken">
  <td><?php echo CHtml::link('csrfToken', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'csrfToken-detail')); ?></td>
  <td>string</td>
  <td>Returns the random token used to perform CSRF validation.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="csrfTokenName">
  <td><?php echo CHtml::link('csrfTokenName', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'csrfTokenName-detail')); ?></td>
  <td>string</td>
  <td>the name of the token used to prevent CSRF.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="enableCookieValidation">
  <td><?php echo CHtml::link('enableCookieValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCookieValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether cookies should be validated to ensure they are not tampered.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="enableCsrfValidation">
  <td><?php echo CHtml::link('enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable CSRF (Cross-Site Request Forgery) validation.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="hostInfo">
  <td><?php echo CHtml::link('hostInfo', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'hostInfo-detail')); ?></td>
  <td>string</td>
  <td>Returns the schema and host part of the application URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="isAjaxRequest">
  <td><?php echo CHtml::link('isAjaxRequest', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isAjaxRequest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether this is an AJAX (XMLHttpRequest) request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="isDeleteRequest">
  <td><?php echo CHtml::link('isDeleteRequest', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isDeleteRequest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether this is a DELETE request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="isFlashRequest">
  <td><?php echo CHtml::link('isFlashRequest', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isFlashRequest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether this is an Adobe Flash or Adobe Flex request.</td>
  <td>CHttpRequest</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="isPostRequest">
  <td><?php echo CHtml::link('isPostRequest', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isPostRequest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether this is a POST request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="isPutRequest">
  <td><?php echo CHtml::link('isPutRequest', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isPutRequest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether this is a PUT request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="isSecureConnection">
  <td><?php echo CHtml::link('isSecureConnection', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isSecureConnection-detail')); ?></td>
  <td>boolean</td>
  <td>Return if the request is sent via secure channel (https).</td>
  <td>CHttpRequest</td>
</tr>
<tr id="pathInfo">
  <td><?php echo CHtml::link('pathInfo', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'pathInfo-detail')); ?></td>
  <td>string</td>
  <td>Returns the path info of the currently requested URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="port">
  <td><?php echo CHtml::link('port', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'port-detail')); ?></td>
  <td>integer</td>
  <td>Returns the port to use for insecure requests.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="preferredAcceptType">
  <td><?php echo CHtml::link('preferredAcceptType', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'preferredAcceptType-detail')); ?></td>
  <td>array</td>
  <td>Returns the user preferred accept MIME type.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="preferredAcceptTypes">
  <td><?php echo CHtml::link('preferredAcceptTypes', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'preferredAcceptTypes-detail')); ?></td>
  <td>array</td>
  <td>Returns an array of user accepted MIME types in order of preference.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="preferredLanguage">
  <td><?php echo CHtml::link('preferredLanguage', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'preferredLanguage-detail')); ?></td>
  <td>string</td>
  <td>Returns the user preferred language.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="preferredLanguages">
  <td><?php echo CHtml::link('preferredLanguages', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'preferredLanguages-detail')); ?></td>
  <td>array</td>
  <td>Returns an array of user accepted languages in order of preference.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="queryString">
  <td><?php echo CHtml::link('queryString', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'queryString-detail')); ?></td>
  <td>string</td>
  <td>Returns part of the request URL that is after the question mark.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="rawBody">
  <td><?php echo CHtml::link('rawBody', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'rawBody-detail')); ?></td>
  <td>string</td>
  <td>Returns the raw HTTP request body.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="requestType">
  <td><?php echo CHtml::link('requestType', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'requestType-detail')); ?></td>
  <td>string</td>
  <td>Returns the request type, such as GET, POST, HEAD, PUT, DELETE.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="requestUri">
  <td><?php echo CHtml::link('requestUri', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'requestUri-detail')); ?></td>
  <td>string</td>
  <td>Returns the request URI portion for the currently requested URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="restParams">
  <td><?php echo CHtml::link('restParams', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'restParams-detail')); ?></td>
  <td>array</td>
  <td>Returns request parameters. Typically PUT or DELETE.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="scriptFile">
  <td><?php echo CHtml::link('scriptFile', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'scriptFile-detail')); ?></td>
  <td>string</td>
  <td>Returns entry script file path.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="scriptUrl">
  <td><?php echo CHtml::link('scriptUrl', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'scriptUrl-detail')); ?></td>
  <td>string</td>
  <td>Returns the relative URL of the entry script.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="securePort">
  <td><?php echo CHtml::link('securePort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'securePort-detail')); ?></td>
  <td>integer</td>
  <td>Returns the port to use for secure requests.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="serverName">
  <td><?php echo CHtml::link('serverName', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'serverName-detail')); ?></td>
  <td>string</td>
  <td>Returns the server name.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="serverPort">
  <td><?php echo CHtml::link('serverPort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'serverPort-detail')); ?></td>
  <td>integer</td>
  <td>Returns the server port number.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'url-detail')); ?></td>
  <td>string</td>
  <td>Returns the currently requested URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="urlReferrer">
  <td><?php echo CHtml::link('urlReferrer', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'urlReferrer-detail')); ?></td>
  <td>string</td>
  <td>Returns the URL referrer, null if not present</td>
  <td>CHttpRequest</td>
</tr>
<tr id="userAgent">
  <td><?php echo CHtml::link('userAgent', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'userAgent-detail')); ?></td>
  <td>string</td>
  <td>Returns the user agent, null if not present.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="userHost">
  <td><?php echo CHtml::link('userHost', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'userHost-detail')); ?></td>
  <td>string</td>
  <td>Returns the user host name, null if it cannot be determined.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="userHostAddress">
  <td><?php echo CHtml::link('userHostAddress', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'userHostAddress-detail')); ?></td>
  <td>string</td>
  <td>Returns the user IP address.</td>
  <td>CHttpRequest</td>
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
<tr id="isDeleteViaPostRequest">
  <td><?php echo CHtml::link('isDeleteViaPostRequest', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isDeleteViaPostRequest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether this is a DELETE request which was tunneled through POST.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="isPutViaPostRequest">
  <td><?php echo CHtml::link('isPutViaPostRequest', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'isPutViaPostRequest-detail')); ?></td>
  <td>boolean</td>
  <td>Returns whether this is a PUT request which was tunneled through POST.</td>
  <td>CHttpRequest</td>
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
<tr id="compareAcceptTypes">
  <td><?php echo CHtml::link('compareAcceptTypes()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'compareAcceptTypes-detail')); ?></td>
  <td>Compare function for determining the preference of accepted MIME type array maps</td>
  <td>CHttpRequest</td>
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
<tr id="getAcceptTypes">
  <td><?php echo CHtml::link('getAcceptTypes()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getAcceptTypes-detail')); ?></td>
  <td>Returns user browser accept types, null if not present.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getBaseUrl">
  <td><?php echo CHtml::link('getBaseUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBaseUrl-detail')); ?></td>
  <td>Returns the relative URL for the application.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getBrowser">
  <td><?php echo CHtml::link('getBrowser()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBrowser-detail')); ?></td>
  <td>Returns information about the capabilities of user browser.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getCookies">
  <td><?php echo CHtml::link('getCookies()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getCookies-detail')); ?></td>
  <td>Returns the cookie collection.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getCsrfToken">
  <td><?php echo CHtml::link('getCsrfToken()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getCsrfToken-detail')); ?></td>
  <td>Returns the random token used to perform CSRF validation.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getDelete">
  <td><?php echo CHtml::link('getDelete()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getDelete-detail')); ?></td>
  <td>Returns the named DELETE parameter value.</td>
  <td>CHttpRequest</td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getHostInfo">
  <td><?php echo CHtml::link('getHostInfo()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getHostInfo-detail')); ?></td>
  <td>Returns the schema and host part of the application URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getIsAjaxRequest">
  <td><?php echo CHtml::link('getIsAjaxRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsAjaxRequest-detail')); ?></td>
  <td>Returns whether this is an AJAX (XMLHttpRequest) request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getIsDeleteRequest">
  <td><?php echo CHtml::link('getIsDeleteRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsDeleteRequest-detail')); ?></td>
  <td>Returns whether this is a DELETE request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getIsFlashRequest">
  <td><?php echo CHtml::link('getIsFlashRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsFlashRequest-detail')); ?></td>
  <td>Returns whether this is an Adobe Flash or Adobe Flex request.</td>
  <td>CHttpRequest</td>
</tr>
<tr class="inherited" id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="getIsPostRequest">
  <td><?php echo CHtml::link('getIsPostRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsPostRequest-detail')); ?></td>
  <td>Returns whether this is a POST request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getIsPutRequest">
  <td><?php echo CHtml::link('getIsPutRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsPutRequest-detail')); ?></td>
  <td>Returns whether this is a PUT request.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getIsSecureConnection">
  <td><?php echo CHtml::link('getIsSecureConnection()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsSecureConnection-detail')); ?></td>
  <td>Return if the request is sent via secure channel (https).</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getParam">
  <td><?php echo CHtml::link('getParam()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getParam-detail')); ?></td>
  <td>Returns the named GET or POST parameter value.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPathInfo">
  <td><?php echo CHtml::link('getPathInfo()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPathInfo-detail')); ?></td>
  <td>Returns the path info of the currently requested URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPort">
  <td><?php echo CHtml::link('getPort()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPort-detail')); ?></td>
  <td>Returns the port to use for insecure requests.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPost">
  <td><?php echo CHtml::link('getPost()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPost-detail')); ?></td>
  <td>Returns the named POST parameter value.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPreferredAcceptType">
  <td><?php echo CHtml::link('getPreferredAcceptType()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredAcceptType-detail')); ?></td>
  <td>Returns the user preferred accept MIME type.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPreferredAcceptTypes">
  <td><?php echo CHtml::link('getPreferredAcceptTypes()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredAcceptTypes-detail')); ?></td>
  <td>Returns an array of user accepted MIME types in order of preference.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPreferredLanguage">
  <td><?php echo CHtml::link('getPreferredLanguage()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredLanguage-detail')); ?></td>
  <td>Returns the user preferred language.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPreferredLanguages">
  <td><?php echo CHtml::link('getPreferredLanguages()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredLanguages-detail')); ?></td>
  <td>Returns an array of user accepted languages in order of preference.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getPut">
  <td><?php echo CHtml::link('getPut()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPut-detail')); ?></td>
  <td>Returns the named PUT parameter value.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getQuery">
  <td><?php echo CHtml::link('getQuery()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getQuery-detail')); ?></td>
  <td>Returns the named GET parameter value.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getQueryString">
  <td><?php echo CHtml::link('getQueryString()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getQueryString-detail')); ?></td>
  <td>Returns part of the request URL that is after the question mark.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getRawBody">
  <td><?php echo CHtml::link('getRawBody()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRawBody-detail')); ?></td>
  <td>Returns the raw HTTP request body.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getRequestType">
  <td><?php echo CHtml::link('getRequestType()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRequestType-detail')); ?></td>
  <td>Returns the request type, such as GET, POST, HEAD, PUT, DELETE.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getRequestUri">
  <td><?php echo CHtml::link('getRequestUri()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRequestUri-detail')); ?></td>
  <td>Returns the request URI portion for the currently requested URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getRestParams">
  <td><?php echo CHtml::link('getRestParams()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRestParams-detail')); ?></td>
  <td>Returns request parameters. Typically PUT or DELETE.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getScriptFile">
  <td><?php echo CHtml::link('getScriptFile()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getScriptFile-detail')); ?></td>
  <td>Returns entry script file path.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getScriptUrl">
  <td><?php echo CHtml::link('getScriptUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getScriptUrl-detail')); ?></td>
  <td>Returns the relative URL of the entry script.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getSecurePort">
  <td><?php echo CHtml::link('getSecurePort()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getSecurePort-detail')); ?></td>
  <td>Returns the port to use for secure requests.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getServerName">
  <td><?php echo CHtml::link('getServerName()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getServerName-detail')); ?></td>
  <td>Returns the server name.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getServerPort">
  <td><?php echo CHtml::link('getServerPort()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getServerPort-detail')); ?></td>
  <td>Returns the server port number.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getUrl">
  <td><?php echo CHtml::link('getUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUrl-detail')); ?></td>
  <td>Returns the currently requested URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getUrlReferrer">
  <td><?php echo CHtml::link('getUrlReferrer()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUrlReferrer-detail')); ?></td>
  <td>Returns the URL referrer, null if not present</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getUserAgent">
  <td><?php echo CHtml::link('getUserAgent()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUserAgent-detail')); ?></td>
  <td>Returns the user agent, null if not present.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getUserHost">
  <td><?php echo CHtml::link('getUserHost()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUserHost-detail')); ?></td>
  <td>Returns the user host name, null if it cannot be determined.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getUserHostAddress">
  <td><?php echo CHtml::link('getUserHostAddress()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUserHostAddress-detail')); ?></td>
  <td>Returns the user IP address.</td>
  <td>CHttpRequest</td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="parseAcceptHeader">
  <td><?php echo CHtml::link('parseAcceptHeader()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'parseAcceptHeader-detail')); ?></td>
  <td>Parses an HTTP Accept header, returning an array map with all parts of each entry.</td>
  <td>CHttpRequest</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="redirect">
  <td><?php echo CHtml::link('redirect()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'redirect-detail')); ?></td>
  <td>Redirects the browser to the specified URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="sendFile">
  <td><?php echo CHtml::link('sendFile()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'sendFile-detail')); ?></td>
  <td>Sends a file to user.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="setBaseUrl">
  <td><?php echo CHtml::link('setBaseUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setBaseUrl-detail')); ?></td>
  <td>Sets the relative URL for the application.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="setHostInfo">
  <td><?php echo CHtml::link('setHostInfo()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setHostInfo-detail')); ?></td>
  <td>Sets the schema and host part of the application URL.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="setPort">
  <td><?php echo CHtml::link('setPort()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setPort-detail')); ?></td>
  <td>Sets the port to use for insecure requests.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="setScriptUrl">
  <td><?php echo CHtml::link('setScriptUrl()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setScriptUrl-detail')); ?></td>
  <td>Sets the relative URL for the application entry script.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="setSecurePort">
  <td><?php echo CHtml::link('setSecurePort()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setSecurePort-detail')); ?></td>
  <td>Sets the port to use for secure requests.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="stripSlashes">
  <td><?php echo CHtml::link('stripSlashes()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'stripSlashes-detail')); ?></td>
  <td>Strips slashes from input data.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="validateCsrfToken">
  <td><?php echo CHtml::link('validateCsrfToken()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'validateCsrfToken-detail')); ?></td>
  <td>Performs the CSRF validation.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="xSendFile">
  <td><?php echo CHtml::link('xSendFile()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'xSendFile-detail')); ?></td>
  <td>Sends existing file to a browser as a download using x-sendfile.</td>
  <td>CHttpRequest</td>
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
<tr id="createCsrfCookie">
  <td><?php echo CHtml::link('createCsrfCookie()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'createCsrfCookie-detail')); ?></td>
  <td>Creates a cookie with a randomly generated CSRF token.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="decodePathInfo">
  <td><?php echo CHtml::link('decodePathInfo()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'decodePathInfo-detail')); ?></td>
  <td>Decodes the path info.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getIsDeleteViaPostRequest">
  <td><?php echo CHtml::link('getIsDeleteViaPostRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsDeleteViaPostRequest-detail')); ?></td>
  <td>Returns whether this is a DELETE request which was tunneled through POST.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="getIsPutViaPostRequest">
  <td><?php echo CHtml::link('getIsPutViaPostRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsPutViaPostRequest-detail')); ?></td>
  <td>Returns whether this is a PUT request which was tunneled through POST.</td>
  <td>CHttpRequest</td>
</tr>
<tr id="normalizeRequest">
  <td><?php echo CHtml::link('normalizeRequest()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'normalizeRequest-detail')); ?></td>
  <td>Normalizes the request data.</td>
  <td>CHttpRequest</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="acceptTypes-detail">
acceptTypes<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getAcceptTypes</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getAcceptTypes')); ?>()</div>

<p>Returns user browser accept types, null if not present.</p>


<div class="detailHeader" id="baseUrl-detail">
baseUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getBaseUrl</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBaseUrl')); ?>(boolean $absolute=false)<br/>public void <?php echo CHtml::link('<b>setBaseUrl</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setBaseUrl')); ?>(string $value)</div>

<p>Returns the relative URL for the application.
This is similar to <?php echo CHtml::link('scriptUrl', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getScriptUrl')); ?> except that
it does not have the script file name, and the ending slashes are stripped off.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setScriptUrl', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setScriptUrl')); ?></li>
</ul>
</div>

<div class="detailHeader" id="browser-detail">
browser<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getBrowser</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getBrowser')); ?>(string $userAgent=NULL)</div>

<p>Returns information about the capabilities of user browser.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.get-browser.php">http://www.php.net/manual/en/function.get-browser.php</a></li>
</ul>
</div>

<div class="detailHeader" id="cookies-detail">
cookies<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public <?php echo CHtml::link('CCookieCollection', array('/site/doc', 'view' => 'CCookieCollection')); ?> <?php echo CHtml::link('<b>getCookies</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getCookies')); ?>()</div>

<p>Returns the cookie collection.
The result can be used like an associative array. Adding <?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?> objects
to the collection will send the cookies to the client; and removing the objects
from the collection will delete those cookies on the client.</p>


<div class="detailHeader" id="csrfCookie-detail">
csrfCookie<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$csrfCookie</b>;</div>

<p>the property values (in name-value pairs) used to initialize the CSRF cookie.
Any property of <?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?> may be initialized.
This property is effective only when <?php echo CHtml::link('enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation')); ?> is true.</p>


<div class="detailHeader" id="csrfToken-detail">
csrfToken<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getCsrfToken</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getCsrfToken')); ?>()</div>

<p>Returns the random token used to perform CSRF validation.
The token will be read from cookie first. If not found, a new token
will be generated.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation')); ?></li>
</ul>
</div>

<div class="detailHeader" id="csrfTokenName-detail">
csrfTokenName<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$csrfTokenName</b>;</div>

<p>the name of the token used to prevent CSRF. Defaults to 'YII_CSRF_TOKEN'.
This property is effectively only when <?php echo CHtml::link('enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation')); ?> is true.</p>


<div class="detailHeader" id="enableCookieValidation-detail">
enableCookieValidation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableCookieValidation</b>;</div>

<p>whether cookies should be validated to ensure they are not tampered. Defaults to false.</p>


<div class="detailHeader" id="enableCsrfValidation-detail">
enableCsrfValidation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$enableCsrfValidation</b>;</div>

<p>whether to enable CSRF (Cross-Site Request Forgery) validation. Defaults to false.
By setting this property to true, forms submitted to an Yii Web application must be originated
from the same application. If not, a 400 HTTP exception will be raised.
Note, this feature requires that the user client accepts cookie.
You also need to use <?php echo CHtml::link('CHtml::form', array('/site/doc', 'view' => 'CHtml', '#' => 'form')); ?> or <?php echo CHtml::link('CHtml::statefulForm', array('/site/doc', 'view' => 'CHtml', '#' => 'statefulForm')); ?> to generate
the needed HTML forms in your pages.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://seclab.stanford.edu/websec/csrf/csrf.pdf">http://seclab.stanford.edu/websec/csrf/csrf.pdf</a></li>
</ul>
</div>

<div class="detailHeader" id="hostInfo-detail">
hostInfo<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getHostInfo</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getHostInfo')); ?>(string $schema='')<br/>public void <?php echo CHtml::link('<b>setHostInfo</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setHostInfo')); ?>(string $value)</div>

<p>Returns the schema and host part of the application URL.
The returned URL does not have an ending slash.
By default this is determined based on the user request information.
You may explicitly specify it by setting the <?php echo CHtml::link('hostInfo', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setHostInfo')); ?> property.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setHostInfo', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setHostInfo')); ?></li>
</ul>
</div>

<div class="detailHeader" id="isAjaxRequest-detail">
isAjaxRequest<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsAjaxRequest</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsAjaxRequest')); ?>()</div>

<p>Returns whether this is an AJAX (XMLHttpRequest) request.</p>


<div class="detailHeader" id="isDeleteRequest-detail">
isDeleteRequest<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsDeleteRequest</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsDeleteRequest')); ?>()</div>

<p>Returns whether this is a DELETE request.</p>


<div class="detailHeader" id="isDeleteViaPostRequest-detail">
isDeleteViaPostRequest<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.11)
</span>
</div>

<div class="signature">
protected boolean <?php echo CHtml::link('<b>getIsDeleteViaPostRequest</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsDeleteViaPostRequest')); ?>()</div>

<p>Returns whether this is a DELETE request which was tunneled through POST.</p>


<div class="detailHeader" id="isFlashRequest-detail">
isFlashRequest<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.11)
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsFlashRequest</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsFlashRequest')); ?>()</div>

<p>Returns whether this is an Adobe Flash or Adobe Flex request.</p>


<div class="detailHeader" id="isPostRequest-detail">
isPostRequest<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsPostRequest</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsPostRequest')); ?>()</div>

<p>Returns whether this is a POST request.</p>


<div class="detailHeader" id="isPutRequest-detail">
isPutRequest<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.7)
</span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsPutRequest</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsPutRequest')); ?>()</div>

<p>Returns whether this is a PUT request.</p>


<div class="detailHeader" id="isPutViaPostRequest-detail">
isPutViaPostRequest<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.11)
</span>
</div>

<div class="signature">
protected boolean <?php echo CHtml::link('<b>getIsPutViaPostRequest</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsPutViaPostRequest')); ?>()</div>

<p>Returns whether this is a PUT request which was tunneled through POST.</p>


<div class="detailHeader" id="isSecureConnection-detail">
isSecureConnection<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public boolean <?php echo CHtml::link('<b>getIsSecureConnection</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getIsSecureConnection')); ?>()</div>

<p>Return if the request is sent via secure channel (https).</p>


<div class="detailHeader" id="pathInfo-detail">
pathInfo<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPathInfo</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPathInfo')); ?>()</div>

<p>Returns the path info of the currently requested URL.
This refers to the part that is after the entry script and before the question mark.
The starting and ending slashes are stripped off.</p>


<div class="detailHeader" id="port-detail">
port<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getPort</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPort')); ?>()<br/>public void <?php echo CHtml::link('<b>setPort</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setPort')); ?>(integer $value)</div>

<p>Returns the port to use for insecure requests.
Defaults to 80, or the port specified by the server if the current
request is insecure.
You may explicitly specify it by setting the <?php echo CHtml::link('port', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setPort')); ?> property.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setPort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setPort')); ?></li>
</ul>
</div>

<div class="detailHeader" id="preferredAcceptType-detail">
preferredAcceptType<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getPreferredAcceptType</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredAcceptType')); ?>()</div>

<p>Returns the user preferred accept MIME type.
The MIME type is returned as an array map (see <?php echo CHtml::link('parseAcceptHeader()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'parseAcceptHeader')); ?>).</p>


<div class="detailHeader" id="preferredAcceptTypes-detail">
preferredAcceptTypes<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getPreferredAcceptTypes</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredAcceptTypes')); ?>()</div>

<p>Returns an array of user accepted MIME types in order of preference.
Each array entry consists of a map with the type, subType, baseType and params, an array map of key-value parameters.
See <?php echo CHtml::link('parseAcceptHeader()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'parseAcceptHeader')); ?> for a description of the array map.</p>


<div class="detailHeader" id="preferredLanguage-detail">
preferredLanguage<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPreferredLanguage</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredLanguage')); ?>()</div>

<p>Returns the user preferred language.
The returned language ID will be canonicalized using <?php echo CHtml::link('CLocale::getCanonicalID', array('/site/doc', 'view' => 'CLocale', '#' => 'getCanonicalID')); ?>.</p>


<div class="detailHeader" id="preferredLanguages-detail">
preferredLanguages<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getPreferredLanguages</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPreferredLanguages')); ?>()</div>

<p>Returns an array of user accepted languages in order of preference.
The returned language IDs will NOT be canonicalized using <?php echo CHtml::link('CLocale::getCanonicalID', array('/site/doc', 'view' => 'CLocale', '#' => 'getCanonicalID')); ?>.</p>


<div class="detailHeader" id="queryString-detail">
queryString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getQueryString</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getQueryString')); ?>()</div>

<p>Returns part of the request URL that is after the question mark.</p>


<div class="detailHeader" id="rawBody-detail">
rawBody<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.13)
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getRawBody</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRawBody')); ?>()</div>

<p>Returns the raw HTTP request body.</p>


<div class="detailHeader" id="requestType-detail">
requestType<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getRequestType</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRequestType')); ?>()</div>

<p>Returns the request type, such as GET, POST, HEAD, PUT, DELETE.
Request type can be manually set in POST requests with a parameter named _method. Useful
for RESTful request from older browsers which do not support PUT or DELETE
natively (available since version 1.1.11).</p>


<div class="detailHeader" id="requestUri-detail">
requestUri<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getRequestUri</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRequestUri')); ?>()</div>

<p>Returns the request URI portion for the currently requested URL.
This refers to the portion that is after the <?php echo CHtml::link('host info', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'hostInfo')); ?> part.
It includes the <?php echo CHtml::link('query string', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'queryString')); ?> part if any.
The implementation of this method referenced Zend_Controller_Request_Http in Zend Framework.</p>


<div class="detailHeader" id="restParams-detail">
restParams<span class="detailHeaderTag">
property
 <em>read-only</em>  (available since v1.1.13 method became public)
</span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getRestParams</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRestParams')); ?>()</div>

<p>Returns request parameters. Typically PUT or DELETE.</p>


<div class="detailHeader" id="scriptFile-detail">
scriptFile<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getScriptFile</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getScriptFile')); ?>()</div>

<p>Returns entry script file path.</p>


<div class="detailHeader" id="scriptUrl-detail">
scriptUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getScriptUrl</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getScriptUrl')); ?>()<br/>public void <?php echo CHtml::link('<b>setScriptUrl</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setScriptUrl')); ?>(string $value)</div>

<p>Returns the relative URL of the entry script.
The implementation of this method referenced Zend_Controller_Request_Http in Zend Framework.</p>


<div class="detailHeader" id="securePort-detail">
securePort<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getSecurePort</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getSecurePort')); ?>()<br/>public void <?php echo CHtml::link('<b>setSecurePort</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setSecurePort')); ?>(integer $value)</div>

<p>Returns the port to use for secure requests.
Defaults to 443, or the port specified by the server if the current
request is secure.
You may explicitly specify it by setting the <?php echo CHtml::link('securePort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setSecurePort')); ?> property.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setSecurePort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setSecurePort')); ?></li>
</ul>
</div>

<div class="detailHeader" id="serverName-detail">
serverName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getServerName</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getServerName')); ?>()</div>

<p>Returns the server name.</p>


<div class="detailHeader" id="serverPort-detail">
serverPort<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public integer <?php echo CHtml::link('<b>getServerPort</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getServerPort')); ?>()</div>

<p>Returns the server port number.</p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUrl</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUrl')); ?>()</div>

<p>Returns the currently requested URL.
This is the same as <?php echo CHtml::link('getRequestUri', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRequestUri')); ?>.</p>


<div class="detailHeader" id="urlReferrer-detail">
urlReferrer<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUrlReferrer</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUrlReferrer')); ?>()</div>

<p>Returns the URL referrer, null if not present</p>


<div class="detailHeader" id="userAgent-detail">
userAgent<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUserAgent</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUserAgent')); ?>()</div>

<p>Returns the user agent, null if not present.</p>


<div class="detailHeader" id="userHost-detail">
userHost<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUserHost</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUserHost')); ?>()</div>

<p>Returns the user host name, null if it cannot be determined.</p>


<div class="detailHeader" id="userHostAddress-detail">
userHostAddress<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUserHostAddress</b>', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getUserHostAddress')); ?>()</div>

<p>Returns the user IP address.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="compareAcceptTypes-detail">
compareAcceptTypes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static integer <b>compareAcceptTypes</b>(array $a, array $b)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$a</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">user accepted MIME type as an array map</td>
</tr>
<tr>
  <td class="paramNameCol">$b</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">user accepted MIME type as an array map</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">-1, 0 or 1 if $a has respectively greater preference, equal preference or less preference than $b (higher preference comes first).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L895">yii\web\CHttpRequest.php#L895</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">compareAcceptTypes</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;for&nbsp;equal&nbsp;quality&nbsp;first<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #DD0000">'q'</span><span style="color: #007700">]===</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #DD0000">'q'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'*'&nbsp;</span><span style="color: #007700">xor&nbsp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'subType'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'*'&nbsp;</span><span style="color: #007700">xor&nbsp;</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'subType'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'*'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;finally,&nbsp;higher&nbsp;number&nbsp;of&nbsp;parameters&nbsp;counts&nbsp;as&nbsp;greater&nbsp;precedence<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">])===</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">])&lt;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;more&nbsp;specific&nbsp;takes&nbsp;precedence&nbsp;-&nbsp;whichever&nbsp;one&nbsp;doesn't&nbsp;have&nbsp;a&nbsp;*&nbsp;subType<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'subType'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'*'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;more&nbsp;specific&nbsp;takes&nbsp;precedence&nbsp;-&nbsp;whichever&nbsp;one&nbsp;doesn't&nbsp;have&nbsp;a&nbsp;*&nbsp;type<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'*'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #DD0000">'q'</span><span style="color: #007700">]&lt;</span><span style="color: #0000BB">$b</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #DD0000">'q'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">:&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Compare function for determining the preference of accepted MIME type array maps
See <?php echo CHtml::link('parseAcceptHeader()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'parseAcceptHeader')); ?> for the format of $a and $b</p>


<div class="detailHeader" id="createCsrfCookie-detail">
createCsrfCookie()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected <?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?> <b>createCsrfCookie</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?></td>
  <td class="paramDescCol">the generated cookie</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L1199">yii\web\CHttpRequest.php#L1199</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createCsrfCookie</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CHttpCookie</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">,</span><span style="color: #0000BB">sha1</span><span style="color: #007700">(</span><span style="color: #0000BB">uniqid</span><span style="color: #007700">(</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(),</span><span style="color: #0000BB">true</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfCookie</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfCookie&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a cookie with a randomly generated CSRF token.
Initial values specified in <?php echo CHtml::link('csrfCookie', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'csrfCookie')); ?> will be applied
to the generated cookie.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation')); ?></li>
</ul>
</div>

<div class="detailHeader" id="decodePathInfo-detail">
decodePathInfo()
<span class="detailHeaderTag">
method
(available since v1.1.10)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>decodePathInfo</b>(string $pathInfo)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pathInfo</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">encoded path info</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">decoded path info</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L462">yii\web\CHttpRequest.php#L462</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">decodePathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">urldecode</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;is&nbsp;it&nbsp;UTF-8?<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;http://w3.org/International/questions/qa-forms-utf-8.html<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'%^(?:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[\x09\x0A\x0D\x20-\x7E]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;ASCII<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;[\xC2-\xDF][\x80-\xBF]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;non-overlong&nbsp;2-byte<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;\xE0[\xA0-\xBF][\x80-\xBF]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;excluding&nbsp;overlongs<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}&nbsp;&nbsp;#&nbsp;straight&nbsp;3-byte<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;\xED[\x80-\x9F][\x80-\xBF]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;excluding&nbsp;surrogates<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;\xF0[\x90-\xBF][\x80-\xBF]{2}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;planes&nbsp;1-3<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;[\xF1-\xF3][\x80-\xBF]{3}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;planes&nbsp;4-15<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;\xF4[\x80-\x8F][\x80-\xBF]{2}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;plane&nbsp;16<br />&nbsp;&nbsp;&nbsp;&nbsp;)*$%xs'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">utf8_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Decodes the path info.
This method is an improved variant of the native urldecode() function and used in <?php echo CHtml::link('getPathInfo()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPathInfo')); ?> to
decode the path part of the request URI. You may override this method to change the way the path info is being decoded.</p>


<div class="detailHeader" id="getAcceptTypes-detail">
getAcceptTypes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getAcceptTypes</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user browser accept types, null if not present</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L709">yii\web\CHttpRequest.php#L709</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getAcceptTypes</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_ACCEPT'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_ACCEPT'</span><span style="color: #007700">]:</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns user browser accept types, null if not present.</p>


<div class="detailHeader" id="getBaseUrl-detail">
getBaseUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getBaseUrl</b>(boolean $absolute=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$absolute</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to return an absolute URL. Defaults to false, meaning returning a relative one.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the relative URL for the application</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L361">yii\web\CHttpRequest.php#L361</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$absolute</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getScriptUrl</span><span style="color: #007700">()),</span><span style="color: #DD0000">'\\/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$absolute&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHostInfo</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the relative URL for the application.
This is similar to <?php echo CHtml::link('scriptUrl', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getScriptUrl')); ?> except that
it does not have the script file name, and the ending slashes are stripped off.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setScriptUrl', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setScriptUrl')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getBrowser-detail">
getBrowser()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getBrowser</b>(string $userAgent=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$userAgent</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the user agent to be analyzed. Defaults to null, meaning using the
current User-Agent HTTP header information.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">user browser capabilities.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L700">yii\web\CHttpRequest.php#L700</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBrowser</span><span style="color: #007700">(</span><span style="color: #0000BB">$userAgent</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">get_browser</span><span style="color: #007700">(</span><span style="color: #0000BB">$userAgent</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns information about the capabilities of user browser.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.get-browser.php">http://www.php.net/manual/en/function.get-browser.php</a></li>
</ul>
</div>

<div class="detailHeader" id="getCookies-detail">
getCookies()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CCookieCollection', array('/site/doc', 'view' => 'CCookieCollection')); ?> <b>getCookies</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CCookieCollection', array('/site/doc', 'view' => 'CCookieCollection')); ?></td>
  <td class="paramDescCol">the cookie collection.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L783">yii\web\CHttpRequest.php#L783</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cookies</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cookies</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_cookies</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">CCookieCollection</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the cookie collection.
The result can be used like an associative array. Adding <?php echo CHtml::link('CHttpCookie', array('/site/doc', 'view' => 'CHttpCookie')); ?> objects
to the collection will send the cookies to the client; and removing the objects
from the collection will delete those cookies on the client.</p>


<div class="detailHeader" id="getCsrfToken-detail">
getCsrfToken()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getCsrfToken</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the random token for CSRF validation.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L1176">yii\web\CHttpRequest.php#L1176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getCsrfToken</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_csrfToken</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$cookie&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_csrfToken</span><span style="color: #007700">=</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">)==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createCsrfCookie</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_csrfToken</span><span style="color: #007700">=</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">,</span><span style="color: #0000BB">$cookie</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_csrfToken</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the random token used to perform CSRF validation.
The token will be read from cookie first. If not found, a new token
will be generated.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getDelete-detail">
getDelete()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getDelete</b>(string $name, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the DELETE parameter name</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default parameter value if the DELETE parameter does not exist.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the DELETE parameter value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L213">yii\web\CHttpRequest.php#L213</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsDeleteViaPostRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPost</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsDeleteRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$restParams</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRestParams</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$restParams</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$restParams</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the named DELETE parameter value.
If the DELETE parameter does not exist or if the current request is not a DELETE request,
the second parameter to this method will be returned.
If the DELETE request was tunneled through POST via _method parameter, the POST parameter
will be returned instead (available since version 1.1.11).</p>


<div class="detailHeader" id="getHostInfo-detail">
getHostInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getHostInfo</b>(string $schema='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$schema</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">schema to use (e.g. http, https). If empty, the schema used for the current request will be used.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">schema and hostname part (with port number if needed) of the request URL (e.g. http://www.yiiframework.com)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L305">yii\web\CHttpRequest.php#L305</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHostInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$secure</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsSecureConnection</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http</span><span style="color: #007700">=</span><span style="color: #DD0000">'https'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$http</span><span style="color: #007700">=</span><span style="color: #DD0000">'http'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_HOST'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$http</span><span style="color: #007700">.</span><span style="color: #DD0000">'://'</span><span style="color: #007700">.</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_HOST'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$http</span><span style="color: #007700">.</span><span style="color: #DD0000">'://'</span><span style="color: #007700">.</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_NAME'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">=</span><span style="color: #0000BB">$secure&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSecurePort</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPort</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$port</span><span style="color: #007700">!==</span><span style="color: #0000BB">80&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$secure</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$port</span><span style="color: #007700">!==</span><span style="color: #0000BB">443&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$secure</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">.=</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$port</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$schema</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$secure</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsSecureConnection</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$secure&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">'https'&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">$secure&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">'http'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">=</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">'https'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSecurePort</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPort</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$port</span><span style="color: #007700">!==</span><span style="color: #0000BB">80&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">'http'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">!==</span><span style="color: #0000BB">443&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">===</span><span style="color: #DD0000">'https'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">=</span><span style="color: #DD0000">':'</span><span style="color: #007700">.</span><span style="color: #0000BB">$port</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$port</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">,</span><span style="color: #DD0000">':'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$schema</span><span style="color: #007700">.</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">,</span><span style="color: #0000BB">strcspn</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">,</span><span style="color: #DD0000">':'</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)+</span><span style="color: #0000BB">1</span><span style="color: #007700">).</span><span style="color: #0000BB">$port</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the schema and host part of the application URL.
The returned URL does not have an ending slash.
By default this is determined based on the user request information.
You may explicitly specify it by setting the <?php echo CHtml::link('hostInfo', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setHostInfo')); ?> property.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setHostInfo', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setHostInfo')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getIsAjaxRequest-detail">
getIsAjaxRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsAjaxRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is an AJAX (XMLHttpRequest) request.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L612">yii\web\CHttpRequest.php#L612</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsAjaxRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_REQUESTED_WITH'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_REQUESTED_WITH'</span><span style="color: #007700">]===</span><span style="color: #DD0000">'XMLHttpRequest'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether this is an AJAX (XMLHttpRequest) request.</p>


<div class="detailHeader" id="getIsDeleteRequest-detail">
getIsDeleteRequest()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsDeleteRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is a DELETE request.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L573">yii\web\CHttpRequest.php#L573</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsDeleteRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">],</span><span style="color: #DD0000">'DELETE'</span><span style="color: #007700">))&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsDeleteViaPostRequest</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether this is a DELETE request.</p>


<div class="detailHeader" id="getIsDeleteViaPostRequest-detail">
getIsDeleteViaPostRequest()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>getIsDeleteViaPostRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is a DELETE request tunneled through POST.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L583">yii\web\CHttpRequest.php#L583</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsDeleteViaPostRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'_method'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'_method'</span><span style="color: #007700">],</span><span style="color: #DD0000">'DELETE'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether this is a DELETE request which was tunneled through POST.</p>


<div class="detailHeader" id="getIsFlashRequest-detail">
getIsFlashRequest()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsFlashRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is an Adobe Flash or Adobe Flex request.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L622">yii\web\CHttpRequest.php#L622</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsFlashRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">stripos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">],</span><span style="color: #DD0000">'Shockwave'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">stripos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">],</span><span style="color: #DD0000">'Flash'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether this is an Adobe Flash or Adobe Flex request.</p>


<div class="detailHeader" id="getIsPostRequest-detail">
getIsPostRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsPostRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is a POST request.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L563">yii\web\CHttpRequest.php#L563</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsPostRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">],</span><span style="color: #DD0000">'POST'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether this is a POST request.</p>


<div class="detailHeader" id="getIsPutRequest-detail">
getIsPutRequest()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsPutRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is a PUT request.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L593">yii\web\CHttpRequest.php#L593</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsPutRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">],</span><span style="color: #DD0000">'PUT'</span><span style="color: #007700">))&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsPutViaPostRequest</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether this is a PUT request.</p>


<div class="detailHeader" id="getIsPutViaPostRequest-detail">
getIsPutViaPostRequest()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>getIsPutViaPostRequest</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether this is a PUT request tunneled through POST.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L603">yii\web\CHttpRequest.php#L603</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsPutViaPostRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'_method'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'_method'</span><span style="color: #007700">],</span><span style="color: #DD0000">'PUT'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns whether this is a PUT request which was tunneled through POST.</p>


<div class="detailHeader" id="getIsSecureConnection-detail">
getIsSecureConnection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>getIsSecureConnection</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">if the request is sent via secure channel (https)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L538">yii\web\CHttpRequest.php#L538</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsSecureConnection</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTPS'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTPS'</span><span style="color: #007700">]==</span><span style="color: #DD0000">'on'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTPS'</span><span style="color: #007700">]==</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_FORWARDED_PROTO'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_FORWARDED_PROTO'</span><span style="color: #007700">]==</span><span style="color: #DD0000">'https'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Return if the request is sent via secure channel (https).</p>


<div class="detailHeader" id="getParam-detail">
getParam()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getParam</b>(string $name, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the GET parameter name</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default parameter value if the GET parameter does not exist.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the GET parameter value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L169">yii\web\CHttpRequest.php#L169</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getParam</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the named GET or POST parameter value.
If the GET or POST parameter does not exist, the second parameter to this method will be returned.
If both GET and POST contains such a named parameter, the GET parameter takes precedence.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getQuery', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getQuery')); ?></li>
	<li><?php echo CHtml::link('getPost', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPost')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getPathInfo-detail">
getPathInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPathInfo</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">part of the request URL that is after the entry script and before the question mark.
Note, the returned pathinfo is decoded starting from 1.1.4.
Prior to 1.1.4, whether it is decoded or not depends on the server configuration
(in most cases it is not decoded).</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L427">yii\web\CHttpRequest.php#L427</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPathInfo</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pathInfo</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequestUri</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #DD0000">'?'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">decodePathInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getScriptUrl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">$scriptUrl</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptUrl</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$baseUrl</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_SELF'</span><span style="color: #007700">],</span><span style="color: #0000BB">$scriptUrl</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_SELF'</span><span style="color: #007700">],</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$scriptUrl</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CHttpRequest&nbsp;is&nbsp;unable&nbsp;to&nbsp;determine&nbsp;the&nbsp;path&nbsp;info&nbsp;of&nbsp;the&nbsp;request.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pathInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathInfo</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pathInfo</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the path info of the currently requested URL.
This refers to the part that is after the entry script and before the question mark.
The starting and ending slashes are stripped off.</p>


<div class="detailHeader" id="getPort-detail">
getPort()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getPort</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">port number for insecure requests.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L725">yii\web\CHttpRequest.php#L725</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPort</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_port</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_port</span><span style="color: #007700">=!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsSecureConnection</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_PORT'</span><span style="color: #007700">])&nbsp;?&nbsp;(int)</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_PORT'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_port</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the port to use for insecure requests.
Defaults to 80, or the port specified by the server if the current
request is insecure.
You may explicitly specify it by setting the <?php echo CHtml::link('port', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setPort')); ?> property.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setPort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setPort')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getPost-detail">
getPost()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getPost</b>(string $name, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the POST parameter name</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default parameter value if the POST parameter does not exist.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the POST parameter value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L197">yii\web\CHttpRequest.php#L197</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPost</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the named POST parameter value.
If the POST parameter does not exist, the second parameter to this method will be returned.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getParam', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getParam')); ?></li>
	<li><?php echo CHtml::link('getQuery', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getQuery')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getPreferredAcceptType-detail">
getPreferredAcceptType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getPreferredAcceptType</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the user preferred accept MIME type or false if the user does not have any.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L938">yii\web\CHttpRequest.php#L938</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPreferredAcceptType</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$preferredAcceptTypes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPreferredAcceptTypes</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;empty(</span><span style="color: #0000BB">$preferredAcceptTypes</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$preferredAcceptTypes</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the user preferred accept MIME type.
The MIME type is returned as an array map (see <?php echo CHtml::link('parseAcceptHeader()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'parseAcceptHeader')); ?>).</p>


<div class="detailHeader" id="getPreferredAcceptTypes-detail">
getPreferredAcceptTypes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getPreferredAcceptTypes</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the user accepted MIME types, as array maps, in the order of preference.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L922">yii\web\CHttpRequest.php#L922</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPreferredAcceptTypes</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_preferredAcceptTypes</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accepts</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">parseAcceptHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAcceptTypes</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$accepts</span><span style="color: #007700">,array(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">),</span><span style="color: #DD0000">'compareAcceptTypes'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_preferredAcceptTypes</span><span style="color: #007700">=</span><span style="color: #0000BB">$accepts</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_preferredAcceptTypes</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns an array of user accepted MIME types in order of preference.
Each array entry consists of a map with the type, subType, baseType and params, an array map of key-value parameters.
See <?php echo CHtml::link('parseAcceptHeader()', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'parseAcceptHeader')); ?> for a description of the array map.</p>


<div class="detailHeader" id="getPreferredLanguage-detail">
getPreferredLanguage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPreferredLanguage</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the user preferred language or false if the user does not have any.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L982">yii\web\CHttpRequest.php#L982</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPreferredLanguage</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$preferredLanguages</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPreferredLanguages</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;!empty(</span><span style="color: #0000BB">$preferredLanguages</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">CLocale</span><span style="color: #007700">::</span><span style="color: #0000BB">getCanonicalID</span><span style="color: #007700">(</span><span style="color: #0000BB">$preferredLanguages</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])&nbsp;:&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the user preferred language.
The returned language ID will be canonicalized using <?php echo CHtml::link('CLocale::getCanonicalID', array('/site/doc', 'view' => 'CLocale', '#' => 'getCanonicalID')); ?>.</p>


<div class="detailHeader" id="getPreferredLanguages-detail">
getPreferredLanguages()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getPreferredLanguages</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the user accepted languages in the order of preference.
See <a href="http://tools.ietf.org/html/rfc2616#section-14.4">http://tools.ietf.org/html/rfc2616#section-14.4</a></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L950">yii\web\CHttpRequest.php#L950</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPreferredLanguages</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_preferredLanguages</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sortedLanguages</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_ACCEPT_LANGUAGE'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/([\w\-_]+)(?:\s*;\s*q\s*=\s*(\d*\.?\d*))?/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_ACCEPT_LANGUAGE'</span><span style="color: #007700">],</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$languages</span><span style="color: #007700">=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$q</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$q</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$q</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$q</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$languages</span><span style="color: #007700">[]=array((float)</span><span style="color: #0000BB">$q</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$languages</span><span style="color: #007700">,</span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">,</span><span style="color: #DD0000">'if($a[0]==$b[0])&nbsp;{return&nbsp;0;}&nbsp;return&nbsp;($a[0]&lt;$b[0])&nbsp;?&nbsp;1&nbsp;:&nbsp;-1;'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$languages&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$language</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sortedLanguages</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$language</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_preferredLanguages</span><span style="color: #007700">=</span><span style="color: #0000BB">$sortedLanguages</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_preferredLanguages</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns an array of user accepted languages in order of preference.
The returned language IDs will NOT be canonicalized using <?php echo CHtml::link('CLocale::getCanonicalID', array('/site/doc', 'view' => 'CLocale', '#' => 'getCanonicalID')); ?>.</p>


<div class="detailHeader" id="getPut-detail">
getPut()
<span class="detailHeaderTag">
method
(available since v1.1.7)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getPut</b>(string $name, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the PUT parameter name</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default parameter value if the PUT parameter does not exist.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the PUT parameter value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L238">yii\web\CHttpRequest.php#L238</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPut</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsPutViaPostRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPost</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsPutRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$restParams</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRestParams</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$restParams</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$restParams</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the named PUT parameter value.
If the PUT parameter does not exist or if the current request is not a PUT request,
the second parameter to this method will be returned.
If the PUT request was tunneled through POST via _method parameter, the POST parameter
will be returned instead (available since version 1.1.11).</p>


<div class="detailHeader" id="getQuery-detail">
getQuery()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>getQuery</b>(string $name, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the GET parameter name</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default parameter value if the GET parameter does not exist.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the GET parameter value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L183">yii\web\CHttpRequest.php#L183</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the named GET parameter value.
If the GET parameter does not exist, the second parameter to this method will be returned.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('getPost', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getPost')); ?></li>
	<li><?php echo CHtml::link('getParam', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getParam')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getQueryString-detail">
getQueryString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getQueryString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">part of the request URL that is after the question mark</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L529">yii\web\CHttpRequest.php#L529</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getQueryString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'QUERY_STRING'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'QUERY_STRING'</span><span style="color: #007700">]:</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns part of the request URL that is after the question mark.</p>


<div class="detailHeader" id="getRawBody-detail">
getRawBody()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getRawBody</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the request body</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L278">yii\web\CHttpRequest.php#L278</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRawBody</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$rawBody</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$rawBody</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rawBody</span><span style="color: #007700">=</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://input'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rawBody</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the raw HTTP request body.</p>


<div class="detailHeader" id="getRequestType-detail">
getRequestType()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getRequestType</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">request type, such as GET, POST, HEAD, PUT, DELETE.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L551">yii\web\CHttpRequest.php#L551</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRequestType</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'_method'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'_method'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtoupper</span><span style="color: #007700">(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_METHOD'</span><span style="color: #007700">]:</span><span style="color: #DD0000">'GET'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the request type, such as GET, POST, HEAD, PUT, DELETE.
Request type can be manually set in POST requests with a parameter named _method. Useful
for RESTful request from older browsers which do not support PUT or DELETE
natively (available since version 1.1.11).</p>


<div class="detailHeader" id="getRequestUri-detail">
getRequestUri()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getRequestUri</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the request URI portion for the currently requested URL.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L495">yii\web\CHttpRequest.php#L495</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRequestUri</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_REWRITE_URL'</span><span style="color: #007700">]))&nbsp;</span><span style="color: #FF8000">//&nbsp;IIS<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_X_REWRITE_URL'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REQUEST_URI'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_HOST'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">,</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_HOST'</span><span style="color: #007700">])!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^\w+:\/\/[^\/]+/'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^(http|https):\/\/[^\/]+/i'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'ORIG_PATH_INFO'</span><span style="color: #007700">]))&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;IIS&nbsp;5.0&nbsp;CGI<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'ORIG_PATH_INFO'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'QUERY_STRING'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">.=</span><span style="color: #DD0000">'?'</span><span style="color: #007700">.</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'QUERY_STRING'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CHttpRequest&nbsp;is&nbsp;unable&nbsp;to&nbsp;determine&nbsp;the&nbsp;request&nbsp;URI.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_requestUri</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the request URI portion for the currently requested URL.
This refers to the portion that is after the <?php echo CHtml::link('host info', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'hostInfo')); ?> part.
It includes the <?php echo CHtml::link('query string', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'queryString')); ?> part if any.
The implementation of this method referenced Zend_Controller_Request_Http in Zend Framework.</p>


<div class="detailHeader" id="getRestParams-detail">
getRestParams()
<span class="detailHeaderTag">
method
(available since v1.1.13 method became public)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getRestParams</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the request parameters</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L258">yii\web\CHttpRequest.php#L258</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getRestParams</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_restParams</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'mb_parse_str'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mb_parse_str</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRawBody</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parse_str</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRawBody</span><span style="color: #007700">(),&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_restParams</span><span style="color: #007700">=</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_restParams</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns request parameters. Typically PUT or DELETE.</p>


<div class="detailHeader" id="getScriptFile-detail">
getScriptFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getScriptFile</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">entry script file path (processed w/ realpath())</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L685">yii\web\CHttpRequest.php#L685</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getScriptFile</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptFile</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptFile</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptFile</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_FILENAME'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Returns entry script file path.</p>


<div class="detailHeader" id="getScriptUrl-detail">
getScriptUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getScriptUrl</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the relative URL of the entry script.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L385">yii\web\CHttpRequest.php#L385</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getScriptUrl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$scriptName</span><span style="color: #007700">=</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_FILENAME'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_NAME'</span><span style="color: #007700">])===</span><span style="color: #0000BB">$scriptName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_NAME'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_SELF'</span><span style="color: #007700">])===</span><span style="color: #0000BB">$scriptName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_SELF'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'ORIG_SCRIPT_NAME'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'ORIG_SCRIPT_NAME'</span><span style="color: #007700">])===</span><span style="color: #0000BB">$scriptName</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'ORIG_SCRIPT_NAME'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_SELF'</span><span style="color: #007700">],</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$scriptName</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_NAME'</span><span style="color: #007700">],</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">).</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$scriptName</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_FILENAME'</span><span style="color: #007700">],</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">])===</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'DOCUMENT_ROOT'</span><span style="color: #007700">],</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SCRIPT_FILENAME'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CHttpRequest&nbsp;is&nbsp;unable&nbsp;to&nbsp;determine&nbsp;the&nbsp;entry&nbsp;script&nbsp;URL.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the relative URL of the entry script.
The implementation of this method referenced Zend_Controller_Request_Http in Zend Framework.</p>


<div class="detailHeader" id="getSecurePort-detail">
getSecurePort()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getSecurePort</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">port number for secure requests.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L756">yii\web\CHttpRequest.php#L756</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getSecurePort</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_securePort</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_securePort</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsSecureConnection</span><span style="color: #007700">()&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_PORT'</span><span style="color: #007700">])&nbsp;?&nbsp;(int)</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_PORT'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">443</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_securePort</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the port to use for secure requests.
Defaults to 443, or the port specified by the server if the current
request is secure.
You may explicitly specify it by setting the <?php echo CHtml::link('securePort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setSecurePort')); ?> property.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('setSecurePort', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'setSecurePort')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getServerName-detail">
getServerName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getServerName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">server name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L631">yii\web\CHttpRequest.php#L631</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getServerName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_NAME'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the server name.</p>


<div class="detailHeader" id="getServerPort-detail">
getServerPort()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>getServerPort</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">server port number</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L640">yii\web\CHttpRequest.php#L640</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getServerPort</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'SERVER_PORT'</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the server port number.</p>


<div class="detailHeader" id="getUrl-detail">
getUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUrl</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">part of the request URL after the host info.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L291">yii\web\CHttpRequest.php#L291</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequestUri</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns the currently requested URL.
This is the same as <?php echo CHtml::link('getRequestUri', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'getRequestUri')); ?>.</p>


<div class="detailHeader" id="getUrlReferrer-detail">
getUrlReferrer()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUrlReferrer</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL referrer, null if not present</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L649">yii\web\CHttpRequest.php#L649</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrlReferrer</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_REFERER'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_REFERER'</span><span style="color: #007700">]:</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the URL referrer, null if not present</p>


<div class="detailHeader" id="getUserAgent-detail">
getUserAgent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUserAgent</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user agent, null if not present</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L658">yii\web\CHttpRequest.php#L658</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUserAgent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_USER_AGENT'</span><span style="color: #007700">]:</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the user agent, null if not present.</p>


<div class="detailHeader" id="getUserHost-detail">
getUserHost()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUserHost</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user host name, null if cannot be determined</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L676">yii\web\CHttpRequest.php#L676</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUserHost</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_HOST'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_HOST'</span><span style="color: #007700">]:</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the user host name, null if it cannot be determined.</p>


<div class="detailHeader" id="getUserHostAddress-detail">
getUserHostAddress()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUserHostAddress</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user IP address</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L667">yii\web\CHttpRequest.php#L667</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUserHostAddress</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_ADDR'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'REMOTE_ADDR'</span><span style="color: #007700">]:</span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the user IP address.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L108">yii\web\CHttpRequest.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">normalizeRequest</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method overrides the parent implementation by preprocessing
the user request data.</p>


<div class="detailHeader" id="normalizeRequest-detail">
normalizeRequest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>normalizeRequest</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L119">yii\web\CHttpRequest.php#L119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">normalizeRequest</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;normalize&nbsp;request<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'get_magic_quotes_gpc'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">get_magic_quotes_gpc</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stripSlashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stripSlashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stripSlashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$_REQUEST</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stripSlashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableCsrfValidation</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">attachEventHandler</span><span style="color: #007700">(</span><span style="color: #DD0000">'onBeginRequest'</span><span style="color: #007700">,array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'validateCsrfToken'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Normalizes the request data.
This method strips off slashes in request data if get_magic_quotes_gpc() returns true.
It also performs CSRF validation if <?php echo CHtml::link('enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation')); ?> is true.</p>


<div class="detailHeader" id="parseAcceptHeader-detail">
parseAcceptHeader()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>parseAcceptHeader</b>(string $header)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$header</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the accept header value to parse</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the user accepted MIME types.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L833">yii\web\CHttpRequest.php#L833</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">parseAcceptHeader</span><span style="color: #007700">(</span><span style="color: #0000BB">$header</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accepts</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;individual&nbsp;entries&nbsp;with&nbsp;their&nbsp;type,&nbsp;subtype,&nbsp;basetype&nbsp;and&nbsp;params<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(?:\G\s?,\s?|^)(\w+|\*)\/(\w+|\*)(?:\+(\w+))?|(?&lt;!^)\G(?:\s?;\s?(\w+)=([\w\.]+))/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$header</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;the&nbsp;regexp&nbsp;should&nbsp;(in&nbsp;theory)&nbsp;always&nbsp;return&nbsp;an&nbsp;array&nbsp;of&nbsp;6&nbsp;arrays<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)===</span><span style="color: #0000BB">6</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$itemLen</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$itemLen</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;fill&nbsp;out&nbsp;a&nbsp;content&nbsp;type<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accept</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'subType'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'baseType'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">null</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'params'</span><span style="color: #007700">=&gt;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;fill&nbsp;in&nbsp;the&nbsp;base&nbsp;type&nbsp;if&nbsp;it&nbsp;exists<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accept</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseType'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;continue&nbsp;looping&nbsp;while&nbsp;there&nbsp;is&nbsp;no&nbsp;new&nbsp;content&nbsp;type,&nbsp;to&nbsp;fill&nbsp;in&nbsp;all&nbsp;accompanying&nbsp;params<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$itemLen</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;the&nbsp;next&nbsp;content&nbsp;type&nbsp;is&nbsp;null,&nbsp;then&nbsp;the&nbsp;item&nbsp;is&nbsp;a&nbsp;param&nbsp;for&nbsp;the&nbsp;current&nbsp;content&nbsp;type<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;if&nbsp;this&nbsp;is&nbsp;the&nbsp;quality&nbsp;param,&nbsp;convert&nbsp;it&nbsp;to&nbsp;a&nbsp;double<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]===</span><span style="color: #DD0000">'q'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;sanity&nbsp;check&nbsp;on&nbsp;q&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$q</span><span style="color: #007700">=(double)</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$q</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$q</span><span style="color: #007700">=(double)</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$q</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$q</span><span style="color: #007700">=(double)</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accept</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$q</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accept</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">]]=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">5</span><span style="color: #007700">][</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;q&nbsp;defaults&nbsp;to&nbsp;1&nbsp;if&nbsp;not&nbsp;explicitly&nbsp;given<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(!isset(</span><span style="color: #0000BB">$accept</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #DD0000">'q'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accept</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #DD0000">'q'</span><span style="color: #007700">]=(double)</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$accepts</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$accept</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$accepts</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Parses an HTTP Accept header, returning an array map with all parts of each entry.
Each array entry consists of a map with the type, subType, baseType and params, an array map of key-value parameters,
obligatorily including a `q` value (i.e. preference ranking) as a double.
For example, an Accept header value of <code>'application/xhtml+xml;q=0.9;level=1'</code> would give an array entry of
<pre>
array(
       'type' =&gt; 'application',
       'subType' =&gt; 'xhtml',
       'baseType' =&gt; 'xml',
       'params' =&gt; array(
           'q' =&gt; 0.9,
           'level' =&gt; '1',
       ),
)
</pre>
<br/><br/>
<b>Please note:</b>
To avoid great complexity, there are no steps taken to ensure that quoted strings are treated properly.
If the header text includes quoted strings containing space or the , or ; characters then the results may not be correct!
<br/><br/>
See also <a href="http://tools.ietf.org/html/rfc2616#section-14.1">http://tools.ietf.org/html/rfc2616#section-14.1</a> for details on Accept header.</p>


<div class="detailHeader" id="redirect-detail">
redirect()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>redirect</b>(string $url, boolean $terminate=true, integer $statusCode=302)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL to be redirected to. Note that when URL is not
absolute (not starting with "/") it will be relative to current request URL.</td>
</tr>
<tr>
  <td class="paramNameCol">$terminate</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to terminate the current application</td>
</tr>
<tr>
  <td class="paramNameCol">$statusCode</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the HTTP status code. Defaults to 302. See <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html">http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html</a>
for details about HTTP status code.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L799">yii\web\CHttpRequest.php#L799</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">redirect</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$terminate</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,</span><span style="color: #0000BB">$statusCode</span><span style="color: #007700">=</span><span style="color: #0000BB">302</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #DD0000">'//'</span><span style="color: #007700">)!==</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHostInfo</span><span style="color: #007700">().</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Location:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$statusCode</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$terminate</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Redirects the browser to the specified URL.</p>


<div class="detailHeader" id="sendFile-detail">
sendFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>sendFile</b>(string $fileName, string $content, string $mimeType=NULL, boolean $terminate=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fileName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">file name</td>
</tr>
<tr>
  <td class="paramNameCol">$content</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">content to be set.</td>
</tr>
<tr>
  <td class="paramNameCol">$mimeType</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">mime type of the content. If null, it will be guessed automatically based on the given file name.</td>
</tr>
<tr>
  <td class="paramNameCol">$terminate</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to terminate the current application after calling this method</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L995">yii\web\CHttpRequest.php#L995</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">,</span><span style="color: #0000BB">$content</span><span style="color: #007700">,</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$terminate</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">=</span><span style="color: #0000BB">CFileHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getMimeTypeByExtension</span><span style="color: #007700">(</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mimeType</span><span style="color: #007700">=</span><span style="color: #DD0000">'text/plain'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">=(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'mb_strlen'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">mb_strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">,</span><span style="color: #DD0000">'8bit'</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contentEnd</span><span style="color: #007700">=</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_RANGE'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Accept-Ranges:&nbsp;bytes'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//client&nbsp;sent&nbsp;us&nbsp;a&nbsp;multibyte&nbsp;range,&nbsp;can&nbsp;not&nbsp;hold&nbsp;this&nbsp;one&nbsp;for&nbsp;now<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_RANGE'</span><span style="color: #007700">],</span><span style="color: #DD0000">','</span><span style="color: #007700">)!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Range:&nbsp;bytes&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #DD0000">-</span><span style="color: #0000BB">$contentEnd</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$fileSize</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">416</span><span style="color: #007700">,</span><span style="color: #DD0000">'Requested&nbsp;Range&nbsp;Not&nbsp;Satisfiable'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$range</span><span style="color: #007700">=</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'bytes='</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_RANGE'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//range&nbsp;requests&nbsp;starts&nbsp;from&nbsp;"-",&nbsp;so&nbsp;it&nbsp;means&nbsp;that&nbsp;data&nbsp;must&nbsp;be&nbsp;dumped&nbsp;the&nbsp;end&nbsp;point.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$range</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]===</span><span style="color: #DD0000">'-'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">=</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">-</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$range</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$range</span><span style="color: #007700">=</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,</span><span style="color: #0000BB">$range</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">=</span><span style="color: #0000BB">$range</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;check&nbsp;if&nbsp;the&nbsp;last-byte-pos&nbsp;presents&nbsp;in&nbsp;header<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((isset(</span><span style="color: #0000BB">$range</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$range</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contentEnd</span><span style="color: #007700">=</span><span style="color: #0000BB">$range</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/*&nbsp;Check&nbsp;the&nbsp;range&nbsp;and&nbsp;make&nbsp;sure&nbsp;it's&nbsp;treated&nbsp;according&nbsp;to&nbsp;the&nbsp;specs.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;End&nbsp;bytes&nbsp;can&nbsp;not&nbsp;be&nbsp;larger&nbsp;than&nbsp;$end.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$contentEnd</span><span style="color: #007700">=(</span><span style="color: #0000BB">$contentEnd&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">-</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$contentEnd</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Validate&nbsp;the&nbsp;requested&nbsp;range&nbsp;and&nbsp;return&nbsp;an&nbsp;error&nbsp;if&nbsp;it's&nbsp;not&nbsp;correct.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wrongContentStart</span><span style="color: #007700">=(</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">$contentEnd&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">$fileSize</span><span style="color: #007700">-</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$wrongContentStart</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Range:&nbsp;bytes&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #DD0000">-</span><span style="color: #0000BB">$contentEnd</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$fileSize</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">416</span><span style="color: #007700">,</span><span style="color: #DD0000">'Requested&nbsp;Range&nbsp;Not&nbsp;Satisfiable'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTTP/1.1&nbsp;206&nbsp;Partial&nbsp;Content'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Range:&nbsp;bytes&nbsp;</span><span style="color: #0000BB">$contentStart</span><span style="color: #DD0000">-</span><span style="color: #0000BB">$contentEnd</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$fileSize</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTTP/1.1&nbsp;200&nbsp;OK'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$length</span><span style="color: #007700">=</span><span style="color: #0000BB">$contentEnd</span><span style="color: #007700">-</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Calculate&nbsp;new&nbsp;content&nbsp;length<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Pragma:&nbsp;public'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Expires:&nbsp;0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cache-Control:&nbsp;must-revalidate,&nbsp;post-check=0,&nbsp;pre-check=0'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type:&nbsp;</span><span style="color: #0000BB">$mimeType</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Length:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Disposition:&nbsp;attachment;&nbsp;filename=\"</span><span style="color: #0000BB">$fileName</span><span style="color: #DD0000">\""</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Transfer-Encoding:&nbsp;binary'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'mb_substr'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">mb_substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">,</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">,</span><span style="color: #0000BB">$contentStart</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$terminate</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;clean&nbsp;up&nbsp;the&nbsp;application&nbsp;first&nbsp;because&nbsp;the&nbsp;file&nbsp;downloading&nbsp;could&nbsp;take&nbsp;long&nbsp;time<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;which&nbsp;may&nbsp;cause&nbsp;timeout&nbsp;of&nbsp;some&nbsp;resources&nbsp;(such&nbsp;as&nbsp;DB&nbsp;connection)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sends a file to user.</p>


<div class="detailHeader" id="setBaseUrl-detail">
setBaseUrl()
<span class="detailHeaderTag">
method
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
  <td class="paramDescCol">the relative URL for the application</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L374">yii\web\CHttpRequest.php#L374</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the relative URL for the application.
By default the URL is determined based on the entry script URL.
This setter is provided in case you want to change this behavior.</p>


<div class="detailHeader" id="setHostInfo-detail">
setHostInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setHostInfo</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the schema and host part of the application URL.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L348">yii\web\CHttpRequest.php#L348</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setHostInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the schema and host part of the application URL.
This setter is provided in case the schema and hostname cannot be determined
on certain Web servers.</p>


<div class="detailHeader" id="setPort-detail">
setPort()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setPort</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">port number.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L739">yii\web\CHttpRequest.php#L739</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setPort</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_port</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the port to use for insecure requests.
This setter is provided in case a custom port is necessary for certain
server configurations.</p>


<div class="detailHeader" id="setScriptUrl-detail">
setScriptUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setScriptUrl</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the relative URL for the application entry script.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L412">yii\web\CHttpRequest.php#L412</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setScriptUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_scriptUrl</span><span style="color: #007700">=</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sets the relative URL for the application entry script.
This setter is provided in case the entry script URL cannot be determined
on certain Web servers.</p>


<div class="detailHeader" id="setSecurePort-detail">
setSecurePort()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setSecurePort</b>(integer $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">port number.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L770">yii\web\CHttpRequest.php#L770</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setSecurePort</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_securePort</span><span style="color: #007700">=(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hostInfo</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Sets the port to use for secure requests.
This setter is provided in case a custom port is necessary for certain
server configurations.</p>


<div class="detailHeader" id="stripSlashes-detail">
stripSlashes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>stripSlashes</b>(mixed &$data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">input data to be processed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">processed data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L145">yii\web\CHttpRequest.php#L145</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">stripSlashes</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys</span><span style="color: #007700">=</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'stripslashes'</span><span style="color: #007700">,</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">array_combine</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">,</span><span style="color: #0000BB">array_values</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #DD0000">'stripSlashes'</span><span style="color: #007700">),</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">stripslashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Strips slashes from input data.
This method is applied when magic quotes is enabled.</p>


<div class="detailHeader" id="validateCsrfToken-detail">
validateCsrfToken()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>validateCsrfToken</b>(<?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?> $event)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CEvent', array('/site/doc', 'view' => 'CEvent')); ?></td>
  <td class="paramDescCol">event parameter</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L1218">yii\web\CHttpRequest.php#L1218</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">validateCsrfToken</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsPostRequest</span><span style="color: #007700">()&nbsp;||<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsPutRequest</span><span style="color: #007700">()&nbsp;||<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsDeleteRequest</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookies</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCookies</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$method</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getRequestType</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$method</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'POST'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$userToken</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPost</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'PUT'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$userToken</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPut</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'DELETE'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$userToken</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$userToken</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$cookies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">contains</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cookieToken</span><span style="color: #007700">=</span><span style="color: #0000BB">$cookies</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itemAt</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid</span><span style="color: #007700">=</span><span style="color: #0000BB">$cookieToken</span><span style="color: #007700">===</span><span style="color: #0000BB">$userToken</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$valid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$valid</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CHttpException</span><span style="color: #007700">(</span><span style="color: #0000BB">400</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;CSRF&nbsp;token&nbsp;could&nbsp;not&nbsp;be&nbsp;verified.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Performs the CSRF validation.
This is the event handler responding to <?php echo CHtml::link('CApplication::onBeginRequest', array('/site/doc', 'view' => 'CApplication', '#' => 'onBeginRequest')); ?>.
The default implementation will compare the CSRF token obtained
from a cookie and from a POST field. If they are different, a CSRF attack is detected.</p>


<div class="detailHeader" id="xSendFile-detail">
xSendFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>xSendFile</b>(string $filePath, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$filePath</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">file name with full path</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional options:
<ul>
<li>saveName: file name shown to the user, if not set real file name will be used</li>
<li>mimeType: mime type of the file, if not set it will be guessed automatically based on the file name, if set to null no content-type header will be sent.</li>
<li>xHeader: appropriate x-sendfile header, defaults to "X-Sendfile"</li>
<li>terminate: whether to terminate the current application after calling this method, defaults to true</li>
<li>forceDownload: specifies whether the file will be downloaded or shown inline, defaults to true. (Since version 1.1.9.)</li>
<li>addHeaders: an array of additional http headers in header-value pairs (available since version 1.1.10)</li>
</ul></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\CHttpRequest.php#L1136">yii\web\CHttpRequest.php#L1136</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">xSendFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$filePath</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'forceDownload'</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'forceDownload'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$disposition</span><span style="color: #007700">=</span><span style="color: #DD0000">'attachment'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$disposition</span><span style="color: #007700">=</span><span style="color: #DD0000">'inline'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'saveName'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'saveName'</span><span style="color: #007700">]=</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$filePath</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'mimeType'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'mimeType'</span><span style="color: #007700">]=</span><span style="color: #0000BB">CFileHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getMimeTypeByExtension</span><span style="color: #007700">(</span><span style="color: #0000BB">$filePath</span><span style="color: #007700">))===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'mimeType'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'text/plain'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'xHeader'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'xHeader'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'X-Sendfile'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'mimeType'</span><span style="color: #007700">]!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'mimeType'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Disposition:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$disposition</span><span style="color: #007700">.</span><span style="color: #DD0000">';&nbsp;filename="'</span><span style="color: #007700">.</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'saveName'</span><span style="color: #007700">].</span><span style="color: #DD0000">'"'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'addHeaders'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'addHeaders'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$header</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #0000BB">$header</span><span style="color: #007700">.</span><span style="color: #DD0000">':&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'xHeader'</span><span style="color: #007700">]).</span><span style="color: #DD0000">':&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$filePath</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'terminate'</span><span style="color: #007700">])&nbsp;||&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'terminate'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">end</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Sends existing file to a browser as a download using x-sendfile.
<br/><br/>
X-Sendfile is a feature allowing a web application to redirect the request for a file to the webserver
that in turn processes the request, this way eliminating the need to perform tasks like reading the file
and sending it to the user. When dealing with a lot of files (or very big files) this can lead to a great
increase in performance as the web application is allowed to terminate earlier while the webserver is
handling the request.
<br/><br/>
The request is sent to the server through a special non-standard HTTP-header.
When the web server encounters the presence of such header it will discard all output and send the file
specified by that header using web server internals including all optimizations like caching-headers.
<br/><br/>
As this header directive is non-standard different directives exists for different web servers applications:
<ul>
<li>Apache: <a href="http://tn123.org/mod_xsendfile">X-Sendfile</a></li>
<li>Lighttpd v1.4: <a href="http://redmine.lighttpd.net/projects/lighttpd/wiki/X-LIGHTTPD-send-file">X-LIGHTTPD-send-file</a></li>
<li>Lighttpd v1.5: <a href="http://redmine.lighttpd.net/projects/lighttpd/wiki/X-LIGHTTPD-send-file">X-Sendfile</a></li>
<li>Nginx: <a href="http://wiki.nginx.org/XSendfile">X-Accel-Redirect</a></li>
<li>Cherokee: <a href="http://www.cherokee-project.com/doc/other_goodies.html#x-sendfile">X-Sendfile and X-Accel-Redirect</a></li>
</ul>
So for this method to work the X-SENDFILE option/module should be enabled by the web server and
a proper xHeader should be sent.
<br/><br/>
<b>Note:</b>
This option allows to download files that are not under web folders, and even files that are otherwise protected (deny from all) like .htaccess
<br/><br/>
<b>Side effects</b>:
If this option is disabled by the web server, when this method is called a download configuration dialog
will open but the downloaded file will have 0 bytes.
<br/><br/>
<b>Known issues</b>:
There is a Bug with Internet Explorer 6, 7 and 8 when X-SENDFILE is used over an SSL connection, it will show
an error message like this: "Internet Explorer was not able to open this Internet site. The requested site is either unavailable or cannot be found.".
You can work around this problem by removing the <code>Pragma</code>-header.
<br/><br/>
<b>Example</b>:
<pre>
&lt;?php
   Yii::app()-&gt;request-&gt;xSendFile('/home/user/Pictures/picture1.jpg',array(
       'saveName'=&gt;'image1.jpg',
       'mimeType'=&gt;'image/jpeg',
       'terminate'=&gt;false,
   ));
?&gt;
</pre></p>


