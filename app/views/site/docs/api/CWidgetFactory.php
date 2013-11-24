<?php
$this->pageTitle = $this->pageHeading = 'CWidgetFactory';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CWidgetFactory';
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
  <td>class CWidgetFactory &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?>, <?php echo CHtml::link('IWidgetFactory', array('/site/doc', 'view' => 'IWidgetFactory')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.1</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWidgetFactory.php">yii\web\CWidgetFactory.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CWidgetFactory creates new widgets to be used in views.
<br/><br/>
CWidgetFactory is used as the default "widgetFactory" application component.
<br/><br/>
When calling <?php echo CHtml::link('CBaseController::createWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget')); ?>, <?php echo CHtml::link('CBaseController::widget', array('/site/doc', 'view' => 'CBaseController', '#' => 'widget')); ?>
or <?php echo CHtml::link('CBaseController::beginWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'beginWidget')); ?>, if the "widgetFactory" component is installed,
it will be used to create the requested widget. To install the "widgetFactory" component,
we should have the following application configuration:
<pre>
return array(
    'components'=&gt;array(
        'widgetFactory'=&gt;array(
            'class'=&gt;'CWidgetFactory',
        ),
    ),
)
</pre>
<br/><br/>
CWidgetFactory implements the "skin" feature, which allows a new widget to be created
and initialized with a set of predefined property values (called skin).
<br/><br/>
When CWidgetFactory is used to create a new widget, it will first instantiate the
widget instance. It then checks if there is a skin available for this widget
according to the widget class name and the widget <?php echo CHtml::link('CWidget::skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin')); ?> property.
If a skin is found, it will be merged with the initial properties passed via
<?php echo CHtml::link('createWidget', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'createWidget')); ?>. Then the merged initial properties will be used to initialize
the newly created widget instance.
<br/><br/>
As aforementioned, a skin is a set of initial property values for a widget.
It is thus represented as an associative array of name-value pairs.
Skins are stored in PHP scripts like other configurations. Each script file stores the skins
for a particular widget type and is named as the widget class name (e.g. CLinkPager.php).
Each widget type may have one or several skins, identified by the skin name set via
<?php echo CHtml::link('CWidget::skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin')); ?> property. If the <?php echo CHtml::link('CWidget::skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin')); ?> property is not set for a given
widget, it means the default skin would be used. The following shows the possible skins for
the <?php echo CHtml::link('CLinkPager', array('/site/doc', 'view' => 'CLinkPager')); ?> widget:
<pre>
return array(
    'default'=&gt;array(
        'nextPageLabel'=&gt;'&amp;gt;&amp;gt;',
        'prevPageLabel'=&gt;'&amp;lt;&amp;lt;',
    ),
    'short'=&gt;array(
        'header'=&gt;'',
        'maxButtonCount'=&gt;5,
    ),
);
</pre>
In the above, there are two skins. The first one is the default skin which is indexed by the string "default".
Note that <?php echo CHtml::link('CWidget::skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin')); ?> defaults to "default". Therefore, this is the skin that will be applied
if we do not explicitly specify the <?php echo CHtml::link('CWidget::skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin')); ?> property.
The second one is named as the "short" skin which will be used only when we set <?php echo CHtml::link('CWidget::skin', array('/site/doc', 'view' => 'CWidget', '#' => 'skin')); ?>
to be "short".
<br/><br/>
By default, CWidgetFactory looks for the skin of a widget under the "skins" directory
of the current application's <?php echo CHtml::link('CWebApplication::viewPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'viewPath')); ?> (e.g. protected/views/skins).
If a theme is being used, it will look for the skin under the "skins" directory of
the theme's <?php echo CHtml::link('CTheme::viewPath', array('/site/doc', 'view' => 'CTheme', '#' => 'viewPath')); ?> (as well as the aforementioned skin directory).
In case the specified skin is not found, a widget will still be created
normally without causing any error.</div>
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
<tr id="enableSkin">
  <td><?php echo CHtml::link('enableSkin', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'enableSkin-detail')); ?></td>
  <td>boolean</td>
  <td>whether to enable widget skinning.</td>
  <td>CWidgetFactory</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="skinPath">
  <td><?php echo CHtml::link('skinPath', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'skinPath-detail')); ?></td>
  <td>string</td>
  <td>the directory containing all the skin files.</td>
  <td>CWidgetFactory</td>
</tr>
<tr id="skinnableWidgets">
  <td><?php echo CHtml::link('skinnableWidgets', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'skinnableWidgets-detail')); ?></td>
  <td>array</td>
  <td>list of widget class names that can be skinned.</td>
  <td>CWidgetFactory</td>
</tr>
<tr id="widgets">
  <td><?php echo CHtml::link('widgets', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'widgets-detail')); ?></td>
  <td>array</td>
  <td>widget initial property values.</td>
  <td>CWidgetFactory</td>
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
<tr id="createWidget">
  <td><?php echo CHtml::link('createWidget()', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'createWidget-detail')); ?></td>
  <td>Creates a new widget based on the given class name and initial properties.</td>
  <td>CWidgetFactory</td>
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
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>CWidgetFactory</td>
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
<tr id="getSkin">
  <td><?php echo CHtml::link('getSkin()', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'getSkin-detail')); ?></td>
  <td>Returns the skin for the specified widget class and skin name.</td>
  <td>CWidgetFactory</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="enableSkin-detail">
enableSkin<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public boolean <b>$enableSkin</b>;</div>

<p>whether to enable widget skinning. Defaults to false.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('skinnableWidgets', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'skinnableWidgets')); ?></li>
</ul>
</div>

<div class="detailHeader" id="skinPath-detail">
skinPath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$skinPath</b>;</div>

<p>the directory containing all the skin files. Defaults to null,
meaning using the "skins" directory under the current application's <?php echo CHtml::link('CWebApplication::viewPath', array('/site/doc', 'view' => 'CWebApplication', '#' => 'viewPath')); ?>.</p>


<div class="detailHeader" id="skinnableWidgets-detail">
skinnableWidgets<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public array <b>$skinnableWidgets</b>;</div>

<p>list of widget class names that can be skinned.
Because skinning widgets has performance impact, you may want to specify this property
to limit skinning only to specific widgets. Any widgets that are not in this list
will not be skinned. Defaults to null, meaning all widgets can be skinned.</p>


<div class="detailHeader" id="widgets-detail">
widgets<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public array <b>$widgets</b>;</div>

<p>widget initial property values. Each array key-value pair
represents the initial property values for a single widget class, with
the array key being the widget class name, and array value being the initial
property value array. For example,
<pre>
array(
    'CLinkPager'=&gt;array(
        'maxButtonCount'=&gt;5,
        'cssFile'=&gt;false,
    ),
    'CJuiDatePicker'=&gt;array(
        'language'=&gt;'ru',
    ),
)
</pre>
<br/><br/>
Note that the initial values specified here may be overridden by
the values given in <?php echo CHtml::link('CBaseController::createWidget', array('/site/doc', 'view' => 'CBaseController', '#' => 'createWidget')); ?> calls.
They may also be overridden by widget skins, if <?php echo CHtml::link('enableSkin', array('/site/doc', 'view' => 'CWidgetFactory', '#' => 'enableSkin')); ?> is true.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="createWidget-detail">
createWidget()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public <?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?> <b>createWidget</b>(<?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?> $owner, string $className, array $properties=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$owner</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CBaseController', array('/site/doc', 'view' => 'CBaseController')); ?></td>
  <td class="paramDescCol">the owner of the new widget</td>
</tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the class name of the widget. This can also be a path alias (e.g. system.web.widgets.COutputCache)</td>
</tr>
<tr>
  <td class="paramNameCol">$properties</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the initial property values (name=>value) of the widget.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CWidget', array('/site/doc', 'view' => 'CWidget')); ?></td>
  <td class="paramDescCol">the newly created widget whose properties have been initialized with the given values.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWidgetFactory.php#L144">yii\web\CWidgetFactory.php#L144</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">createWidget</span><span style="color: #007700">(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">,</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">import</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">(</span><span style="color: #0000BB">$owner</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgets</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=</span><span style="color: #0000BB">$properties</span><span style="color: #007700">===array()&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgets</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">widgets</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">],</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableSkin</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skinnableWidgets</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skinnableWidgets</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[</span><span style="color: #DD0000">'skin'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">[</span><span style="color: #DD0000">'skin'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$skin</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSkin</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">))!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$properties</span><span style="color: #007700">=</span><span style="color: #0000BB">$properties</span><span style="color: #007700">===array()&nbsp;?&nbsp;</span><span style="color: #0000BB">$skin&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$skin</span><span style="color: #007700">,</span><span style="color: #0000BB">$properties</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$properties&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$widget</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a new widget based on the given class name and initial properties.</p>


<div class="detailHeader" id="getSkin-detail">
getSkin()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected array <b>getSkin</b>(string $className, string $skinName)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the widget class name</td>
</tr>
<tr>
  <td class="paramNameCol">$skinName</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the widget skin name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the skin (name=>value) for the widget</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWidgetFactory.php#L171">yii\web\CWidgetFactory.php#L171</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getSkin</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">,</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_skins</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">][</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$skinFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skinPath</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$className</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$skinFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_skins</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]=require(</span><span style="color: #0000BB">$skinFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_skins</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">]=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$theme</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getTheme</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$skinFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$theme</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getSkinPath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$className</span><span style="color: #007700">.</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$skinFile</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$skins</span><span style="color: #007700">=require(</span><span style="color: #0000BB">$skinFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$skins&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$skin</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_skins</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">][</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=</span><span style="color: #0000BB">$skin</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_skins</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">][</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_skins</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">][</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">]=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_skins</span><span style="color: #007700">[</span><span style="color: #0000BB">$className</span><span style="color: #007700">][</span><span style="color: #0000BB">$skinName</span><span style="color: #007700">];<br />}</span>
</span>
</code></div>
</div>
<p>Returns the skin for the specified widget class and skin name.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CWidgetFactory.php#L129">yii\web\CWidgetFactory.php#L129</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableSkin&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skinPath</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">skinPath</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getViewPath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #DD0000">'skins'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method overrides the parent implementation by resolving the skin path.</p>


