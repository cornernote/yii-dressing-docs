<?php
$this->pageTitle = $this->pageHeading = 'CBaseController';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CBaseController';
?>
<div id="nav">
<a href="#methods">Methods</a></div>

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
  <td>abstract class CBaseController &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?>, <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php">yii/web/CBaseController.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CBaseController is the base class for <?php echo CHtml::link('CController', array('/site/doc', 'view' => 'CController')); ?> and <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?>.
<br/><br/>
It provides the common functionalities shared by controllers who need to render views.
<br/><br/>
CBaseController also implements the support for the following features:
<ul>
<li><?php echo CHtml::link('Clips', array('/site/doc', 'view' => 'CClipWidget')); ?> : a clip is a piece of captured output that can be inserted elsewhere.</li>
<li><?php echo CHtml::link('Widgets', array('/site/doc', 'view' => 'CWidget')); ?> : a widget is a self-contained sub-controller with its own view and model.</li>
<li><?php echo CHtml::link('Fragment cache', array('/site/doc', 'view' => 'COutputCache')); ?> : fragment cache selectively caches a portion of the output.</li>
</ul>
<br/><br/>
To use a widget in a view, use the following in the view:
<pre>
$this-&gt;widget('path.to.widgetClass',array('property1'=&gt;'value1',...));
</pre>
or
<pre>
$this-&gt;beginWidget('path.to.widgetClass',array('property1'=&gt;'value1',...));
// ... display other contents here
$this-&gt;endWidget();
</pre>
<br/><br/>
To create a clip, use the following:
<pre>
$this-&gt;beginClip('clipID');
// ... display the clip contents
$this-&gt;endClip();
</pre>
Then, in a different view or place, the captured clip can be inserted as:
<pre>
echo $this-&gt;clips['clipID'];
</pre>
<br/><br/>
Note that $this in the code above refers to current controller so, for example,
if you need to access clip from a widget where $this refers to widget itself
you need to do it the following way:
<br/><br/>
<pre>
echo $this-&gt;getController()-&gt;clips['clipID'];
</pre>
<br/><br/>
To use fragment cache, do as follows,
<pre>
if($this-&gt;beginCache('cacheID',array('property1'=&gt;'value1',...))
{
    // ... display the content to be cached here
   $this-&gt;endCache();
}
</pre></div>
<a name="properties"></a>

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
<tr id="beginCache">
  <td><?php echo CHtml::link('beginCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginCache-detail')); ?></td>
  <td>Begins fragment caching.</td>
  <td>CBaseController</td>
</tr>
<tr id="beginClip">
  <td><?php echo CHtml::link('beginClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginClip-detail')); ?></td>
  <td>Begins recording a clip.</td>
  <td>CBaseController</td>
</tr>
<tr id="beginContent">
  <td><?php echo CHtml::link('beginContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginContent-detail')); ?></td>
  <td>Begins the rendering of content that is to be decorated by the specified view.</td>
  <td>CBaseController</td>
</tr>
<tr id="beginWidget">
  <td><?php echo CHtml::link('beginWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td>CBaseController</td>
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
<tr id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a widget and initializes it.</td>
  <td>CBaseController</td>
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
<tr id="endCache">
  <td><?php echo CHtml::link('endCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endCache-detail')); ?></td>
  <td>Ends fragment caching.</td>
  <td>CBaseController</td>
</tr>
<tr id="endClip">
  <td><?php echo CHtml::link('endClip()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endClip-detail')); ?></td>
  <td>Ends recording a clip.</td>
  <td>CBaseController</td>
</tr>
<tr id="endContent">
  <td><?php echo CHtml::link('endContent()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endContent-detail')); ?></td>
  <td>Ends the rendering of content.</td>
  <td>CBaseController</td>
</tr>
<tr id="endWidget">
  <td><?php echo CHtml::link('endWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget-detail')); ?></td>
  <td>Ends the execution of the named widget.</td>
  <td>CBaseController</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CBaseController', '#' => 'getViewFile-detail')); ?></td>
  <td>Returns the view script file according to the specified view name.</td>
  <td>CBaseController</td>
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
<tr id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td>CBaseController</td>
</tr>
<tr id="renderInternal">
  <td><?php echo CHtml::link('renderInternal()', array('/site/doc', 'view' => 'CBaseController', '#' => 'renderInternal-detail')); ?></td>
  <td>Renders a view file.</td>
  <td>CBaseController</td>
</tr>
<tr id="widget">
  <td><?php echo CHtml::link('widget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget-detail')); ?></td>
  <td>Creates a widget and executes it.</td>
  <td>CBaseController</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="beginCache-detail">
beginCache()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>beginCache</b>(string $id, array $properties=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a unique ID identifying the fragment to be cached.</td>
</tr>
<tr>
  <td class="paramNameCol">$properties</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">initial property values for <?php echo CHtml::link('COutputCache', array('/site/doc', 'view' => 'COutputCache')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether we need to generate content for caching. False if cached version is available.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L253">yii/web/CBaseController.php#L253</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beginCache</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginWidget</span><span style="color: #007700">(</span><span style="color: #DD0000">'COutputCache'</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIsContentCached</span><span style="color: #007700">())<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">endCache</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Begins fragment caching.
This method will display cached content if it is availabe.
If not, it will start caching and would expect a <?php echo CHtml::link('endCache()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endCache')); ?>
call to end the cache and save the content into cache.
A typical usage of fragment caching is as follows,
<pre>
if($this-&gt;beginCache($id))
{
    // ...generate content here
    $this-&gt;endCache();
}
</pre></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('endCache', array('/site/doc', 'view' => 'CBaseController', '#' => 'endCache')); ?></li>
</ul>
</div>

<div class="detailHeader" id="beginClip-detail">
beginClip()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>beginClip</b>(string $id, array $properties=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the clip ID.</td>
</tr>
<tr>
  <td class="paramNameCol">$properties</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">initial property values for <?php echo CHtml::link('CClipWidget', array('/site/doc', 'view' => 'CClipWidget')); ?>.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L220">yii/web/CBaseController.php#L220</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beginClip</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginWidget</span><span style="color: #007700">(</span><span style="color: #DD0000">'CClipWidget'</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Begins recording a clip.
This method is a shortcut to beginning <?php echo CHtml::link('CClipWidget', array('/site/doc', 'view' => 'CClipWidget')); ?>.</p>


<div class="detailHeader" id="beginContent-detail">
beginContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>beginContent</b>(mixed $view=NULL, array $data=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$view</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the name of the view that will be used to decorate the content. The actual view script
is resolved via <?php echo CHtml::link('getViewFile', array('/site/doc', 'view' => 'CBaseController', '#' => 'getViewFile')); ?>. If this parameter is null (default),
the default layout will be used as the decorative view.
Note that if the current controller does not belong to
any module, the default layout refers to the application's <?php echo CHtml::link('default layout', array('/site/doc', 'view' => 'CWebApplication', '#' => 'layout')); ?>;
If the controller belongs to a module, the default layout refers to the module's
<?php echo CHtml::link('default layout', array('/site/doc', 'view' => 'CWebModule', '#' => 'layout')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the variables (name=>value) to be extracted and made available in the decorative view.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L289">yii/web/CBaseController.php#L289</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beginContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$view</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginWidget</span><span style="color: #007700">(</span><span style="color: #DD0000">'CContentDecorator'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'view'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$view</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'data'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Begins the rendering of content that is to be decorated by the specified view.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('endContent', array('/site/doc', 'view' => 'CBaseController', '#' => 'endContent')); ?></li>
	<li><?php echo CHtml::link('CContentDecorator', array('/site/doc', 'view' => 'CContentDecorator')); ?></li>
</ul>
</div>

<div class="detailHeader" id="beginWidget-detail">
beginWidget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> <b>beginWidget</b>(string $className, array $properties=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the widget class name or class in dot syntax (e.g. application.widgets.MyWidget)</td>
</tr>
<tr>
  <td class="paramNameCol">$properties</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of initial property values for the widget (Property Name => Property Value)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
  <td class="paramDescCol">the widget created to run</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L187">yii/web/CBaseController.php#L187</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">beginWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_widgetStack</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$widget</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a widget and executes it.
This method is similar to <?php echo CHtml::link('widget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget')); ?> except that it is expecting
a <?php echo CHtml::link('endWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget')); ?> call to end the execution.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('endWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget')); ?></li>
</ul>
</div>

<div class="detailHeader" id="createWidget-detail">
createWidget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> <b>createWidget</b>(string $className, array $properties=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">class name (can be in path alias format)</td>
</tr>
<tr>
  <td class="paramNameCol">$properties</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">initial property values</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
  <td class="paramDescCol">the fully initialized widget instance.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L144">yii/web/CBaseController.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getWidgetFactory</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a widget and initializes it.
This method first creates the specified widget instance.
It then configures the widget's properties with the given initial values.
At the end it calls <?php echo CHtml::link('CWidget::init', array('/site/doc', 'view' => 'CWidget', '#' => 'init')); ?> to initialize the widget.
Starting from version 1.1, if a <?php echo CHtml::link('widget factory', array('/site/doc', 'view' => 'CWidgetFactory')); ?> is enabled,
this method will use the factory to create the widget, instead.</p>


<div class="detailHeader" id="endCache-detail">
endCache()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>endCache</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L271">yii/web/CBaseController.php#L271</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">endCache</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">endWidget</span><span style="color: #007700">(</span><span style="color: #DD0000">'COutputCache'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Ends fragment caching.
This is an alias to <?php echo CHtml::link('endWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('beginCache', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginCache')); ?></li>
</ul>
</div>

<div class="detailHeader" id="endClip-detail">
endClip()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>endClip</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L230">yii/web/CBaseController.php#L230</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">endClip</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">endWidget</span><span style="color: #007700">(</span><span style="color: #DD0000">'CClipWidget'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Ends recording a clip.
This method is an alias to <?php echo CHtml::link('endWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'endWidget')); ?>.</p>


<div class="detailHeader" id="endContent-detail">
endContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>endContent</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L298">yii/web/CBaseController.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">endContent</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">endWidget</span><span style="color: #007700">(</span><span style="color: #DD0000">'CContentDecorator'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Ends the rendering of content.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('beginContent', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginContent')); ?></li>
</ul>
</div>

<div class="detailHeader" id="endWidget-detail">
endWidget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> <b>endWidget</b>(string $id='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional tag identifying the method call for debugging purpose.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
  <td class="paramDescCol">the widget just ended running</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L202">yii/web/CBaseController.php#L202</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">endWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$widget</span><span style="color: #007700">=</span><span style="color: #0000BB">array_pop</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_widgetStack</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{controller}&nbsp;has&nbsp;an&nbsp;extra&nbsp;endWidget({id})&nbsp;call&nbsp;in&nbsp;its&nbsp;view.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{controller}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">),</span><span style="color: #DD0000">'{id}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Ends the execution of the named widget.
This method is used together with <?php echo CHtml::link('beginWidget()', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('beginWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget')); ?></li>
</ul>
</div>

<div class="detailHeader" id="getViewFile-detail">
getViewFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public string <b>getViewFile</b>(string $viewName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$viewName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the file path for the named view. False if the view cannot be found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L77">yii/web/CBaseController.php#L77</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">abstract&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">getViewFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewName</span><span style="color: #007700">);</span>
</span>
</code></div>
</div>
<p>Returns the view script file according to the specified view name.
This method must be implemented by child classes.</p>


<div class="detailHeader" id="renderFile-detail">
renderFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderFile</b>(string $viewFile, array $data=NULL, boolean $return=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$viewFile</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view file path</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data to be extracted and made available to the view</td>
</tr>
<tr>
  <td class="paramNameCol">$return</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rendering result should be returned instead of being echoed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result. Null if the rendering result is not required.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L89">yii/web/CBaseController.php#L89</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$return</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widgetCount</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_widgetStack</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$renderer</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getViewRenderer</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$renderer</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fileExtension</span><span style="color: #007700">===</span><span style="color: #DD0000">'.'</span><span style="color: #007700">.</span><span style="color: #0000BB">CFileHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">getExtension</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #0000BB">$renderer</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$return</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$return</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_widgetStack</span><span style="color: #007700">)===</span><span style="color: #0000BB">$widgetCount</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">=</span><span style="color: #0000BB">end</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_widgetStack</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'{controller}&nbsp;contains&nbsp;improperly&nbsp;nested&nbsp;widget&nbsp;tags&nbsp;in&nbsp;its&nbsp;view&nbsp;"{view}".&nbsp;A&nbsp;{widget}&nbsp;widget&nbsp;does&nbsp;not&nbsp;have&nbsp;an&nbsp;endWidget()&nbsp;call.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{controller}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">),&nbsp;</span><span style="color: #DD0000">'{view}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'{widget}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$widget</span><span style="color: #007700">))));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Renders a view file.</p>


<div class="detailHeader" id="renderInternal-detail">
renderInternal()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>renderInternal</b>(string $_viewFile_, array $_data_=NULL, boolean $_return_=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$_viewFile_</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">view file</td>
</tr>
<tr>
  <td class="paramNameCol">$_data_</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data to be extracted and made available to the view file</td>
</tr>
<tr>
  <td class="paramNameCol">$_return_</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the rendering result should be returned as a string</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result. Null if the rendering result is not required.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L115">yii/web/CBaseController.php#L115</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderInternal</span><span style="color: #007700">(</span><span style="color: #0000BB">$_viewFile_</span><span style="color: #007700">,</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$_return_</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;we&nbsp;use&nbsp;special&nbsp;variable&nbsp;names&nbsp;here&nbsp;to&nbsp;avoid&nbsp;conflict&nbsp;when&nbsp;extracting&nbsp;data<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">extract</span><span style="color: #007700">(</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">,</span><span style="color: #0000BB">EXTR_PREFIX_SAME</span><span style="color: #007700">,</span><span style="color: #DD0000">'data'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">$_data_</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$_return_</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_implicit_flush</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require(</span><span style="color: #0000BB">$_viewFile_</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require(</span><span style="color: #0000BB">$_viewFile_</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Renders a view file.
This method includes the view file as a PHP script
and captures the display result if required.</p>


<div class="detailHeader" id="widget-detail">
widget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>widget</b>(string $className, array $properties=array (
), boolean $captureOutput=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the widget class name or class in dot syntax (e.g. application.widgets.MyWidget)</td>
</tr>
<tr>
  <td class="paramNameCol">$properties</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of initial property values for the widget (Property Name => Property Value)</td>
</tr>
<tr>
  <td class="paramNameCol">$captureOutput</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to capture the output of the widget. If true, the method will capture
and return the output generated by the widget. If false, the output will be directly sent for display
and the widget object will be returned. This parameter is available since version 1.1.2.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the widget instance when $captureOutput is false, or the widget output when $captureOutput is true.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/web/CBaseController.php#L160">yii/web/CBaseController.php#L160</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">widget</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$captureOutput</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$captureOutput</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_implicit_flush</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">ob_get_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Creates a widget and executes it.</p>


