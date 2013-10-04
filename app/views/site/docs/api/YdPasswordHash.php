<?php
$this->pageTitle = $this->pageHeading = 'YdPasswordHash';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdPasswordHash';
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
  <td><?php echo CHtml::link('dressing.helpers', array('/site/doc', '#' => 'dressing.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdPasswordHash</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php">dressing/helpers/YdPasswordHash.php</a></td>
</tr>
</table>

<div id="classDescription">
Portable PHP password hashing framework.
<br/><br/>
Version 0.3 / genuine.
<br/><br/>
Written by Solar Designer <solar at openwall.com> in 2004-2006 and placed in
the public domain.  Revised in subsequent years, still public domain.
<br/><br/>
There's absolutely no warranty.
<br/><br/>
The homepage URL for this framework is:
<br/><br/>
http://www.openwall.com/phpass/
<br/><br/>
Please be sure to update the Version line if you edit this file in any way.
It is suggested that you leave the main version number intact, but indicate
your project name (after the slash) and add your own revision information.
<br/><br/>
Please do not change the "private" password hashing method implemented in
here, thereby making your hashes incompatible.  However, if you must, please
change the hash type identifier (the "$P$") to something different.
<br/><br/>
Obviously, since this code is in the public domain, the above are not
requirements (there can be none), but merely suggestions.</div>
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
<tr id="iteration_count_log2">
  <td><?php echo CHtml::link('iteration_count_log2', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'iteration_count_log2-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="itoa64">
  <td><?php echo CHtml::link('itoa64', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'itoa64-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="portable_hashes">
  <td><?php echo CHtml::link('portable_hashes', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'portable_hashes-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="random_state">
  <td><?php echo CHtml::link('random_state', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'random_state-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdPasswordHash</td>
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
<tr id="CheckPassword">
  <td><?php echo CHtml::link('CheckPassword()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'CheckPassword-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="HashPassword">
  <td><?php echo CHtml::link('HashPassword()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'HashPassword-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="PasswordHash">
  <td><?php echo CHtml::link('PasswordHash()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'PasswordHash-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="crypt_private">
  <td><?php echo CHtml::link('crypt_private()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'crypt_private-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="encode64">
  <td><?php echo CHtml::link('encode64()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'encode64-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="gensalt_blowfish">
  <td><?php echo CHtml::link('gensalt_blowfish()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'gensalt_blowfish-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="gensalt_extended">
  <td><?php echo CHtml::link('gensalt_extended()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'gensalt_extended-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="gensalt_private">
  <td><?php echo CHtml::link('gensalt_private()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'gensalt_private-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
<tr id="get_random_bytes">
  <td><?php echo CHtml::link('get_random_bytes()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => 'get_random_bytes-detail')); ?></td>
  <td></td>
  <td>YdPasswordHash</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="iteration_count_log2-detail">
iteration_count_log2<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$iteration_count_log2</b>;</div>

<p></p>


<div class="detailHeader" id="itoa64-detail">
itoa64<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$itoa64</b>;</div>

<p></p>


<div class="detailHeader" id="portable_hashes-detail">
portable_hashes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$portable_hashes</b>;</div>

<p></p>


<div class="detailHeader" id="random_state-detail">
random_state<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$random_state</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="CheckPassword-detail">
CheckPassword()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>CheckPassword</b>($password, $stored_hash)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$stored_hash</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L246">dressing/helpers/YdPasswordHash.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">CheckPassword</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$stored_hash</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">crypt_private</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$stored_hash</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;==&nbsp;</span><span style="color: #DD0000">'*'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">crypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$stored_hash</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">$stored_hash</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="HashPassword-detail">
HashPassword()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>HashPassword</b>($password)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L211">dressing/helpers/YdPasswordHash.php#L211</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">HashPassword</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$random&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">CRYPT_BLOWFISH&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">portable_hashes</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$random&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_random_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">16</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">crypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gensalt_blowfish</span><span style="color: #007700">(</span><span style="color: #0000BB">$random</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">60</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hash</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">CRYPT_EXT_DES&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">portable_hashes</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$random</span><span style="color: #007700">)&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$random&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_random_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">crypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gensalt_extended</span><span style="color: #007700">(</span><span style="color: #0000BB">$random</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">20</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hash</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$random</span><span style="color: #007700">)&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$random&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_random_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">6</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">crypt_private</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">gensalt_private</span><span style="color: #007700">(</span><span style="color: #0000BB">$random</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">34</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hash</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;Returning&nbsp;'*'&nbsp;on&nbsp;error&nbsp;is&nbsp;safe&nbsp;here,&nbsp;but&nbsp;would&nbsp;_not_&nbsp;be&nbsp;safe<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;in&nbsp;a&nbsp;crypt(3)-like&nbsp;function&nbsp;used&nbsp;_both_&nbsp;for&nbsp;generating&nbsp;new<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;hashes&nbsp;and&nbsp;for&nbsp;validating&nbsp;passwords&nbsp;against&nbsp;existing&nbsp;hashes.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #DD0000">'*'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="PasswordHash-detail">
PasswordHash()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>PasswordHash</b>($iteration_count_log2, $portable_hashes)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$iteration_count_log2</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$portable_hashes</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L36">dressing/helpers/YdPasswordHash.php#L36</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">PasswordHash</span><span style="color: #007700">(</span><span style="color: #0000BB">$iteration_count_log2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$portable_hashes</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'./0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$iteration_count_log2&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">4&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$iteration_count_log2&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">31</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iteration_count_log2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">iteration_count_log2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$iteration_count_log2</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">portable_hashes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$portable_hashes</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">random_state&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">microtime</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'getmypid'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">random_state&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">getmypid</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="crypt_private-detail">
crypt_private()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>crypt_private</b>($password, $setting)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$setting</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L107">dressing/helpers/YdPasswordHash.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">crypt_private</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$setting</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'*0'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$setting</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'*1'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$setting</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;We&nbsp;use&nbsp;"$P$",&nbsp;phpBB3&nbsp;uses&nbsp;"$H$"&nbsp;for&nbsp;the&nbsp;same&nbsp;thing<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">'$P$'&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">'$H$'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count_log2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$setting</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$count_log2&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">7&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$count_log2&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">30</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$count_log2</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$salt&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$setting</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$salt</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;We're&nbsp;kind&nbsp;of&nbsp;forced&nbsp;to&nbsp;use&nbsp;MD5&nbsp;here&nbsp;since&nbsp;it's&nbsp;the&nbsp;only<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;cryptographic&nbsp;primitive&nbsp;available&nbsp;in&nbsp;all&nbsp;versions&nbsp;of&nbsp;PHP<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;currently&nbsp;in&nbsp;use.&nbsp;&nbsp;To&nbsp;implement&nbsp;our&nbsp;own&nbsp;low-level&nbsp;crypto<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;in&nbsp;PHP&nbsp;would&nbsp;result&nbsp;in&nbsp;much&nbsp;worse&nbsp;performance&nbsp;and<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;consequently&nbsp;in&nbsp;lower&nbsp;iteration&nbsp;counts&nbsp;and&nbsp;hashes&nbsp;that&nbsp;are<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;quicker&nbsp;to&nbsp;crack&nbsp;(by&nbsp;non-PHP&nbsp;code).<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">PHP_VERSION&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$salt&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">TRUE</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while&nbsp;(--</span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'H*'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$salt&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'H*'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while&nbsp;(--</span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$setting</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encode64</span><span style="color: #007700">(</span><span style="color: #0000BB">$hash</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="encode64-detail">
encode64()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>encode64</b>($input, $count)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$input</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$count</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L74">dressing/helpers/YdPasswordHash.php#L74</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">encode64</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">++]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">|=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">])&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i</span><span style="color: #007700">++&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">|=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">])&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i</span><span style="color: #007700">++&nbsp;&gt;=&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">18</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="gensalt_blowfish-detail">
gensalt_blowfish()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>gensalt_blowfish</b>($input)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$input</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L170">dressing/helpers/YdPasswordHash.php#L170</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gensalt_blowfish</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;This&nbsp;one&nbsp;needs&nbsp;to&nbsp;use&nbsp;a&nbsp;different&nbsp;order&nbsp;of&nbsp;characters&nbsp;and&nbsp;a<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;different&nbsp;encoding&nbsp;scheme&nbsp;from&nbsp;the&nbsp;one&nbsp;in&nbsp;encode64()&nbsp;above.<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;We&nbsp;care&nbsp;because&nbsp;the&nbsp;last&nbsp;character&nbsp;in&nbsp;our&nbsp;encoded&nbsp;string&nbsp;will<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;only&nbsp;represent&nbsp;2&nbsp;bits.&nbsp;&nbsp;While&nbsp;two&nbsp;known&nbsp;implementations&nbsp;of<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;bcrypt&nbsp;will&nbsp;happily&nbsp;accept&nbsp;and&nbsp;correct&nbsp;a&nbsp;salt&nbsp;string&nbsp;which<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;has&nbsp;the&nbsp;4&nbsp;unused&nbsp;bits&nbsp;set&nbsp;to&nbsp;non-zero,&nbsp;we&nbsp;do&nbsp;not&nbsp;want&nbsp;to&nbsp;take<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;chances&nbsp;and&nbsp;we&nbsp;also&nbsp;do&nbsp;not&nbsp;want&nbsp;to&nbsp;waste&nbsp;an&nbsp;additional&nbsp;byte<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;of&nbsp;entropy.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$itoa64&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'$2a$'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #DD0000">'0'</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">iteration_count_log2&nbsp;</span><span style="color: #007700">/&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #DD0000">'0'</span><span style="color: #007700">)&nbsp;+&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">iteration_count_log2&nbsp;</span><span style="color: #007700">%&nbsp;</span><span style="color: #0000BB">10</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'$'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;do&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">++]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x03</span><span style="color: #007700">)&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">$c1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">++]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">|=&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">$c1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x0f</span><span style="color: #007700">)&nbsp;&lt;&lt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ord</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">++]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$c1&nbsp;</span><span style="color: #007700">|=&nbsp;</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">$c1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">$c2&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;while&nbsp;(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="gensalt_extended-detail">
gensalt_extended()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>gensalt_extended</b>($input)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$input</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L152">dressing/helpers/YdPasswordHash.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gensalt_extended</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count_log2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">iteration_count_log2&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">8</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">24</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">#&nbsp;This&nbsp;should&nbsp;be&nbsp;odd&nbsp;to&nbsp;not&nbsp;reveal&nbsp;weak&nbsp;DES&nbsp;keys,&nbsp;and&nbsp;the<br />&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;maximum&nbsp;valid&nbsp;value&nbsp;is&nbsp;(2**24&nbsp;-&nbsp;1)&nbsp;which&nbsp;is&nbsp;odd&nbsp;anyway.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">&lt;&lt;&nbsp;</span><span style="color: #0000BB">$count_log2</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[(</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[(</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">12</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[(</span><span style="color: #0000BB">$count&nbsp;</span><span style="color: #007700">&gt;&gt;&nbsp;</span><span style="color: #0000BB">18</span><span style="color: #007700">)&nbsp;&amp;&nbsp;</span><span style="color: #0000BB">0x3f</span><span style="color: #007700">];<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encode64</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="gensalt_private-detail">
gensalt_private()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>gensalt_private</b>($input)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$input</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L97">dressing/helpers/YdPasswordHash.php#L97</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gensalt_private</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'$P$'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">itoa64</span><span style="color: #007700">[</span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">iteration_count_log2&nbsp;</span><span style="color: #007700">+<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((</span><span style="color: #0000BB">PHP_VERSION&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">5&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">30</span><span style="color: #007700">)];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">encode64</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">6</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="get_random_bytes-detail">
get_random_bytes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>get_random_bytes</b>($count)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$count</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPasswordHash.php#L51">dressing/helpers/YdPasswordHash.php#L51</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">get_random_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$count</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_readable</span><span style="color: #007700">(</span><span style="color: #DD0000">'/dev/urandom'</span><span style="color: #007700">)&nbsp;&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$fh&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'/dev/urandom'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fh</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">)&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">random_state&nbsp;</span><span style="color: #007700">=<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">microtime</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">random_state</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">.=<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'H*'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">random_state</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


