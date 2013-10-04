<?php
$this->pageTitle = $this->pageHeading = 'YdPayPalHelper';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdPayPalHelper';
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
  <td>class YdPayPalHelper</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPayPalHelper.php">dressing/helpers/YdPayPalHelper.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
Sandbox Accounts:
Seller user/pass = seller_1350383460_biz@mrphp.com.au / 350383305
Buyer user/pass = buyer_1350383726_per@mrphp.com.au / 350383682
<br/><br/>
Sandbox Api:
'username' => 'seller_1350383460_biz_api1.mrphp.com.au',
'password' => '1350383522',
'signature' => 'Af1LaOyCOePxDWuGMUExRqQv5fPMAq9GPNamfk5MKebSmMzKPs8CYhjb    ',
'email' => 'seller_1350383460_biz@mrphp.com.au',
'identityToken' => 'ifcqMvmR1e7j2E9ZfLwSG_p5eDRxg3PuQUe7Ri-Zo5SRrxKksr7qWKUfb-m',
'business' => 'seller_1350383460_biz@mrphp.com.au',</div>
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
<tr id="getButton">
  <td><?php echo CHtml::link('getButton()', array('/site/doc', 'view' => 'YdPayPalHelper', '#' => 'getButton-detail')); ?></td>
  <td></td>
  <td>YdPayPalHelper</td>
</tr>
<tr id="getLink">
  <td><?php echo CHtml::link('getLink()', array('/site/doc', 'view' => 'YdPayPalHelper', '#' => 'getLink-detail')); ?></td>
  <td></td>
  <td>YdPayPalHelper</td>
</tr>
<tr id="getOptions">
  <td><?php echo CHtml::link('getOptions()', array('/site/doc', 'view' => 'YdPayPalHelper', '#' => 'getOptions-detail')); ?></td>
  <td></td>
  <td>YdPayPalHelper</td>
</tr>
<tr id="getUnsubscribeLink">
  <td><?php echo CHtml::link('getUnsubscribeLink()', array('/site/doc', 'view' => 'YdPayPalHelper', '#' => 'getUnsubscribeLink-detail')); ?></td>
  <td></td>
  <td>YdPayPalHelper</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Method Details</h2>

<div class="detailHeader" id="getButton-detail">
getButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getButton</b>($options $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">$options</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPayPalHelper.php#L64">dressing/helpers/YdPayPalHelper.php#L64</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'&lt;form&nbsp;action="https://www.'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'paypal'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'env'</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #DD0000">'live'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'sandbox.'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'paypal.com/cgi-bin/webscr"&nbsp;method="get"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;input&nbsp;type="hidden"&nbsp;name="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"&nbsp;value="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$v&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;input&nbsp;type="image"&nbsp;src="https://www.paypalobjects.com/en_AU/i/btn/btn_subscribeCC_LG.gif"&nbsp;border="0"&nbsp;name="submit"&nbsp;alt="PayPal&nbsp;—&nbsp;The&nbsp;safer,&nbsp;easier&nbsp;way&nbsp;to&nbsp;pay&nbsp;online."&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;img&nbsp;alt=""&nbsp;border="0"&nbsp;src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif"&nbsp;width="1"&nbsp;height="1"&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$button&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&lt;/form&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$button</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getLink-detail">
getLink()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getLink</b>($options $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">$options</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPayPalHelper.php#L81">dressing/helpers/YdPayPalHelper.php#L81</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getLink</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$link&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$link</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'='&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'https://www.'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'paypal'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'env'</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #DD0000">'live'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'sandbox.'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'paypal.com/cgi-bin/webscr?'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getOptions-detail">
getOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>getOptions</b>($options $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">$options</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPayPalHelper.php#L32">dressing/helpers/YdPayPalHelper.php#L32</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaults&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;defaults<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cmd'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'_xclick-subscriptions'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'business'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'paypal'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'business'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lc'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'AU'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'no_note'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'no_shipping'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rm'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'return'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'https://www.example.com/checkout/success'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cancel_return'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'https://www.example.com/checkout/plan'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'notify_url'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'https://www.example.com/checkout/ipn'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'src'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'p3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'t3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'M'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'currency_code'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'AUD'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bn'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHosted'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;overwrite&nbsp;these&nbsp;using&nbsp;$options<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'item_name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Subscription'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'item_number'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'subscription'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'a3'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1.00</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'invoice'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CMap</span><span style="color: #007700">::</span><span style="color: #0000BB">mergeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaults</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getUnsubscribeLink-detail">
getUnsubscribeLink()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getUnsubscribeLink</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/src/master/src/helpers/YdPayPalHelper.php#L94">dressing/helpers/YdPayPalHelper.php#L94</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getUnsubscribeLink</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'https://www.'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">YdSetting</span><span style="color: #007700">::</span><span style="color: #0000BB">item</span><span style="color: #007700">(</span><span style="color: #DD0000">'paypal'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'env'</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #DD0000">'live'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'sandbox.'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'paypal.com/cgi-bin/webscr?cmd=_manage-paylist'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


