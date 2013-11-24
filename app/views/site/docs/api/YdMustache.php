<?php
$this->pageTitle = $this->pageHeading = 'YdMustache';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdMustache';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdMustache</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php">dressing/components/YdMustache.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Justin Hileman {@link http://justinhileman.com}</td>
</tr>
</table>

<div id="classDescription">
A Mustache implementation in PHP.
<br/><br/>
<a href="http://defunkt.github.com/mustache">http://defunkt.github.com/mustache</a>
<br/><br/>
Mustache is a framework-agnostic logic-less templating language. It enforces separation of view
logic from template files. In fact, it is not even possible to embed logic in the template.
<br/><br/>
This is very, very rad.</div>
<a name="properties"></a>

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
<tr id="_charset">
  <td><?php echo CHtml::link('_charset', array('/site/doc', 'view' => 'YdMustache', '#' => '_charset-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_context">
  <td><?php echo CHtml::link('_context', array('/site/doc', 'view' => 'YdMustache', '#' => '_context-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_ctag">
  <td><?php echo CHtml::link('_ctag', array('/site/doc', 'view' => 'YdMustache', '#' => '_ctag-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_localPragmas">
  <td><?php echo CHtml::link('_localPragmas', array('/site/doc', 'view' => 'YdMustache', '#' => '_localPragmas-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_otag">
  <td><?php echo CHtml::link('_otag', array('/site/doc', 'view' => 'YdMustache', '#' => '_otag-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_partials">
  <td><?php echo CHtml::link('_partials', array('/site/doc', 'view' => 'YdMustache', '#' => '_partials-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_pragmas">
  <td><?php echo CHtml::link('_pragmas', array('/site/doc', 'view' => 'YdMustache', '#' => '_pragmas-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_pragmasImplemented">
  <td><?php echo CHtml::link('_pragmasImplemented', array('/site/doc', 'view' => 'YdMustache', '#' => '_pragmasImplemented-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_tagRegEx">
  <td><?php echo CHtml::link('_tagRegEx', array('/site/doc', 'view' => 'YdMustache', '#' => '_tagRegEx-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_template">
  <td><?php echo CHtml::link('_template', array('/site/doc', 'view' => 'YdMustache', '#' => '_template-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMustache</td>
</tr>
<tr id="_throwsExceptions">
  <td><?php echo CHtml::link('_throwsExceptions', array('/site/doc', 'view' => 'YdMustache', '#' => '_throwsExceptions-detail')); ?></td>
  <td></td>
  <td>Should this Mustache throw exceptions when it finds unexpected tags?</td>
  <td>YdMustache</td>
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
<tr id="__clone">
  <td><?php echo CHtml::link('__clone()', array('/site/doc', 'view' => 'YdMustache', '#' => '__clone-detail')); ?></td>
  <td>Mustache class clone method.</td>
  <td>YdMustache</td>
</tr>
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'YdMustache', '#' => '__construct-detail')); ?></td>
  <td>Mustache class constructor.</td>
  <td>YdMustache</td>
</tr>
<tr id="__toString">
  <td><?php echo CHtml::link('__toString()', array('/site/doc', 'view' => 'YdMustache', '#' => '__toString-detail')); ?></td>
  <td>Wrap the render() function for string conversion.</td>
  <td>YdMustache</td>
</tr>
<tr id="render">
  <td><?php echo CHtml::link('render()', array('/site/doc', 'view' => 'YdMustache', '#' => 'render-detail')); ?></td>
  <td>Render the given template and view object.</td>
  <td>YdMustache</td>
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
<tr id="_changeDelimiter">
  <td><?php echo CHtml::link('_changeDelimiter()', array('/site/doc', 'view' => 'YdMustache', '#' => '_changeDelimiter-detail')); ?></td>
  <td>Change the Mustache tag delimiter. This method also replaces this object's current</td>
  <td>YdMustache</td>
</tr>
<tr id="_findSection">
  <td><?php echo CHtml::link('_findSection()', array('/site/doc', 'view' => 'YdMustache', '#' => '_findSection-detail')); ?></td>
  <td>Extract the first section from $template.</td>
  <td>YdMustache</td>
</tr>
<tr id="_findVariableInContext">
  <td><?php echo CHtml::link('_findVariableInContext()', array('/site/doc', 'view' => 'YdMustache', '#' => '_findVariableInContext-detail')); ?></td>
  <td>Get a variable from the context array. Internal helper used by getVariable() to abstract</td>
  <td>YdMustache</td>
</tr>
<tr id="_getPartial">
  <td><?php echo CHtml::link('_getPartial()', array('/site/doc', 'view' => 'YdMustache', '#' => '_getPartial-detail')); ?></td>
  <td>Retrieve the partial corresponding to the requested tag name.</td>
  <td>YdMustache</td>
</tr>
<tr id="_getPragmaOptions">
  <td><?php echo CHtml::link('_getPragmaOptions()', array('/site/doc', 'view' => 'YdMustache', '#' => '_getPragmaOptions-detail')); ?></td>
  <td>Return pragma options, if any.</td>
  <td>YdMustache</td>
</tr>
<tr id="_getVariable">
  <td><?php echo CHtml::link('_getVariable()', array('/site/doc', 'view' => 'YdMustache', '#' => '_getVariable-detail')); ?></td>
  <td>Get a variable from the context array.</td>
  <td>YdMustache</td>
</tr>
<tr id="_hasPragma">
  <td><?php echo CHtml::link('_hasPragma()', array('/site/doc', 'view' => 'YdMustache', '#' => '_hasPragma-detail')); ?></td>
  <td>Check whether this Mustache has a specific pragma.</td>
  <td>YdMustache</td>
</tr>
<tr id="_popContext">
  <td><?php echo CHtml::link('_popContext()', array('/site/doc', 'view' => 'YdMustache', '#' => '_popContext-detail')); ?></td>
  <td>Remove the latest context from the stack.</td>
  <td>YdMustache</td>
</tr>
<tr id="_preparePragmaRegEx">
  <td><?php echo CHtml::link('_preparePragmaRegEx()', array('/site/doc', 'view' => 'YdMustache', '#' => '_preparePragmaRegEx-detail')); ?></td>
  <td>Prepare a pragma RegEx for the given opening/closing tags.</td>
  <td>YdMustache</td>
</tr>
<tr id="_prepareSectionRegEx">
  <td><?php echo CHtml::link('_prepareSectionRegEx()', array('/site/doc', 'view' => 'YdMustache', '#' => '_prepareSectionRegEx-detail')); ?></td>
  <td>Prepare a section RegEx string for the given opening/closing tags.</td>
  <td>YdMustache</td>
</tr>
<tr id="_prepareTagRegEx">
  <td><?php echo CHtml::link('_prepareTagRegEx()', array('/site/doc', 'view' => 'YdMustache', '#' => '_prepareTagRegEx-detail')); ?></td>
  <td>Prepare a tag RegEx for the given opening/closing tags.</td>
  <td>YdMustache</td>
</tr>
<tr id="_pushContext">
  <td><?php echo CHtml::link('_pushContext()', array('/site/doc', 'view' => 'YdMustache', '#' => '_pushContext-detail')); ?></td>
  <td>Push a local context onto the stack.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderComment">
  <td><?php echo CHtml::link('_renderComment()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderComment-detail')); ?></td>
  <td>Render a comment (i.e. return an empty string).</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderEscaped">
  <td><?php echo CHtml::link('_renderEscaped()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderEscaped-detail')); ?></td>
  <td>Escape and return the requested tag.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderPartial">
  <td><?php echo CHtml::link('_renderPartial()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderPartial-detail')); ?></td>
  <td>Render the requested partial.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderPragma">
  <td><?php echo CHtml::link('_renderPragma()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderPragma-detail')); ?></td>
  <td>A preg_replace helper to remove {{%PRAGMA}} tags and enable requested pragma.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderPragmas">
  <td><?php echo CHtml::link('_renderPragmas()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderPragmas-detail')); ?></td>
  <td>Initialize pragmas and remove all pragma tags.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderTag">
  <td><?php echo CHtml::link('_renderTag()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderTag-detail')); ?></td>
  <td>Render the named tag, given the specified modifier.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderTags">
  <td><?php echo CHtml::link('_renderTags()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderTags-detail')); ?></td>
  <td>Loop through and render individual Mustache tags.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderTemplate">
  <td><?php echo CHtml::link('_renderTemplate()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderTemplate-detail')); ?></td>
  <td>Internal render function, used for recursive calls.</td>
  <td>YdMustache</td>
</tr>
<tr id="_renderUnescaped">
  <td><?php echo CHtml::link('_renderUnescaped()', array('/site/doc', 'view' => 'YdMustache', '#' => '_renderUnescaped-detail')); ?></td>
  <td>Return the requested tag unescaped.</td>
  <td>YdMustache</td>
</tr>
<tr id="_setOptions">
  <td><?php echo CHtml::link('_setOptions()', array('/site/doc', 'view' => 'YdMustache', '#' => '_setOptions-detail')); ?></td>
  <td>Helper function for setting options from constructor args.</td>
  <td>YdMustache</td>
</tr>
<tr id="_stringHasR">
  <td><?php echo CHtml::link('_stringHasR()', array('/site/doc', 'view' => 'YdMustache', '#' => '_stringHasR-detail')); ?></td>
  <td>Returns true if any of its args contains the "\r" character.</td>
  <td>YdMustache</td>
</tr>
<tr id="_throwsException">
  <td><?php echo CHtml::link('_throwsException()', array('/site/doc', 'view' => 'YdMustache', '#' => '_throwsException-detail')); ?></td>
  <td>Check whether this Mustache instance throws a given exception.</td>
  <td>YdMustache</td>
</tr>
<tr id="_varIsCallable">
  <td><?php echo CHtml::link('_varIsCallable()', array('/site/doc', 'view' => 'YdMustache', '#' => '_varIsCallable-detail')); ?></td>
  <td>Higher order sections helper: tests whether the section $var is a valid callback.</td>
  <td>YdMustache</td>
</tr>
<tr id="_varIsIterable">
  <td><?php echo CHtml::link('_varIsIterable()', array('/site/doc', 'view' => 'YdMustache', '#' => '_varIsIterable-detail')); ?></td>
  <td>Check whether the given $var should be iterated (i.e. in a section context).</td>
  <td>YdMustache</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="_charset-detail">
_charset<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_charset</b>;</div>

<p></p>


<div class="detailHeader" id="_context-detail">
_context<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_context</b>;</div>

<p></p>


<div class="detailHeader" id="_ctag-detail">
_ctag<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_ctag</b>;</div>

<p></p>


<div class="detailHeader" id="_localPragmas-detail">
_localPragmas<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_localPragmas</b>;</div>

<p></p>


<div class="detailHeader" id="_otag-detail">
_otag<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_otag</b>;</div>

<p></p>


<div class="detailHeader" id="_partials-detail">
_partials<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_partials</b>;</div>

<p></p>


<div class="detailHeader" id="_pragmas-detail">
_pragmas<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_pragmas</b>;</div>

<p></p>


<div class="detailHeader" id="_pragmasImplemented-detail">
_pragmasImplemented<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_pragmasImplemented</b>;</div>

<p></p>


<div class="detailHeader" id="_tagRegEx-detail">
_tagRegEx<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_tagRegEx</b>;</div>

<p></p>


<div class="detailHeader" id="_template-detail">
_template<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_template</b>;</div>

<p></p>


<div class="detailHeader" id="_throwsExceptions-detail">
_throwsExceptions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
protected <b>$_throwsExceptions</b>;</div>

<p>Should this Mustache throw exceptions when it finds unexpected tags?</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>self::_throwsException()</li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="__clone-detail">
__clone()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__clone</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L155">dressing/components/YdMustache.php#L155</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__clone</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'{{'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'}}'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$last&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">[</span><span style="color: #0000BB">$last</span><span style="color: #007700">]&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">Mustache</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">[</span><span style="color: #0000BB">$last</span><span style="color: #007700">]&nbsp;=&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Mustache class clone method.
<br/><br/>
A cloned Mustache instance should have pragmas, delimeters and root context
reset to default values.</p>


<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(string $template=NULL, mixed $view=NULL, array $partials=NULL, array $options=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">(default: null)</td>
</tr>
<tr>
  <td class="paramNameCol">$view</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">(default: null)</td>
</tr>
<tr>
  <td class="paramNameCol">$partials</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">(default: null)</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">(default: array())</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L108">dressing/components/YdMustache.php#L108</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$view&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$partials&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;array&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$partials&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_partials&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$partials</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$view&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$view</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_setOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Mustache class constructor.
<br/><br/>
This method accepts a $template string and a $view object. Optionally, pass an associative
array of partials as well.
<br/><br/>
Passing an $options array allows overriding certain Mustache options during instantiation:
<br/><br/>
    $options = array(
        // `charset` -- must be supported by `htmlspecialentities()`. defaults to 'UTF-8'
        'charset' => 'ISO-8859-1',
<br/><br/>
        // opening and closing delimiters, as an array or a space-separated string
        'delimiters' => '<% %>',
<br/><br/>
        // an array of pragmas to enable/disable
        'pragmas' => array(
            Mustache::PRAGMA_UNESCAPED => true
        ),
    );</p>


<div class="detailHeader" id="__toString-detail">
__toString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>__toString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L208">dressing/components/YdMustache.php#L208</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__toString</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PHP&nbsp;doesn't&nbsp;like&nbsp;exceptions&nbsp;in&nbsp;__toString.<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;catch&nbsp;any&nbsp;exceptions&nbsp;and&nbsp;convert&nbsp;them&nbsp;to&nbsp;strings.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;catch&nbsp;(</span><span style="color: #0000BB">Exception&nbsp;$e</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"Error&nbsp;rendering&nbsp;mustache:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Wrap the render() function for string conversion.</p>


<div class="detailHeader" id="_changeDelimiter-detail">
_changeDelimiter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_changeDelimiter</b>(string $tag_name, string $leading, string $trailing)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$leading</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">$trailing</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L701">dressing/components/YdMustache.php#L701</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_changeDelimiter</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$otag</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tagRegEx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_prepareTagRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$trailing&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stringHasR</span><span style="color: #007700">(</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #DD0000">"\r\n"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Change the Mustache tag delimiter. This method also replaces this object's current
tag RegEx with one using the new delimiters.</p>


<div class="detailHeader" id="_findSection-detail">
_findSection()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>_findSection</b>(string $template)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">$before, $type, $tag_name, $content and $after</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L295">dressing/components/YdMustache.php#L295</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_findSection</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$regEx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_prepareSectionRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$section_start&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$section_type&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content_start&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$search_offset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$section_stack&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$regEx</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PREG_OFFSET_CAPTURE</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$search_offset</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'delims'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'delims'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$regEx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_prepareSectionRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$search_offset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;+&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$match&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tag_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'tag_name'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$search_offset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$type</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'^'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$section_stack</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$section_start&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$section_type&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content_start&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$search_offset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_push</span><span style="color: #007700">(</span><span style="color: #0000BB">$section_stack</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$section_stack</span><span style="color: #007700">)&nbsp;||&nbsp;(</span><span style="color: #0000BB">$tag_name&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$section_stack</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_throwsException</span><span style="color: #007700">(</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNEXPECTED_CLOSE_SECTION</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Unexpected&nbsp;close&nbsp;section:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNEXPECTED_CLOSE_SECTION</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$section_stack</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$before,&nbsp;$type,&nbsp;$tag_name,&nbsp;$content,&nbsp;$after<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$section_start</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$section_type</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$content_start</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">-&nbsp;</span><span style="color: #0000BB">$content_start</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$search_offset</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">$section_stack</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_throwsException</span><span style="color: #007700">(</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNCLOSED_SECTION</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Unclosed&nbsp;section:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$section_stack</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNCLOSED_SECTION</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Extract the first section from $template.</p>


<div class="detailHeader" id="_findVariableInContext-detail">
_findVariableInContext()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_findVariableInContext</b>(string $tag_name, array $context)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$context</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L793">dressing/components/YdMustache.php#L793</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_findVariableInContext</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$context</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$context&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">method_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">[</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_throwsException</span><span style="color: #007700">(</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNKNOWN_VARIABLE</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">(</span><span style="color: #DD0000">"Unknown&nbsp;variable:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNKNOWN_VARIABLE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Get a variable from the context array. Internal helper used by getVariable() to abstract
variable traversal for dot notation.</p>


<div class="detailHeader" id="_getPartial-detail">
_getPartial()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_getPartial</b>(string $tag_name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L823">dressing/components/YdMustache.php#L823</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_getPartial</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_partials</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_partials&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">ArrayAccess</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_partials</span><span style="color: #007700">[</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_partials</span><span style="color: #007700">[</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_throwsException</span><span style="color: #007700">(</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNKNOWN_PARTIAL</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Unknown&nbsp;partial:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNKNOWN_PARTIAL</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve the partial corresponding to the requested tag name.
<br/><br/>
Silently fails (i.e. returns '') when the requested partial is not found.</p>


<div class="detailHeader" id="_getPragmaOptions-detail">
_getPragmaOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>_getPragmaOptions</b>(string $pragma_name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pragma_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L451">dressing/components/YdMustache.php#L451</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_getPragmaOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hasPragma</span><span style="color: #007700">(</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Unknown&nbsp;pragma:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNKNOWN_PRAGMA</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas</span><span style="color: #007700">[</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">]))&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas</span><span style="color: #007700">[</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">]&nbsp;:&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>Return pragma options, if any.</p>


<div class="detailHeader" id="_getVariable-detail">
_getVariable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_getVariable</b>(string $tag_name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L764">dressing/components/YdMustache.php#L764</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_getVariable</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$tag_name&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'.'</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chunks&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$first&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$chunks</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_findVariableInContext</span><span style="color: #007700">(</span><span style="color: #0000BB">$first</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">$next&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$chunks</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Slice&nbsp;off&nbsp;a&nbsp;chunk&nbsp;of&nbsp;context&nbsp;for&nbsp;dot&nbsp;notation&nbsp;traversal.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$ret</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_findVariableInContext</span><span style="color: #007700">(</span><span style="color: #0000BB">$next</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_findVariableInContext</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Get a variable from the context array.
<br/><br/>
If the view is an array, returns the value with array key $tag_name.
If the view is an object, this will check for a public member variable
named $tag_name. If none is available, this method will execute and return
any class method named $tag_name. Failing all of the above, this method will
return an empty string.</p>


<div class="detailHeader" id="_hasPragma-detail">
_hasPragma()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>_hasPragma</b>(string $pragma_name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$pragma_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L435">dressing/components/YdMustache.php#L435</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_hasPragma</span><span style="color: #007700">(</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas</span><span style="color: #007700">[</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">])&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Check whether this Mustache has a specific pragma.</p>


<div class="detailHeader" id="_popContext-detail">
_popContext()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>_popContext</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L739">dressing/components/YdMustache.php#L739</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_popContext</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new&nbsp;</span><span style="color: #007700">=&nbsp;array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$keys</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$keys&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">[]&nbsp;=&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Remove the latest context from the stack.</p>


<div class="detailHeader" id="_preparePragmaRegEx-detail">
_preparePragmaRegEx()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_preparePragmaRegEx</b>(string $otag, string $ctag)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$otag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$ctag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L367">dressing/components/YdMustache.php#L367</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_preparePragmaRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/%s%%\\s*(?P&lt;pragma_name&gt;[\\w_-]+)(?P&lt;options_string&gt;(?:&nbsp;[\\w]+=[\\w]+)*)\\s*%s\\n?/s'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p>Prepare a pragma RegEx for the given opening/closing tags.</p>


<div class="detailHeader" id="_prepareSectionRegEx-detail">
_prepareSectionRegEx()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_prepareSectionRegEx</b>(string $otag, string $ctag)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$otag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$ctag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L279">dressing/components/YdMustache.php#L279</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_prepareSectionRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(?:(?&lt;=\\n)[&nbsp;\\t]*)?%s(?:(?P&lt;type&gt;[%s])(?P&lt;tag_name&gt;.+?)|=(?P&lt;delims&gt;.*?)=)%s\\n?/s'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">SECTION_TYPES</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p>Prepare a section RegEx string for the given opening/closing tags.</p>


<div class="detailHeader" id="_prepareTagRegEx-detail">
_prepareTagRegEx()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_prepareTagRegEx</b>(string $otag, string $ctag, $first=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$otag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$ctag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$first</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L480">dressing/components/YdMustache.php#L480</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_prepareTagRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$first&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/(?P&lt;leading&gt;(?:%s\\r?\\n)[&nbsp;\\t]*)?%s(?P&lt;type&gt;[%s]?)(?P&lt;tag_name&gt;.+?)(?:\\2|})?%s(?P&lt;trailing&gt;\\s*(?:\\r?\\n|\\Z))?/s'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$first&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'\\A|'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">TAG_TYPES</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">preg_quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctag</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p>Prepare a tag RegEx for the given opening/closing tags.</p>


<div class="detailHeader" id="_pushContext-detail">
_pushContext()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>_pushContext</b>(array &$local_context)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$local_context</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">&$local_context</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L724">dressing/components/YdMustache.php#L724</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_pushContext</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$local_context</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">[]&nbsp;=&amp;&nbsp;</span><span style="color: #0000BB">$local_context</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">[]&nbsp;=&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$new</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Push a local context onto the stack.</p>


<div class="detailHeader" id="_renderComment-detail">
_renderComment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_renderComment</b>(string $tag_name, string $leading, string $trailing)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$leading</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">$trailing</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L637">dressing/components/YdMustache.php#L637</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderComment</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$trailing&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_stringHasR</span><span style="color: #007700">(</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #DD0000">"\r\n"&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Render a comment (i.e. return an empty string).</p>


<div class="detailHeader" id="_renderEscaped-detail">
_renderEscaped()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_renderEscaped</b>(string $tag_name, string $leading, string $trailing)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$leading</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">$trailing</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L623">dressing/components/YdMustache.php#L623</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderEscaped</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">htmlentities</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderUnescaped</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">ENT_COMPAT</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_charset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$rendered&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Escape and return the requested tag.</p>


<div class="detailHeader" id="_renderPartial-detail">
_renderPartial()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_renderPartial</b>(string $tag_name, string $leading, string $trailing)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$leading</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">$trailing</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L675">dressing/components/YdMustache.php#L675</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderPartial</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$partial&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_getPartial</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$trailing&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$whitespace&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$partial&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/(\\r?\\n)(?!$)/s'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\\1"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$whitespace</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$partial</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$view&nbsp;</span><span style="color: #007700">=&nbsp;clone(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$trailing&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$partial</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$view</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$partial</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Render the requested partial.</p>


<div class="detailHeader" id="_renderPragma-detail">
_renderPragma()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>_renderPragma</b>(mixed $matches)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$matches</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L402">dressing/components/YdMustache.php#L402</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderPragma</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pragma&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pragma_name&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'pragma_name'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options_string&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'options_string'</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pragmasImplemented</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Unknown&nbsp;pragma:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNKNOWN_PRAGMA</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$options_string</span><span style="color: #007700">))&nbsp;as&nbsp;</span><span style="color: #0000BB">$o</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$p&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$o</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$p&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'='</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]]&nbsp;=&nbsp;</span><span style="color: #0000BB">$p</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$options</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas</span><span style="color: #007700">[</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas</span><span style="color: #007700">[</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>A preg_replace helper to remove {{%PRAGMA}} tags and enable requested pragma.</p>


<div class="detailHeader" id="_renderPragmas-detail">
_renderPragmas()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_renderPragmas</b>(string $template)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L382">dressing/components/YdMustache.php#L382</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderPragmas</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_localPragmas&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pragmas</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;no&nbsp;pragmas<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'%'</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$regEx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_preparePragmaRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">preg_replace_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$regEx</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'_renderPragma'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Initialize pragmas and remove all pragma tags.</p>


<div class="detailHeader" id="_renderTag-detail">
_renderTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_renderTag</b>(string $modifier, string $tag_name, string $leading, string $trailing)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$modifier</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$leading</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">$trailing</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L558">dressing/components/YdMustache.php#L558</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$modifier</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;switch&nbsp;(</span><span style="color: #0000BB">$modifier</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'='</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_changeDelimiter</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'!'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderComment</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&lt;'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderPartial</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'{'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;strip&nbsp;the&nbsp;trailing&nbsp;}&nbsp;...<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">[(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)]&nbsp;==&nbsp;</span><span style="color: #DD0000">'}'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tag_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hasPragma</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PRAGMA_UNESCAPED</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderEscaped</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderUnescaped</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'^'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;remove&nbsp;any&nbsp;leftover&nbsp;section&nbsp;tags<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_hasPragma</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">PRAGMA_UNESCAPED</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderUnescaped</span><span style="color: #007700">(</span><span style="color: #0000BB">$modifier&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderEscaped</span><span style="color: #007700">(</span><span style="color: #0000BB">$modifier&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Render the named tag, given the specified modifier.
<br/><br/>
Accepted modifiers are `=` (change delimiter), `!` (comment), `>` (partial)
`{` or `&` (don't escape output), or none (render escaped output).</p>


<div class="detailHeader" id="_renderTags-detail">
_renderTags()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>_renderTags</b>(string $template)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L497">dressing/components/YdMustache.php#L497</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderTags</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag</span><span style="color: #007700">)&nbsp;===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$first&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tagRegEx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_prepareTagRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matches&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tagRegEx</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">PREG_OFFSET_CAPTURE</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tag&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modifier&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tag_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'tag_name'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'leading'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'leading'</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;&gt;&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'leading'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'trailing'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'trailing'</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;&gt;&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trailing&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #DD0000">'trailing'</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$trailing&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$next_offset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$offset&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$html</span><span style="color: #007700">,&nbsp;-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$next_offset</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$next_offset</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$next_offset</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$modifier</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$first&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$first&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_tagRegEx&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_prepareTagRegEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Loop through and render individual Mustache tags.</p>


<div class="detailHeader" id="_renderTemplate-detail">
_renderTemplate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_renderTemplate</b>(string $template)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Rendered Mustache template.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L226">dressing/components/YdMustache.php#L226</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$section&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_findSection</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$before</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$after</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">$section</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered_before&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTags</span><span style="color: #007700">(</span><span style="color: #0000BB">$before</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered_content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_getVariable</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(</span><span style="color: #0000BB">$type</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;inverted&nbsp;section<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'^'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$val</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered_content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;regular&nbsp;section<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">case&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;higher&nbsp;order&nbsp;sections<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_varIsCallable</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered_content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_varIsIterable</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$local_context</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pushContext</span><span style="color: #007700">(</span><span style="color: #0000BB">$local_context</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered_content&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_popContext</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;if&nbsp;(</span><span style="color: #0000BB">$val</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pushContext</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered_content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_popContext</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$rendered_content&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$rendered_before&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$rendered_content&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$after</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTags</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Internal render function, used for recursive calls.</p>


<div class="detailHeader" id="_renderUnescaped-detail">
_renderUnescaped()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>_renderUnescaped</b>(string $tag_name, string $leading, string $trailing)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$leading</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">$trailing</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Whitespace</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L656">dressing/components/YdMustache.php#L656</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_renderUnescaped</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$leading</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_getVariable</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag_name</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_varIsCallable</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$leading&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$trailing</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Return the requested tag unescaped.</p>


<div class="detailHeader" id="_setOptions-detail">
_setOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>_setOptions</b>(array $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L122">dressing/components/YdMustache.php#L122</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_setOptions</span><span style="color: #007700">(array&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'charset'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_charset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'charset'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'delimiters'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$delims&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'delimiters'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$delims</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$delims&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'trim'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delims</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$delims</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$delims</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'pragmas'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'pragmas'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$pragma_name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$pragma_value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pragmasImplemented</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Unknown&nbsp;pragma:&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$pragma_name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MustacheException</span><span style="color: #007700">::</span><span style="color: #0000BB">UNKNOWN_PRAGMA</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_pragmas&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'pragmas'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Helper function for setting options from constructor args.</p>


<div class="detailHeader" id="_stringHasR-detail">
_stringHasR()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected boolean <b>_stringHasR</b>(string $str)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$str</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L605">dressing/components/YdMustache.php#L605</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_stringHasR</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">func_get_args</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"\r"</span><span style="color: #007700">)&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns true if any of its args contains the "\r" character.</p>


<div class="detailHeader" id="_throwsException-detail">
_throwsException()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>_throwsException</b>(mixed $exception)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$exception</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">void</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L468">dressing/components/YdMustache.php#L468</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_throwsException</span><span style="color: #007700">(</span><span style="color: #0000BB">$exception</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_throwsExceptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$exception</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_throwsExceptions</span><span style="color: #007700">[</span><span style="color: #0000BB">$exception</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Check whether this Mustache instance throws a given exception.
<br/><br/>
Expects exceptions to be MustacheException error codes (i.e. class constants).</p>


<div class="detailHeader" id="_varIsCallable-detail">
_varIsCallable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>_varIsCallable</b>(mixed $var)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$var</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L859">dressing/components/YdMustache.php#L859</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_varIsCallable</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;return&nbsp;!</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_callable</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Higher order sections helper: tests whether the section $var is a valid callback.
<br/><br/>
In Mustache.php, a variable is considered 'callable' if the variable is:
<br/><br/>
 1. an anonymous function.
 2. an object and the name of a public function, i.e. `array($SomeObject, 'methodName')`
 3. a class name and the name of a public static function, i.e. `array('SomeClass', 'methodName')`</p>


<div class="detailHeader" id="_varIsIterable-detail">
_varIsIterable()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>_varIsIterable</b>(mixed $var)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$var</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L842">dressing/components/YdMustache.php#L842</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">_varIsIterable</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$var&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">Traversable&nbsp;</span><span style="color: #007700">||&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">array_diff_key</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">))));<br />}</span>
</span>
</code></div>
</div>
<p>Check whether the given $var should be iterated (i.e. in a section context).</p>


<div class="detailHeader" id="render-detail">
render()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>render</b>(string $template=NULL, mixed $view=NULL, array $partials=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">(default: null)</td>
</tr>
<tr>
  <td class="paramNameCol">$view</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">(default: null)</td>
</tr>
<tr>
  <td class="paramNameCol">$partials</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">(default: null)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Rendered Mustache template.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdMustache.php#L180">dressing/components/YdMustache.php#L180</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$view&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$partials&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_template</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$partials&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_partials&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$partials</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$otag_orig&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ctag_orig&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$view</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$view</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;if&nbsp;(empty(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderPragmas</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_renderTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_context</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_otag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$otag_orig</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_ctag&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$ctag_orig</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Render the given template and view object.
<br/><br/>
Defaults to the template and view passed to the class constructor unless a new one is provided.
Optionally, pass an associative array of partials as well.</p>


