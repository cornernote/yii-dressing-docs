<?php
$this->pageTitle = $this->pageHeading = 'IApplicationComponent';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'IApplicationComponent';
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
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>interface IApplicationComponent</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('Bootstrap', array('/site/doc', 'view' => 'Bootstrap')); ?>, <?php echo CHtml::link('CApcCache', array('/site/doc', 'view' => 'CApcCache')); ?>, <?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?>, <?php echo CHtml::link('CAssetManager', array('/site/doc', 'view' => 'CAssetManager')); ?>, <?php echo CHtml::link('CAuthManager', array('/site/doc', 'view' => 'CAuthManager')); ?>, <?php echo CHtml::link('CCache', array('/site/doc', 'view' => 'CCache')); ?>, <?php echo CHtml::link('CCacheHttpSession', array('/site/doc', 'view' => 'CCacheHttpSession')); ?>, <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?>, <?php echo CHtml::link('CDbAuthManager', array('/site/doc', 'view' => 'CDbAuthManager')); ?>, <?php echo CHtml::link('CDbCache', array('/site/doc', 'view' => 'CDbCache')); ?>, <?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?>, <?php echo CHtml::link('CDbHttpSession', array('/site/doc', 'view' => 'CDbHttpSession')); ?>, <?php echo CHtml::link('CDbMessageSource', array('/site/doc', 'view' => 'CDbMessageSource')); ?>, <?php echo CHtml::link('CDummyCache', array('/site/doc', 'view' => 'CDummyCache')); ?>, <?php echo CHtml::link('CEAcceleratorCache', array('/site/doc', 'view' => 'CEAcceleratorCache')); ?>, <?php echo CHtml::link('CErrorHandler', array('/site/doc', 'view' => 'CErrorHandler')); ?>, <?php echo CHtml::link('CFileCache', array('/site/doc', 'view' => 'CFileCache')); ?>, <?php echo CHtml::link('CFormatter', array('/site/doc', 'view' => 'CFormatter')); ?>, <?php echo CHtml::link('CGettextMessageSource', array('/site/doc', 'view' => 'CGettextMessageSource')); ?>, <?php echo CHtml::link('CHttpRequest', array('/site/doc', 'view' => 'CHttpRequest')); ?>, <?php echo CHtml::link('CHttpSession', array('/site/doc', 'view' => 'CHttpSession')); ?>, <?php echo CHtml::link('CLocalizedFormatter', array('/site/doc', 'view' => 'CLocalizedFormatter')); ?>, <?php echo CHtml::link('CLogRouter', array('/site/doc', 'view' => 'CLogRouter')); ?>, <?php echo CHtml::link('CMemCache', array('/site/doc', 'view' => 'CMemCache')); ?>, <?php echo CHtml::link('CMessageSource', array('/site/doc', 'view' => 'CMessageSource')); ?>, <?php echo CHtml::link('CPhpAuthManager', array('/site/doc', 'view' => 'CPhpAuthManager')); ?>, <?php echo CHtml::link('CPhpMessageSource', array('/site/doc', 'view' => 'CPhpMessageSource')); ?>, <?php echo CHtml::link('CPradoViewRenderer', array('/site/doc', 'view' => 'CPradoViewRenderer')); ?>, <?php echo CHtml::link('CRedisCache', array('/site/doc', 'view' => 'CRedisCache')); ?>, <?php echo CHtml::link('CSecurityManager', array('/site/doc', 'view' => 'CSecurityManager')); ?>, <?php echo CHtml::link('CStatePersister', array('/site/doc', 'view' => 'CStatePersister')); ?>, <?php echo CHtml::link('CThemeManager', array('/site/doc', 'view' => 'CThemeManager')); ?>, <?php echo CHtml::link('CUrlManager', array('/site/doc', 'view' => 'CUrlManager')); ?>, <?php echo CHtml::link('CViewRenderer', array('/site/doc', 'view' => 'CViewRenderer')); ?>, <?php echo CHtml::link('CWebUser', array('/site/doc', 'view' => 'CWebUser')); ?>, <?php echo CHtml::link('CWidgetFactory', array('/site/doc', 'view' => 'CWidgetFactory')); ?>, <?php echo CHtml::link('CWinCache', array('/site/doc', 'view' => 'CWinCache')); ?>, <?php echo CHtml::link('CXCache', array('/site/doc', 'view' => 'CXCache')); ?>, <?php echo CHtml::link('CZendDataCache', array('/site/doc', 'view' => 'CZendDataCache')); ?>, <?php echo CHtml::link('YdAssetManager', array('/site/doc', 'view' => 'YdAssetManager')); ?>, <?php echo CHtml::link('YdClientScript', array('/site/doc', 'view' => 'YdClientScript')); ?>, <?php echo CHtml::link('YdDressing', array('/site/doc', 'view' => 'YdDressing')); ?>, <?php echo CHtml::link('YdEmail', array('/site/doc', 'view' => 'YdEmail')); ?>, <?php echo CHtml::link('YdErrorHandler', array('/site/doc', 'view' => 'YdErrorHandler')); ?>, <?php echo CHtml::link('YdFatalErrorCatch', array('/site/doc', 'view' => 'YdFatalErrorCatch')); ?>, <?php echo CHtml::link('YdFormatter', array('/site/doc', 'view' => 'YdFormatter')); ?>, <?php echo CHtml::link('YdMailChimp', array('/site/doc', 'view' => 'YdMailChimp')); ?>, <?php echo CHtml::link('YdPayPalHelper', array('/site/doc', 'view' => 'YdPayPalHelper')); ?>, <?php echo CHtml::link('YdReturnUrl', array('/site/doc', 'view' => 'YdReturnUrl')); ?>, <?php echo CHtml::link('YdWebUser', array('/site/doc', 'view' => 'YdWebUser')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php">yii/base/interfaces.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
IApplicationComponent is the interface that all application components must implement.
<br/><br/>
After the application completes configuration, it will invoke the <?php echo CHtml::link('init()', array('/site/doc', 'view' => 'IApplicationComponent', '#' => 'init')); ?>
method of every loaded application component.</div>
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
<tr id="getIsInitialized">
  <td><?php echo CHtml::link('getIsInitialized()', array('/site/doc', 'view' => 'IApplicationComponent', '#' => 'getIsInitialized-detail')); ?></td>
  <td>Checks whether the <?php echo CHtml::link('init()', array('/site/doc', 'view' => 'IApplicationComponent', '#' => 'init')); ?> method has been invoked.</td>
  <td>IApplicationComponent</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'IApplicationComponent', '#' => 'init-detail')); ?></td>
  <td>Initializes the application component.</td>
  <td>IApplicationComponent</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getIsInitialized-detail">
getIsInitialized()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public boolean <b>getIsInitialized</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the <?php echo CHtml::link('init()', array('/site/doc', 'view' => 'IApplicationComponent', '#' => 'init')); ?> method has been invoked.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L31">yii/base/interfaces.php#L31</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIsInitialized</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="init-detail">
init()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
abstract public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/base/interfaces.php#L27">yii/base/interfaces.php#L27</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">();</span>
</span>
</code></div>
</div>
<p>Initializes the application component.
This method is invoked after the application completes configuration.</p>


