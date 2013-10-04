<?php
$this->pageTitle = $this->pageHeading = 'YdEMailHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdEMailHelper';
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
  <td><?php echo CHtml::link('dressing.helpers', array('/site/doc', '#' => 'dressing.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdEMailHelper</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdEMailHelper.php">dressing/helpers/YdEMailHelper.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdEMailHelper</div>
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
<tr id="renderEmailTemplate">
  <td><?php echo CHtml::link('renderEmailTemplate()', array('/site/doc', 'view' => 'YdEMailHelper', '#' => 'renderEmailTemplate-detail')); ?></td>
  <td></td>
  <td>YdEMailHelper</td>
</tr>
<tr id="sendError">
  <td><?php echo CHtml::link('sendError()', array('/site/doc', 'view' => 'YdEMailHelper', '#' => 'sendError-detail')); ?></td>
  <td></td>
  <td>YdEMailHelper</td>
</tr>
<tr id="sendUserRecover">
  <td><?php echo CHtml::link('sendUserRecover()', array('/site/doc', 'view' => 'YdEMailHelper', '#' => 'sendUserRecover-detail')); ?></td>
  <td></td>
  <td>YdEMailHelper</td>
</tr>
<tr id="sendUserWelcome">
  <td><?php echo CHtml::link('sendUserWelcome()', array('/site/doc', 'view' => 'YdEMailHelper', '#' => 'sendUserWelcome-detail')); ?></td>
  <td></td>
  <td>YdEMailHelper</td>
</tr>
<tr id="spool">
  <td><?php echo CHtml::link('spool()', array('/site/doc', 'view' => 'YdEMailHelper', '#' => 'spool-detail')); ?></td>
  <td>Spool (save) an email</td>
  <td>YdEMailHelper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="renderEmailTemplate-detail">
renderEmailTemplate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>renderEmailTemplate</b>($template $template, $viewParams $viewParams=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">$template</td>
  <td class="paramDescCol">string</td>
</tr>
<tr>
  <td class="paramNameCol">$viewParams</td>
  <td class="paramTypeCol">$viewParams</td>
  <td class="paramDescCol">array</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdEMailHelper.php#L150">dressing/helpers/YdEMailHelper.php#L150</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">renderEmailTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;load&nbsp;layout<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailLayout&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">EmailTemplate</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findByAttributes</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'layout.default'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$emailLayout</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'missing&nbsp;EmailTemplate&nbsp;-&nbsp;layout.default'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;load&nbsp;template<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailTemplate&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">EmailTemplate</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">findByAttributes</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$emailTemplate</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'missing&nbsp;EmailTemplate&nbsp;-&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;settings&nbsp;to&nbsp;params<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">[</span><span style="color: #DD0000">'Setting'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">items</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">[</span><span style="color: #DD0000">'Setting'</span><span style="color: #007700">][</span><span style="color: #DD0000">'bu'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;parse&nbsp;template<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$mustache&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Mustache</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fields&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'message_title'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'message_subject'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'message_html'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'message_text'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$templates&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$fields&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$field</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">[</span><span style="color: #DD0000">'contents'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$mustache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$emailTemplate</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">[</span><span style="color: #0000BB">$field</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$templates</span><span style="color: #007700">[</span><span style="color: #0000BB">$field</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$mustache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">render</span><span style="color: #007700">(</span><span style="color: #0000BB">$emailLayout</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$field</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">[</span><span style="color: #DD0000">'contents'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$templates</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="sendError-detail">
sendError()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>sendError</b>($count $count)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$count</td>
  <td class="paramTypeCol">$count</td>
  <td class="paramDescCol">int</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdEMailHelper.php#L55">dressing/helpers/YdEMailHelper.php#L55</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendError</span><span style="color: #007700">(</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Error'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'model_id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #DD0000">'/error/index'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messageString&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'errors&nbsp;have&nbsp;been&nbsp;archived'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'heading'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'subject'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'errors&nbsp;have&nbsp;been&nbsp;archived'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$messageString</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'html'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">format</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">formatNtext</span><span style="color: #007700">(</span><span style="color: #0000BB">$messageString</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;email&nbsp;the&nbsp;given&nbsp;user<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">','</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'error_email'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$tos&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$to</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">EmailSpool</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">spool</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="sendUserRecover-detail">
sendUserRecover()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>sendUserRecover</b>($user $user)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol">$user</td>
  <td class="paramDescCol">User</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdEMailHelper.php#L19">dressing/helpers/YdEMailHelper.php#L19</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendUserRecover</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;setup&nbsp;email&nbsp;variables<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'User'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'User'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'model_id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'UserRecover'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;recovery&nbsp;temp&nbsp;login&nbsp;link<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Token</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'+1day'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #DD0000">'/account/passwordReset'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'token'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;spool&nbsp;the&nbsp;email<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">spool</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'user.recover'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="sendUserWelcome-detail">
sendUserWelcome()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>sendUserWelcome</b>($user $user)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$user</td>
  <td class="paramTypeCol">$user</td>
  <td class="paramDescCol">User</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdEMailHelper.php#L37">dressing/helpers/YdEMailHelper.php#L37</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendUserWelcome</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;setup&nbsp;email&nbsp;variables<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">email&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'User'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'model'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'User'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'model_id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'UserWelcome'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;get&nbsp;activation&nbsp;token<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$token&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Token</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'+30days'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createAbsoluteUrl</span><span style="color: #007700">(</span><span style="color: #DD0000">'/account/activate'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'token'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$token</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;spool&nbsp;the&nbsp;email<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">spool</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'user.welcome'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="spool-detail">
spool()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static bool|integer <b>spool</b>($to $to, $template $template, array $viewParams=array (
), array $relation=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$to</td>
  <td class="paramTypeCol">$to</td>
  <td class="paramDescCol">string|array</td>
</tr>
<tr>
  <td class="paramNameCol">$template</td>
  <td class="paramTypeCol">$template</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$viewParams</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$relation</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|integer</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdEMailHelper.php#L86">dressing/helpers/YdEMailHelper.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">spool</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$relation&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;generate&nbsp;the&nbsp;message<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">renderEmailTemplate</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$viewParams</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;format&nbsp;the&nbsp;to_name/to_email<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$to_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$to</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #0000BB">$to&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$to&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$to_email&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$to_name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$to_email</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$to_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$to_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;save&nbsp;the&nbsp;email<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">EmailSpool</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">status&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'pending'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'email'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">from_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_email&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$to_email</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">to_name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$to_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_subject&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #DD0000">'message_subject'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_text&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #DD0000">'message_text'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">message_html&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">[</span><span style="color: #DD0000">'message_html'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #DD0000">'model'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #DD0000">'model_id'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model_id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #DD0000">'model_id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(isset(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$relation</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;set&nbsp;flash&nbsp;message<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$flash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'debug_email'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$flash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(!</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">checkAccess</span><span style="color: #007700">(</span><span style="color: #DD0000">'admin'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$flash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'flash'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$flash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'flash'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$flash&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$debug&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">controller</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">renderPartial</span><span style="color: #007700">(</span><span style="color: #DD0000">'application.views.email._debug'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">compact</span><span style="color: #007700">(</span><span style="color: #DD0000">'to'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'message'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'template'</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFlash</span><span style="color: #007700">(</span><span style="color: #0000BB">$debug</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;return&nbsp;the&nbsp;id<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">save</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'could&nbsp;not&nbsp;save&nbsp;email&nbsp;spool&nbsp;because&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$emailSpool</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrorString</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Spool (save) an email</p>


