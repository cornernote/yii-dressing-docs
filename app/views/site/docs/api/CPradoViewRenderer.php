<?php
$this->pageTitle = $this->pageHeading = 'CPradoViewRenderer';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CPradoViewRenderer';
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
  <td><?php echo CHtml::link('system.web.renderers', array('/site/doc', '#' => 'system.web.renderers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CPradoViewRenderer &raquo;
<?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?> &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IViewRenderer', array('/site/doc', 'view' => 'IViewRenderer')); ?>, <?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\renderers\CPradoViewRenderer.php">yii\web\renderers\CPradoViewRenderer.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Steve Heyns http://customgothic.com/, Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CPradoViewRenderer implements a view renderer that allows users to use a template syntax similar to PRADO templates.
<br/><br/>
To use CPradoViewRenderer, configure it as an application component named "viewRenderer" in the application configuration:
<pre>
array(
    'components'=&gt;array(
        ......
        'viewRenderer'=&gt;array(
            'class'=&gt;'CPradoViewRenderer',
        ),
    ),
)
</pre>
<br/><br/>
CPradoViewRenderer allows you to write view files with the following syntax:
<pre>
// PHP tags:
&lt;%= expression %&gt;
// &lt;?php echo expression ?&gt;
&lt;% statement %&gt;
// &lt;?php statement ?&gt;&lt;/li&gt;

// component tags:
&lt;com:WigetClass name1=&quot;value1&quot; name2='value2' name3={value3} &gt;
// &lt;?php $this-&gt;beginWidget('WigetClass',
// array('name1'=&gt;&quot;value1&quot;, 'name2'=&gt;'value2', 'name3'=&gt;value3)); ?&gt;
&lt;/com:WigetClass &gt;
// &lt;?php $this-&gt;endWidget('WigetClass'); ?&gt;
&lt;com:WigetClass name1=&quot;value1&quot; name2='value2' name3={value3} /&gt;
// &lt;?php $this-&gt;widget('WigetClass',
// array('name1'=&gt;&quot;value1&quot;, 'name2'=&gt;'value2', 'name3'=&gt;value3)); ?&gt;

// cache tags:
&lt;cache:fragmentID name1=&quot;value1&quot; name2='value2' name3={value3} &gt;
// &lt;?php if($this-&gt;beginCache('fragmentID',
// array('name1'=&gt;&quot;value1&quot;, 'name2'=&gt;'value2', 'name3'=&gt;value3))): ?&gt;
&lt;/cache:fragmentID &gt;
// &lt;?php $this-&gt;endCache('fragmentID'); endif; ?&gt;

// clip tags:
&lt;clip:clipID &gt;
// &lt;?php $this-&gt;beginClip('clipID'); ?&gt;
&lt;/clip:clipID &gt;
// &lt;?php $this-&gt;endClip('clipID'); ?&gt;

// comment tags:
&lt;!--- comments ---&gt;
// the whole tag will be stripped off
</pre></div>
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
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="fileExtension">
  <td><?php echo CHtml::link('fileExtension', array('/site/doc', 'view' => 'CViewRenderer', '#' => 'fileExtension-detail')); ?></td>
  <td>string</td>
  <td>the extension name of the view file.</td>
  <td><?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?></td>
</tr>
<tr class="inherited" id="filePermission">
  <td><?php echo CHtml::link('filePermission', array('/site/doc', 'view' => 'CViewRenderer', '#' => 'filePermission-detail')); ?></td>
  <td>integer</td>
  <td>the chmod permission for temporary directories and files
generated during parsing.</td>
  <td><?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?></td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="useRuntimePath">
  <td><?php echo CHtml::link('useRuntimePath', array('/site/doc', 'view' => 'CViewRenderer', '#' => 'useRuntimePath-detail')); ?></td>
  <td>boolean</td>
  <td>whether to store the parsing results in the application's
runtime directory.</td>
  <td><?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?></td>
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
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="renderFile">
  <td><?php echo CHtml::link('renderFile()', array('/site/doc', 'view' => 'CViewRenderer', '#' => 'renderFile-detail')); ?></td>
  <td>Renders a view file.</td>
  <td><?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?></td>
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
<tr id="generateViewFile">
  <td><?php echo CHtml::link('generateViewFile()', array('/site/doc', 'view' => 'CPradoViewRenderer', '#' => 'generateViewFile-detail')); ?></td>
  <td>Parses the source view file and saves the results as another file.</td>
  <td>CPradoViewRenderer</td>
</tr>
<tr class="inherited" id="getViewFile">
  <td><?php echo CHtml::link('getViewFile()', array('/site/doc', 'view' => 'CViewRenderer', '#' => 'getViewFile-detail')); ?></td>
  <td>Generates the resulting view file path.</td>
  <td><?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="generateViewFile-detail">
generateViewFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>generateViewFile</b>(string $sourceFile, string $viewFile)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$sourceFile</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the source view file path</td>
</tr>
<tr>
  <td class="paramNameCol">$viewFile</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the resulting view file path</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\renderers\CPradoViewRenderer.php#L80">yii\web\renderers\CPradoViewRenderer.php#L80</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generateViewFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$sourceFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$regexRules</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;%=?\s*(.*?)\s*%&gt;'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;PHP&nbsp;statements&nbsp;or&nbsp;expressions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;\/?(com|cache|clip):([\w\.]+)\s*((?:\s*\w+\s*=\s*\'.*?(?&lt;!\\\\)\'|\s*\w+\s*=\s*".*?(?&lt;!\\\\)"|\s*\w+\s*=\s*\{.*?\})*)\s*\/?&gt;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #FF8000">//&nbsp;component&nbsp;tags<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;!---.*?---&gt;'</span><span style="color: #007700">,&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;template&nbsp;comments<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_sourceFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$sourceFile</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_input</span><span style="color: #007700">=</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$sourceFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_match_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'|'</span><span style="color: #007700">,</span><span style="color: #0000BB">$regexRules</span><span style="color: #007700">).</span><span style="color: #DD0000">'/msS'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_input</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">,</span><span style="color: #0000BB">PREG_SET_ORDER</span><span style="color: #007700">|</span><span style="color: #0000BB">PREG_OFFSET_CAPTURE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$textStart</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">=</span><span style="color: #DD0000">"&lt;?php&nbsp;/*&nbsp;source&nbsp;file:&nbsp;</span><span style="color: #0000BB">$sourceFile</span><span style="color: #DD0000">&nbsp;*/&nbsp;?&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$n</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$match</span><span style="color: #007700">=&amp;</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">=</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matchStart</span><span style="color: #007700">=</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$matchEnd</span><span style="color: #007700">=</span><span style="color: #0000BB">$matchStart</span><span style="color: #007700">+</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$matchStart</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">$textStart</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_input</span><span style="color: #007700">,</span><span style="color: #0000BB">$textStart</span><span style="color: #007700">,</span><span style="color: #0000BB">$matchStart</span><span style="color: #007700">-</span><span style="color: #0000BB">$textStart</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$textStart</span><span style="color: #007700">=</span><span style="color: #0000BB">$matchEnd</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;com:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;opening&nbsp;component&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)-</span><span style="color: #0000BB">2</span><span style="color: #007700">]!==</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;open&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processBeginWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;/com:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;closing&nbsp;component&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processEndWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;cache:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;opening&nbsp;cache&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)-</span><span style="color: #0000BB">2</span><span style="color: #007700">]!==</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;open&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processBeginCache</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processCache</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;/cache:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;closing&nbsp;cache&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processEndCache</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;clip:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;opening&nbsp;clip&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)-</span><span style="color: #0000BB">2</span><span style="color: #007700">]!==</span><span style="color: #DD0000">'/'</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;open&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processBeginClip</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processClip</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">4</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;/clip:'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;closing&nbsp;clip&nbsp;tag<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processEndClip</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;%='</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;expression<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">,</span><span style="color: #DD0000">'&lt;%'</span><span style="color: #007700">)===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;statement<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">processStatement</span><span style="color: #007700">(</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">$match</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">][</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$textStart</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_input</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">.=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_input</span><span style="color: #007700">,</span><span style="color: #0000BB">$textStart</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$viewFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_output</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Parses the source view file and saves the results as another file.
This method is required by the parent class.</p>


