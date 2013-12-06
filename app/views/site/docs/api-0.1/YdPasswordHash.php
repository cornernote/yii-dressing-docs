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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdPasswordHash</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php">dressing/components/YdPasswordHash.php</a></td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'YdPasswordHash', '#' => '__construct-detail')); ?></td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L246">dressing/components/YdPasswordHash.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">CheckPassword</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$stored_hash</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L211">dressing/components/YdPasswordHash.php#L211</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">HashPassword</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>($iteration_count_log2, $portable_hashes)</div>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L36">dressing/components/YdPasswordHash.php#L36</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$iteration_count_log2</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$portable_hashes</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L107">dressing/components/YdPasswordHash.php#L107</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">crypt_private</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$setting</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L74">dressing/components/YdPasswordHash.php#L74</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">encode64</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L170">dressing/components/YdPasswordHash.php#L170</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gensalt_blowfish</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L152">dressing/components/YdPasswordHash.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gensalt_extended</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L97">dressing/components/YdPasswordHash.php#L97</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">gensalt_private</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">)
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdPasswordHash.php#L51">dressing/components/YdPasswordHash.php#L51</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">get_random_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$count</span><span style="color: #007700">)
</span>
</code></div>
</div>
<p></p>

