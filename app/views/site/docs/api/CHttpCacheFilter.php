<?php
$this->pageTitle = $this->pageHeading = 'CHttpCacheFilter';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CHttpCacheFilter';
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
  <td><?php echo CHtml::link('system.web.filters', array('/site/doc', '#' => 'system.web.filters')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CHttpCacheFilter &raquo;
<?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IFilter', array('/site/doc', 'view' => 'IFilter')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1.11</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php">yii\web\filters\CHttpCacheFilter.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Da:Sourcerer &lt;webmaster@dasourcerer.net&gt;</td>
</tr>
</table>

<div id="classDescription">
CHttpCacheFilter implements http caching. It works a lot like <?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?>
as a filter, except that content caching is being done on the client side.</div>
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
<tr id="cacheControl">
  <td><?php echo CHtml::link('cacheControl', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'cacheControl-detail')); ?></td>
  <td>string</td>
  <td>Http cache control headers.</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="etagSeed">
  <td><?php echo CHtml::link('etagSeed', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeed-detail')); ?></td>
  <td>mixed</td>
  <td>Seed for the ETag.</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="etagSeedExpression">
  <td><?php echo CHtml::link('etagSeedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeedExpression-detail')); ?></td>
  <td>string|callback</td>
  <td>Expression for the ETag seed.</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="lastModified">
  <td><?php echo CHtml::link('lastModified', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModified-detail')); ?></td>
  <td>string|integer</td>
  <td>Timestamp for the last modification date.</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="lastModifiedExpression">
  <td><?php echo CHtml::link('lastModifiedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModifiedExpression-detail')); ?></td>
  <td>string|callback</td>
  <td>PHP Expression for the last modification date.</td>
  <td>CHttpCacheFilter</td>
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
<tr id="etagValue">
  <td><?php echo CHtml::link('etagValue', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagValue-detail')); ?></td>
  <td>string|boolean</td>
  <td>Gets the ETag out of either <?php echo CHtml::link('etagSeedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeedExpression')); ?> or <?php echo CHtml::link('etagSeed', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeed')); ?></td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="lastModifiedValue">
  <td><?php echo CHtml::link('lastModifiedValue', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModifiedValue-detail')); ?></td>
  <td>integer|boolean</td>
  <td>Gets the last modified value from either <?php echo CHtml::link('lastModifiedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModifiedExpression')); ?> or <?php echo CHtml::link('lastModified', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModified')); ?></td>
  <td>CHttpCacheFilter</td>
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
<tr class="inherited" id="filter">
  <td><?php echo CHtml::link('filter()', array('/site/doc', 'view' => 'CFilter', '#' => 'filter-detail')); ?></td>
  <td>Performs the filtering.</td>
  <td><?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?></td>
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
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CFilter', '#' => 'init-detail')); ?></td>
  <td>Initializes the filter.</td>
  <td><?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?></td>
</tr>
<tr id="preFilter">
  <td><?php echo CHtml::link('preFilter()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'preFilter-detail')); ?></td>
  <td>Performs the pre-action filtering.</td>
  <td>CHttpCacheFilter</td>
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
<tr id="checkEtag">
  <td><?php echo CHtml::link('checkEtag()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'checkEtag-detail')); ?></td>
  <td>Check if the etag supplied by the client matches our generated one</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="checkLastModified">
  <td><?php echo CHtml::link('checkLastModified()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'checkLastModified-detail')); ?></td>
  <td>Checks if the last modified date supplied by the client is still up to date</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="generateEtag">
  <td><?php echo CHtml::link('generateEtag()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'generateEtag-detail')); ?></td>
  <td>Generates a quoted string out of the seed</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="getEtagValue">
  <td><?php echo CHtml::link('getEtagValue()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'getEtagValue-detail')); ?></td>
  <td>Gets the ETag out of either <?php echo CHtml::link('etagSeedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeedExpression')); ?> or <?php echo CHtml::link('etagSeed', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeed')); ?></td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="getLastModifiedValue">
  <td><?php echo CHtml::link('getLastModifiedValue()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'getLastModifiedValue-detail')); ?></td>
  <td>Gets the last modified value from either <?php echo CHtml::link('lastModifiedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModifiedExpression')); ?> or <?php echo CHtml::link('lastModified', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModified')); ?></td>
  <td>CHttpCacheFilter</td>
</tr>
<tr class="inherited" id="postFilter">
  <td><?php echo CHtml::link('postFilter()', array('/site/doc', 'view' => 'CFilter', '#' => 'postFilter-detail')); ?></td>
  <td>Performs the post-action filtering.</td>
  <td><?php echo CHtml::link('CFilter', array('/site/doc', 'view' => 'CFilter')); ?></td>
</tr>
<tr id="send304Header">
  <td><?php echo CHtml::link('send304Header()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'send304Header-detail')); ?></td>
  <td>Sends the 304 HTTP status code to the client</td>
  <td>CHttpCacheFilter</td>
</tr>
<tr id="sendCacheControlHeader">
  <td><?php echo CHtml::link('sendCacheControlHeader()', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'sendCacheControlHeader-detail')); ?></td>
  <td>Sends the cache control header to the client</td>
  <td>CHttpCacheFilter</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="cacheControl-detail">
cacheControl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$cacheControl</b>;</div>

<p>Http cache control headers. Set this to an empty string in order to keep this
header from being sent entirely.</p>


<div class="detailHeader" id="etagSeed-detail">
etagSeed<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public mixed <b>$etagSeed</b>;</div>

<p>Seed for the ETag.
Can be anything that passes through <a href="http://php.net/serialize">serialize()</a>.</p>


<div class="detailHeader" id="etagSeedExpression-detail">
etagSeedExpression<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|callback <b>$etagSeedExpression</b>;</div>

<p>Expression for the ETag seed.
If set, this takes precedence over <?php echo CHtml::link('etagSeed', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeed')); ?>.
<br/><br/>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="etagValue-detail">
etagValue<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected string|boolean <?php echo CHtml::link('<b>getEtagValue</b>', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'getEtagValue')); ?>()</div>

<p>Gets the ETag out of either <?php echo CHtml::link('etagSeedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeedExpression')); ?> or <?php echo CHtml::link('etagSeed', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeed')); ?></p>


<div class="detailHeader" id="lastModified-detail">
lastModified<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|integer <b>$lastModified</b>;</div>

<p>Timestamp for the last modification date.
Must be either a string parsable by <a href="http://php.net/strtotime">strtotime()</a>
or an integer representing a unix timestamp.</p>


<div class="detailHeader" id="lastModifiedExpression-detail">
lastModifiedExpression<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string|callback <b>$lastModifiedExpression</b>;</div>

<p>PHP Expression for the last modification date.
If set, this takes precedence over <?php echo CHtml::link('lastModified', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModified')); ?>.
<br/><br/>
The PHP expression will be evaluated using <?php echo CHtml::link('evaluateExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'evaluateExpression')); ?>.
<br/><br/>
A PHP expression can be any PHP code that has a value. To learn more about what an expression is,
please refer to the <a href="http://www.php.net/manual/en/language.expressions.php">php manual</a>.</p>


<div class="detailHeader" id="lastModifiedValue-detail">
lastModifiedValue<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
protected integer|boolean <?php echo CHtml::link('<b>getLastModifiedValue</b>', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'getLastModifiedValue')); ?>()</div>

<p>Gets the last modified value from either <?php echo CHtml::link('lastModifiedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModifiedExpression')); ?> or <?php echo CHtml::link('lastModified', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModified')); ?>
and converts it into a unix timestamp if necessary</p>


<h2>Method Details</h2>

<div class="detailHeader" id="checkEtag-detail">
checkEtag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>checkEtag</b>(string $etag)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$etag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the supplied etag</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the supplied etag matches $etag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L163">yii\web\filters\CHttpCacheFilter.php#L163</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">checkEtag</span><span style="color: #007700">(</span><span style="color: #0000BB">$etag</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_NONE_MATCH'</span><span style="color: #007700">])&amp;&amp;</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_NONE_MATCH'</span><span style="color: #007700">]==</span><span style="color: #0000BB">$etag</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Check if the etag supplied by the client matches our generated one</p>


<div class="detailHeader" id="checkLastModified-detail">
checkLastModified()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>checkLastModified</b>(integer $lastModified)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$lastModified</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the last modified date</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the last modified date sent by the client is newer or equal to $lastModified</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L173">yii\web\filters\CHttpCacheFilter.php#L173</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">checkLastModified</span><span style="color: #007700">(</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_MODIFIED_SINCE'</span><span style="color: #007700">])&amp;&amp;@</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_MODIFIED_SINCE'</span><span style="color: #007700">])&gt;=</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Checks if the last modified date supplied by the client is still up to date</p>


<div class="detailHeader" id="generateEtag-detail">
generateEtag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>generateEtag</b>(mixed $seed)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$seed</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">Seed for the ETag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L205">yii\web\filters\CHttpCacheFilter.php#L205</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generateEtag</span><span style="color: #007700">(</span><span style="color: #0000BB">$seed</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #0000BB">base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">sha1</span><span style="color: #007700">(</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$seed</span><span style="color: #007700">),</span><span style="color: #0000BB">true</span><span style="color: #007700">)).</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates a quoted string out of the seed</p>


<div class="detailHeader" id="getEtagValue-detail">
getEtagValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string|boolean <b>getEtagValue</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string|boolean</td>
  <td class="paramDescCol">Either a quoted string serving as ETag or false if neither etagSeed nor etagSeedExpression have been set</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L149">yii\web\filters\CHttpCacheFilter.php#L149</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getEtagValue</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">etagSeedExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateEtag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">etagSeedExpression</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">etagSeed</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateEtag</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">etagSeed</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Gets the ETag out of either <?php echo CHtml::link('etagSeedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeedExpression')); ?> or <?php echo CHtml::link('etagSeed', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'etagSeed')); ?></p>


<div class="detailHeader" id="getLastModifiedValue-detail">
getLastModifiedValue()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer|boolean <b>getLastModifiedValue</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer|boolean</td>
  <td class="paramDescCol">A unix timestamp or false if neither lastModified nor
lastModifiedExpression have been set</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L121">yii\web\filters\CHttpCacheFilter.php#L121</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getLastModifiedValue</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModifiedExpression</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">evaluateExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModifiedExpression</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&amp;&amp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">==(int)</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">=</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Invalid&nbsp;expression&nbsp;for&nbsp;CHttpCacheFilter.lastModifiedExpression:&nbsp;The&nbsp;evaluation&nbsp;result&nbsp;"{value}"&nbsp;could&nbsp;not&nbsp;be&nbsp;understood&nbsp;by&nbsp;strtotime()'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{value}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModified</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModified</span><span style="color: #007700">)&amp;&amp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModified</span><span style="color: #007700">==(int)</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModified</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModified</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">=</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lastModified</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CHttpCacheFilter.lastModified&nbsp;contained&nbsp;a&nbsp;value&nbsp;that&nbsp;could&nbsp;not&nbsp;be&nbsp;understood&nbsp;by&nbsp;strtotime()'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Gets the last modified value from either <?php echo CHtml::link('lastModifiedExpression', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModifiedExpression')); ?> or <?php echo CHtml::link('lastModified', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'lastModified')); ?>
and converts it into a unix timestamp if necessary</p>


<div class="detailHeader" id="preFilter-detail">
preFilter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>preFilter</b>(<?php echo CHtml::link('CFilterChain', array('/site/doc', 'view' => 'CFilterChain')); ?> $filterChain)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$filterChain</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CFilterChain', array('/site/doc', 'view' => 'CFilterChain')); ?></td>
  <td class="paramDescCol">the filter chain that the filter is on.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the filtering process should continue and the action should be executed.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L63">yii\web\filters\CHttpCacheFilter.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">preFilter</span><span style="color: #007700">(</span><span style="color: #0000BB">$filterChain</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Only&nbsp;cache&nbsp;GET&nbsp;and&nbsp;HEAD&nbsp;requests<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequestType</span><span style="color: #007700">(),&nbsp;array(</span><span style="color: #DD0000">'GET'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HEAD'</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getLastModifiedValue</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$etag</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEtagValue</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$etag</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">&amp;&amp;</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$etag</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'ETag:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$etag</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_MODIFIED_SINCE'</span><span style="color: #007700">])&amp;&amp;isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_NONE_MATCH'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkLastModified</span><span style="color: #007700">(</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">)&amp;&amp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkEtag</span><span style="color: #007700">(</span><span style="color: #0000BB">$etag</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">send304Header</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sendCacheControlHeader</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_MODIFIED_SINCE'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkLastModified</span><span style="color: #007700">(</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">send304Header</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sendCacheControlHeader</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(isset(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_IF_NONE_MATCH'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkEtag</span><span style="color: #007700">(</span><span style="color: #0000BB">$etag</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">send304Header</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sendCacheControlHeader</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Last-Modified:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">gmdate</span><span style="color: #007700">(</span><span style="color: #DD0000">'D,&nbsp;d&nbsp;M&nbsp;Y&nbsp;H:i:s'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$lastModified</span><span style="color: #007700">).</span><span style="color: #DD0000">'&nbsp;GMT'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sendCacheControlHeader</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Performs the pre-action filtering.</p>


<div class="detailHeader" id="send304Header-detail">
send304Header()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>send304Header</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L181">yii\web\filters\CHttpCacheFilter.php#L181</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">send304Header</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTTP/1.1&nbsp;304&nbsp;Not&nbsp;Modified'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sends the 304 HTTP status code to the client</p>


<div class="detailHeader" id="sendCacheControlHeader-detail">
sendCacheControlHeader()
<span class="detailHeaderTag">
method
(available since v1.1.12)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>sendCacheControlHeader</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\filters\CHttpCacheFilter.php#L191">yii\web\filters\CHttpCacheFilter.php#L191</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">sendCacheControlHeader</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">session</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isStarted</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">session_cache_limiter</span><span style="color: #007700">(</span><span style="color: #DD0000">'public'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Pragma:'</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cache-Control:&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cacheControl</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Sends the cache control header to the client</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('cacheControl', array('/site/doc', 'view' => 'CHttpCacheFilter', '#' => 'cacheControl')); ?></li>
</ul>
</div>

