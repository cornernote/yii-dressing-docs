<?php
$this->pageTitle = $this->pageHeading = 'CAssetManager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CAssetManager';
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
  <td>class CAssetManager &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdAssetManager', array('/site/doc', 'view' => 'YdAssetManager')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php">yii\web\CAssetManager.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CAssetManager is a Web application component that manages private files (called assets) and makes them accessible by Web clients.
<br/><br/>
It achieves this goal by copying assets to a Web-accessible directory
and returns the corresponding URL for accessing them.
<br/><br/>
To publish an asset, simply call <?php echo CHtml::link('publish()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'publish')); ?>.
<br/><br/>
The Web-accessible directory holding the published files is specified
by <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CAssetManager', '#' => 'setBasePath')); ?>, which defaults to the "assets" directory
under the directory containing the application entry script file.
The property <?php echo CHtml::link('baseUrl', array('/site/doc', 'view' => 'CAssetManager', '#' => 'setBaseUrl')); ?> refers to the URL for accessing
the <?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CAssetManager', '#' => 'setBasePath')); ?>.</div>
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
<tr id="basePath">
  <td><?php echo CHtml::link('basePath', array('/site/doc', 'view' => 'CAssetManager', '#' => 'basePath-detail')); ?></td>
  <td>string</td>
  <td>the root directory storing the published asset files.</td>
  <td>CAssetManager</td>
</tr>
<tr id="baseUrl">
  <td><?php echo CHtml::link('baseUrl', array('/site/doc', 'view' => 'CAssetManager', '#' => 'baseUrl-detail')); ?></td>
  <td>string</td>
  <td>the base url that the published asset files can be accessed.</td>
  <td>CAssetManager</td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'behaviors-detail')); ?></td>
  <td>array</td>
  <td>the behaviors that should be attached to this component.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="excludeFiles">
  <td><?php echo CHtml::link('excludeFiles', array('/site/doc', 'view' => 'CAssetManager', '#' => 'excludeFiles-detail')); ?></td>
  <td>array</td>
  <td>list of directories and files which should be excluded from the publishing process.</td>
  <td>CAssetManager</td>
</tr>
<tr id="forceCopy">
  <td><?php echo CHtml::link('forceCopy', array('/site/doc', 'view' => 'CAssetManager', '#' => 'forceCopy-detail')); ?></td>
  <td>boolean</td>
  <td>whether we should copy the asset files and directories even if they already published before.</td>
  <td>CAssetManager</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="linkAssets">
  <td><?php echo CHtml::link('linkAssets', array('/site/doc', 'view' => 'CAssetManager', '#' => 'linkAssets-detail')); ?></td>
  <td>boolean</td>
  <td>whether to use symbolic link to publish asset files.</td>
  <td>CAssetManager</td>
</tr>
<tr id="newDirMode">
  <td><?php echo CHtml::link('newDirMode', array('/site/doc', 'view' => 'CAssetManager', '#' => 'newDirMode-detail')); ?></td>
  <td>integer</td>
  <td>the permission to be set for newly generated asset directories.</td>
  <td>CAssetManager</td>
</tr>
<tr id="newFileMode">
  <td><?php echo CHtml::link('newFileMode', array('/site/doc', 'view' => 'CAssetManager', '#' => 'newFileMode-detail')); ?></td>
  <td>integer</td>
  <td>the permission to be set for newly generated asset files.</td>
  <td>CAssetManager</td>
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
<tr id="getBasePath">
  <td><?php echo CHtml::link('getBasePath()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'getBasePath-detail')); ?></td>
  <td>Returns the root directory storing the published asset files. Defaults to 'WebRoot/assets'.</td>
  <td>CAssetManager</td>
</tr>
<tr id="getBaseUrl">
  <td><?php echo CHtml::link('getBaseUrl()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'getBaseUrl-detail')); ?></td>
  <td>Returns the base url that the published asset files can be accessed.
Note, the ending slashes are stripped off. Defaults to '/AppBaseUrl/assets'.</td>
  <td>CAssetManager</td>
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
<tr id="getPublishedPath">
  <td><?php echo CHtml::link('getPublishedPath()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'getPublishedPath-detail')); ?></td>
  <td>Returns the published path of a file path.</td>
  <td>CAssetManager</td>
</tr>
<tr id="getPublishedUrl">
  <td><?php echo CHtml::link('getPublishedUrl()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'getPublishedUrl-detail')); ?></td>
  <td>Returns the URL of a published file path.</td>
  <td>CAssetManager</td>
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
<tr id="publish">
  <td><?php echo CHtml::link('publish()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'publish-detail')); ?></td>
  <td>Publishes a file or a directory.</td>
  <td>CAssetManager</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setBasePath">
  <td><?php echo CHtml::link('setBasePath()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'setBasePath-detail')); ?></td>
  <td>Sets the root directory storing published asset files.</td>
  <td>CAssetManager</td>
</tr>
<tr id="setBaseUrl">
  <td><?php echo CHtml::link('setBaseUrl()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'setBaseUrl-detail')); ?></td>
  <td>Sets the base url that the published asset files can be accessed</td>
  <td>CAssetManager</td>
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
<tr id="generatePath">
  <td><?php echo CHtml::link('generatePath()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'generatePath-detail')); ?></td>
  <td>Generates path segments relative to basePath.</td>
  <td>CAssetManager</td>
</tr>
<tr id="hash">
  <td><?php echo CHtml::link('hash()', array('/site/doc', 'view' => 'CAssetManager', '#' => 'hash-detail')); ?></td>
  <td>Generate a CRC32 hash for the directory path. Collisions are higher</td>
  <td>CAssetManager</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="basePath-detail">
basePath<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getBasePath</b>', array('/site/doc', 'view' => 'CAssetManager', '#' => 'getBasePath')); ?>()<br/>public void <?php echo CHtml::link('<b>setBasePath</b>', array('/site/doc', 'view' => 'CAssetManager', '#' => 'setBasePath')); ?>(string $value)</div>

<p>the root directory storing the published asset files. Defaults to 'WebRoot/assets'.</p>


<div class="detailHeader" id="baseUrl-detail">
baseUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getBaseUrl</b>', array('/site/doc', 'view' => 'CAssetManager', '#' => 'getBaseUrl')); ?>()<br/>public void <?php echo CHtml::link('<b>setBaseUrl</b>', array('/site/doc', 'view' => 'CAssetManager', '#' => 'setBaseUrl')); ?>(string $value)</div>

<p>the base url that the published asset files can be accessed.
Note, the ending slashes are stripped off. Defaults to '/AppBaseUrl/assets'.</p>


<div class="detailHeader" id="excludeFiles-detail">
excludeFiles<span class="detailHeaderTag">
property
 (available since v1.1.6)
</span>
</div>

<div class="signature">
public array <b>$excludeFiles</b>;</div>

<p>list of directories and files which should be excluded from the publishing process.
Defaults to exclude '.svn' and '.gitignore' files only. This option has no effect if <?php echo CHtml::link('linkAssets', array('/site/doc', 'view' => 'CAssetManager', '#' => 'linkAssets')); ?> is enabled.</p>


<div class="detailHeader" id="forceCopy-detail">
forceCopy<span class="detailHeaderTag">
property
 (available since v1.1.11)
</span>
</div>

<div class="signature">
public boolean <b>$forceCopy</b>;</div>

<p>whether we should copy the asset files and directories even if they already published before.
This property is used only during development stage. The main use case of this property is when you need
to force the original assets always copied by changing only one value without searching needed <?php echo CHtml::link('publish', array('/site/doc', 'view' => 'CAssetManager', '#' => 'publish')); ?>
method calls across the application codebase. Also it is useful in operating systems which does not fully
support symbolic links (therefore it is not possible to use $linkAssets) or we don't want to use them.
This property sets the default value of the $forceCopy parameter in <?php echo CHtml::link('publish', array('/site/doc', 'view' => 'CAssetManager', '#' => 'publish')); ?> method. Default value
of this property is false meaning that the assets will be published only in case they don't exist in webroot
assets directory.
<br/><br/>
Note that this property cannot be true when $linkAssets property has true value too. Otherwise
an exception would be thrown. Using both properties at the same time is illogical because both of them
are solving similar tasks but in a different ways. Please refer to the $linkAssets documentation
for more details.</p>


<div class="detailHeader" id="linkAssets-detail">
linkAssets<span class="detailHeaderTag">
property
 (available since v1.1.5)
</span>
</div>

<div class="signature">
public boolean <b>$linkAssets</b>;</div>

<p>whether to use symbolic link to publish asset files. Defaults to false, meaning
asset files are copied to public folders. Using symbolic links has the benefit that the published
assets will always be consistent with the source assets. This is especially useful during development.
<br/><br/>
However, there are special requirements for hosting environments in order to use symbolic links.
In particular, symbolic links are supported only on Linux/Unix, and Windows Vista/2008 or greater.
The latter requires PHP 5.3 or greater.
<br/><br/>
Moreover, some Web servers need to be properly configured so that the linked assets are accessible
to Web users. For example, for Apache Web server, the following configuration directive should be added
for the Web folder:
<pre>
Options FollowSymLinks
</pre>
<br/><br/>
Note that this property cannot be true when $forceCopy property has true value too. Otherwise
an exception would be thrown. Using both properties at the same time is illogical because both of them
are solving similar tasks but in a different ways. Please refer to the $forceCopy documentation
for more details.</p>


<div class="detailHeader" id="newDirMode-detail">
newDirMode<span class="detailHeaderTag">
property
 (available since v1.1.8)
</span>
</div>

<div class="signature">
public integer <b>$newDirMode</b>;</div>

<p>the permission to be set for newly generated asset directories.
This value will be used by PHP chmod function.
Defaults to 0777, meaning the directory can be read, written and executed by all users.</p>


<div class="detailHeader" id="newFileMode-detail">
newFileMode<span class="detailHeaderTag">
property
 (available since v1.1.8)
</span>
</div>

<div class="signature">
public integer <b>$newFileMode</b>;</div>

<p>the permission to be set for newly generated asset files.
This value will be used by PHP chmod function.
Defaults to 0666, meaning the file is read-writable by all users.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="generatePath-detail">
generatePath()
<span class="detailHeaderTag">
method
(available since v1.1.13)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>generatePath</b>(string $file, bool $hashByName=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">for which public path will be created.</td>
</tr>
<tr>
  <td class="paramNameCol">$hashByName</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">whether the published directory should be named as the hashed basename.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">path segments without basePath.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L325">yii\web\CAssetManager.php#L325</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generatePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathForHashing</span><span style="color: #007700">=</span><span style="color: #0000BB">$hashByName&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">).</span><span style="color: #0000BB">filemtime</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pathForHashing</span><span style="color: #007700">=</span><span style="color: #0000BB">$hashByName&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">.</span><span style="color: #0000BB">filemtime</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hash</span><span style="color: #007700">(</span><span style="color: #0000BB">$pathForHashing</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates path segments relative to basePath.</p>


<div class="detailHeader" id="getBasePath-detail">
getBasePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getBasePath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory storing the published asset files. Defaults to 'WebRoot/assets'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L118">yii\web\CAssetManager.php#L118</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_basePath</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setBasePath</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getScriptFile</span><span style="color: #007700">()).</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_BASEPATH</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_basePath</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


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
  <td class="paramDescCol">the base url that the published asset files can be accessed.
Note, the ending slashes are stripped off. Defaults to '/AppBaseUrl/assets'.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L146">yii\web\CAssetManager.php#L146</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">DEFAULT_BASEPATH</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPublishedPath-detail">
getPublishedPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPublishedPath</b>(string $path, boolean $hashByName=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">directory or file path being published</td>
</tr>
<tr>
  <td class="paramNameCol">$hashByName</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the published directory should be named as the hashed basename.
If false, the name will be the hash taken from dirname of the path being published and path mtime.
Defaults to false. Set true if the path being published is shared among
different extensions.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the published file path. False if the file or directory does not exist</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L272">yii\web\CAssetManager.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPublishedPath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$base</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generatePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$base</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$base&nbsp;</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the published path of a file path.
This method does not perform any publishing. It merely tells you
if the file or directory is published, where it will go.</p>


<div class="detailHeader" id="getPublishedUrl-detail">
getPublishedUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPublishedUrl</b>(string $path, boolean $hashByName=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">directory or file path being published</td>
</tr>
<tr>
  <td class="paramNameCol">$hashByName</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the published directory should be named as the hashed basename.
If false, the name will be the hash taken from dirname of the path being published and path mtime.
Defaults to false. Set true if the path being published is shared among
different extensions.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the published URL for the file or directory. False if the file or directory does not exist.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L294">yii\web\CAssetManager.php#L294</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPublishedUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_published</span><span style="color: #007700">[</span><span style="color: #0000BB">$path</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_published</span><span style="color: #007700">[</span><span style="color: #0000BB">$path</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$path</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$base</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generatePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">$base</span><span style="color: #007700">.</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #0000BB">$base</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the URL of a published file path.
This method does not perform any publishing. It merely tells you
if the file path is published, what the URL will be to access it.</p>


<div class="detailHeader" id="hash-detail">
hash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>hash</b>(string $path)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">string to be hashed.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">hashed string.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L313">yii\web\CAssetManager.php#L313</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">hash</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">'%x'</span><span style="color: #007700">,</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getVersion</span><span style="color: #007700">()));<br />}</span>
</span>
</code></div>
</div>
<p>Generate a CRC32 hash for the directory path. Collisions are higher
than MD5 but generates a much smaller hash string.</p>


<div class="detailHeader" id="publish-detail">
publish()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>publish</b>(string $path, boolean $hashByName=false, integer $level=-1, boolean $forceCopy=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the asset (file or directory) to be published</td>
</tr>
<tr>
  <td class="paramNameCol">$hashByName</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the published directory should be named as the hashed basename.
If false, the name will be the hash taken from dirname of the path being published and path mtime.
Defaults to false. Set true if the path being published is shared among
different extensions.</td>
</tr>
<tr>
  <td class="paramNameCol">$level</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">level of recursive copying when the asset is a directory.
Level -1 means publishing all subdirectories and files;
Level 0 means publishing only the files DIRECTLY under the directory;
level N means copying those directories that are within N levels.</td>
</tr>
<tr>
  <td class="paramNameCol">$forceCopy</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether we should copy the asset file or directory even if it is already
published before. In case of publishing a directory old files will not be removed.
This parameter is set true mainly during development stage when the original
assets are being constantly changed. The consequence is that the performance is degraded,
which is not a concern during development, however. Default value of this parameter is null meaning
that it's value is controlled by $forceCopy class property. This parameter has been available
since version 1.1.2. Default value has been changed since 1.1.11.
Note that this parameter cannot be true when $linkAssets property has true value too. Otherwise
an exception would be thrown. Using this parameter with $linkAssets property at the same time
is illogical because both of them are solving similar tasks but in a different ways. Please refer
to the $linkAssets documentation for more details.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">an absolute URL to the published asset</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L206">yii\web\CAssetManager.php#L206</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">publish</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$level</span><span style="color: #007700">=-</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">$forceCopy</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$forceCopy</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$forceCopy</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">forceCopy</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$forceCopy&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkAssets</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;"forceCopy"&nbsp;and&nbsp;"linkAssets"&nbsp;cannot&nbsp;be&nbsp;both&nbsp;true.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_published</span><span style="color: #007700">[</span><span style="color: #0000BB">$path</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_published</span><span style="color: #007700">[</span><span style="color: #0000BB">$path</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif((</span><span style="color: #0000BB">$src</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dir</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generatePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBasePath</span><span style="color: #007700">().</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$dir</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">=</span><span style="color: #0000BB">basename</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dstFile</span><span style="color: #007700">=</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">.</span><span style="color: #0000BB">DIRECTORY_SEPARATOR</span><span style="color: #007700">.</span><span style="color: #0000BB">$fileName</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newDirMode</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newDirMode</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkAssets&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstFile</span><span style="color: #007700">))&nbsp;</span><span style="color: #0000BB">symlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$dstFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(@</span><span style="color: #0000BB">filemtime</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstFile</span><span style="color: #007700">)&lt;@</span><span style="color: #0000BB">filemtime</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">copy</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$dstFile</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">chmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstFile</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newFileMode</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_published</span><span style="color: #007700">[</span><span style="color: #0000BB">$path</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">"/</span><span style="color: #0000BB">$dir</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$fileName</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">linkAssets&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">symlink</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(!</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$forceCopy</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">CFileHelper</span><span style="color: #007700">::</span><span style="color: #0000BB">copyDirectory</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$dstDir</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'exclude'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">excludeFiles</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'level'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$level</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'newDirMode'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newDirMode</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'newFileMode'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">newFileMode</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_published</span><span style="color: #007700">[</span><span style="color: #0000BB">$path</span><span style="color: #007700">]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getBaseUrl</span><span style="color: #007700">().</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$dir</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;asset&nbsp;"{asset}"&nbsp;to&nbsp;be&nbsp;published&nbsp;does&nbsp;not&nbsp;exist.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{asset}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$path</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Publishes a file or a directory.
This method will copy the specified asset to a web accessible directory
and return the URL for accessing the published asset.
<ul>
<li>If the asset is a file, its file modification time will be checked
to avoid unnecessary file copying;</li>
<li>If the asset is a directory, all files and subdirectories under it will
be published recursively. Note, in case $forceCopy is false the method only checks the
existence of the target directory to avoid repetitive copying.</li>
</ul>
<br/><br/>
Note: On rare scenario, a race condition can develop that will lead to a
one-time-manifestation of a non-critical problem in the creation of the directory
that holds the published assets. This problem can be avoided altogether by 'requesting'
in advance all the resources that are supposed to trigger a 'publish()' call, and doing
that in the application deployment phase, before system goes live. See more in the following
discussion: http://code.google.com/p/yii/issues/detail?id=2579</p>


<div class="detailHeader" id="setBasePath-detail">
setBasePath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setBasePath</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the root directory storing published asset files</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L133">yii\web\CAssetManager.php#L133</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setBasePath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">=</span><span style="color: #0000BB">realpath</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_dir</span><span style="color: #007700">(</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">is_writable</span><span style="color: #007700">(</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_basePath</span><span style="color: #007700">=</span><span style="color: #0000BB">$basePath</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CAssetManager.basePath&nbsp;"{path}"&nbsp;is&nbsp;invalid.&nbsp;Please&nbsp;make&nbsp;sure&nbsp;the&nbsp;directory&nbsp;exists&nbsp;and&nbsp;is&nbsp;writable&nbsp;by&nbsp;the&nbsp;Web&nbsp;server&nbsp;process.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{path}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Sets the root directory storing published asset files.</p>


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
  <td class="paramDescCol">the base url that the published asset files can be accessed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/\web\CAssetManager.php#L159">yii\web\CAssetManager.php#L159</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setBaseUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_baseUrl</span><span style="color: #007700">=</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


