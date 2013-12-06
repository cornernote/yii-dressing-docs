<?php
$this->pageTitle = $this->pageHeading = 'YdSwiftMailer';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdSwiftMailer';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdSwiftMailer</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php">dressing/components/YdSwiftMailer.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Martin Nilsson &lt;martin.nilsson@haxtech.se&gt;</td>
</tr>
</table>

<div id="classDescription">
YdSwiftMailer is a yii wrapper for SwiftMailer
<br/><br/>
It is functionally identical, however it includes swiftmailer from the
composer vendor folder and is documented for use in phpStorm.
<br/><br/>
This class was inspired by SwiftMailer by Martin Nilsson.</div>
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
<tr id="attachment">
  <td><?php echo CHtml::link('attachment()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'attachment-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="image">
  <td><?php echo CHtml::link('image()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'image-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'init-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="mailTransport">
  <td><?php echo CHtml::link('mailTransport()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'mailTransport-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="mailer">
  <td><?php echo CHtml::link('mailer()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'mailer-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="newMessage">
  <td><?php echo CHtml::link('newMessage()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'newMessage-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="preferences">
  <td><?php echo CHtml::link('preferences()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'preferences-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="sendmailTransport">
  <td><?php echo CHtml::link('sendmailTransport()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'sendmailTransport-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
<tr id="smtpTransport">
  <td><?php echo CHtml::link('smtpTransport()', array('/site/doc', 'view' => 'YdSwiftMailer', '#' => 'smtpTransport-detail')); ?></td>
  <td></td>
  <td>YdSwiftMailer</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="attachment-detail">
attachment()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>attachment</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L41">dressing/components/YdSwiftMailer.php#L41</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">attachment</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="image-detail">
image()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>image</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L67">dressing/components/YdSwiftMailer.php#L67</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">image</span><span style="color: #007700">()
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
public void <b>init</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L25">dressing/components/YdSwiftMailer.php#L25</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="mailTransport-detail">
mailTransport()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>mailTransport</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L94">dressing/components/YdSwiftMailer.php#L94</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">mailTransport</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="mailer-detail">
mailer()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>mailer</b>(null $transport=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$transport</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L59">dressing/components/YdSwiftMailer.php#L59</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">mailer</span><span style="color: #007700">(</span><span style="color: #0000BB">$transport&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="newMessage-detail">
newMessage()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>newMessage</b>($subject $subject)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$subject</td>
  <td class="paramTypeCol">$subject</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L50">dressing/components/YdSwiftMailer.php#L50</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">newMessage</span><span style="color: #007700">(</span><span style="color: #0000BB">$subject</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="preferences-detail">
preferences()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>preferences</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L33">dressing/components/YdSwiftMailer.php#L33</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">preferences</span><span style="color: #007700">()
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="sendmailTransport-detail">
sendmailTransport()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>sendmailTransport</b>(null $command=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$command</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L86">dressing/components/YdSwiftMailer.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">sendmailTransport</span><span style="color: #007700">(</span><span style="color: #0000BB">$command&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="smtpTransport-detail">
smtpTransport()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>smtpTransport</b>(null $host=NULL, null $port=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$host</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$port</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.3.0/yii-dressing/components/YdSwiftMailer.php#L77">dressing/components/YdSwiftMailer.php#L77</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">smtpTransport</span><span style="color: #007700">(</span><span style="color: #0000BB">$host&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$port&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

