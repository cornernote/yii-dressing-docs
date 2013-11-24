<?php
$this->pageTitle = $this->pageHeading = 'CGettextMoFile';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CGettextMoFile';
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
  <td><?php echo CHtml::link('system.i18n.gettext', array('/site/doc', '#' => 'system.i18n.gettext')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CGettextMoFile &raquo;
<?php echo CHtml::link('CGettextFile', array('/site/doc', 'view' => 'CGettextFile')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php">yii\i18n\gettext\CGettextMoFile.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CGettextMoFile represents an MO Gettext message file.
<br/><br/>
This class is written by adapting Michael's Gettext_MO class in PEAR.
Please refer to the following license terms.
<br/><br/>
Copyright (c) 2004-2005, Michael Wallner <mike@iworks.at>.
All rights reserved.
<br/><br/>
Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
<br/><br/>
    * Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.
<br/><br/>
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</div>
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
<tr id="useBigEndian">
  <td><?php echo CHtml::link('useBigEndian', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'useBigEndian-detail')); ?></td>
  <td>boolean</td>
  <td>whether to use Big Endian when reading and writing an integer.</td>
  <td>CGettextMoFile</td>
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
<tr id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td>CGettextMoFile</td>
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
<tr id="load">
  <td><?php echo CHtml::link('load()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'load-detail')); ?></td>
  <td>Loads messages from an MO file.</td>
  <td>CGettextMoFile</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'save-detail')); ?></td>
  <td>Saves messages to an MO file.</td>
  <td>CGettextMoFile</td>
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
<tr id="readByte">
  <td><?php echo CHtml::link('readByte()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'readByte-detail')); ?></td>
  <td>Reads one or several bytes.</td>
  <td>CGettextMoFile</td>
</tr>
<tr id="readInteger">
  <td><?php echo CHtml::link('readInteger()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'readInteger-detail')); ?></td>
  <td>Reads a 4-byte integer.</td>
  <td>CGettextMoFile</td>
</tr>
<tr id="readString">
  <td><?php echo CHtml::link('readString()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'readString-detail')); ?></td>
  <td>Reads a string.</td>
  <td>CGettextMoFile</td>
</tr>
<tr id="writeByte">
  <td><?php echo CHtml::link('writeByte()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'writeByte-detail')); ?></td>
  <td>Writes bytes.</td>
  <td>CGettextMoFile</td>
</tr>
<tr id="writeInteger">
  <td><?php echo CHtml::link('writeInteger()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'writeInteger-detail')); ?></td>
  <td>Writes a 4-byte integer.</td>
  <td>CGettextMoFile</td>
</tr>
<tr id="writeString">
  <td><?php echo CHtml::link('writeString()', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'writeString-detail')); ?></td>
  <td>Writes a string.</td>
  <td>CGettextMoFile</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="useBigEndian-detail">
useBigEndian<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public boolean <b>$useBigEndian</b>;</div>

<p>whether to use Big Endian when reading and writing an integer.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>(boolean $useBigEndian=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$useBigEndian</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to use Big Endian when reading and writing an integer.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L55">yii\i18n\gettext\CGettextMoFile.php#L55</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$useBigEndian</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useBigEndian</span><span style="color: #007700">=</span><span style="color: #0000BB">$useBigEndian</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Constructor.</p>


<div class="detailHeader" id="load-detail">
load()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>load</b>(string $file, string $context)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">file path</td>
</tr>
<tr>
  <td class="paramNameCol">$context</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">message context</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">message translations (source message => translated message)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L66">yii\i18n\gettext\CGettextMoFile.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">load</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$context</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">=@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;read&nbsp;file&nbsp;"{file}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!@</span><span style="color: #0000BB">flock</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">LOCK_SH</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;lock&nbsp;file&nbsp;"{file}"&nbsp;for&nbsp;reading.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$magic</span><span style="color: #007700">=</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">=</span><span style="color: #0000BB">unpack</span><span style="color: #007700">(</span><span style="color: #DD0000">'c'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$magic</span><span style="color: #007700">==-</span><span style="color: #0000BB">34</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useBigEndian</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$magic</span><span style="color: #007700">==-</span><span style="color: #0000BB">107</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useBigEndian</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Invalid&nbsp;MO&nbsp;file:&nbsp;{file}&nbsp;(magic:&nbsp;{magic}).'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #DD0000">'{magic}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$magic</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$revision</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">))!=</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Invalid&nbsp;MO&nbsp;file&nbsp;revision:&nbsp;{revision}.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{revision}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$revision</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$count</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sourceOffset</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$targetOffset</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sourceLengths</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sourceOffsets</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fseek</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$sourceOffset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$count</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sourceLengths</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sourceOffsets</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$targetLengths</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$targetOffsets</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fseek</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$targetOffset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$count</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$targetLengths</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$targetOffsets</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">$count</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readString</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$sourceLengths</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">],</span><span style="color: #0000BB">$sourceOffsets</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$context&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">)===</span><span style="color: #0000BB">$context</span><span style="color: #007700">)&nbsp;||&nbsp;(!</span><span style="color: #0000BB">$context&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pos&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readString</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$targetLengths</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">],</span><span style="color: #0000BB">$targetOffsets</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]=</span><span style="color: #0000BB">$message</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">flock</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">LOCK_UN</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$messages</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Loads messages from an MO file.</p>


<div class="detailHeader" id="readByte-detail">
readByte()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>readByte</b>(resource $fr, integer $n=1)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fr</td>
  <td class="paramTypeCol">resource</td>
  <td class="paramDescCol">file handle</td>
</tr>
<tr>
  <td class="paramNameCol">$n</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of bytes to read</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">bytes</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L209">yii\i18n\gettext\CGettextMoFile.php#L209</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">readByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">1</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$n</span><span style="color: #007700">&gt;</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Reads one or several bytes.</p>


<div class="detailHeader" id="readInteger-detail">
readInteger()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>readInteger</b>(resource $fr)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fr</td>
  <td class="paramTypeCol">resource</td>
  <td class="paramDescCol">file handle</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L232">yii\i18n\gettext\CGettextMoFile.php#L232</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">readInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">=</span><span style="color: #0000BB">unpack</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useBigEndian&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'N'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'V'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Reads a 4-byte integer.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('useBigEndian', array('/site/doc', 'view' => 'CGettextMoFile', '#' => 'useBigEndian')); ?></li>
</ul>
</div>

<div class="detailHeader" id="readString-detail">
readString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>readString</b>(resource $fr, integer $length, integer $offset=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fr</td>
  <td class="paramTypeCol">resource</td>
  <td class="paramDescCol">file handle</td>
</tr>
<tr>
  <td class="paramNameCol">$length</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">string length</td>
</tr>
<tr>
  <td class="paramNameCol">$offset</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">offset of the string in the file. If null, it reads from the current position.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L255">yii\i18n\gettext\CGettextMoFile.php#L255</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">readString</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$offset</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fseek</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">readByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fr</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Reads a string.</p>


<div class="detailHeader" id="save-detail">
save()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>save</b>(string $file, array $messages)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">file path</td>
</tr>
<tr>
  <td class="paramNameCol">$messages</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">message translations (message id => translated message).
Note if the message has a context, the message id must be prefixed with
the context with chr(4) as the separator.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L140">yii\i18n\gettext\CGettextMoFile.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">save</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$messages</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">=@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #DD0000">'wb'</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;write&nbsp;file&nbsp;"{file}".'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!@</span><span style="color: #0000BB">flock</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">LOCK_EX</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;lock&nbsp;file&nbsp;"{file}"&nbsp;for&nbsp;writing.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'{file}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$file</span><span style="color: #007700">)));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;magic<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useBigEndian</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'c*'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x95</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x04</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x12</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0xde</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'c*'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0xde</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x12</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x04</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0x95</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;revision<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;message&nbsp;count<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$n</span><span style="color: #007700">=</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$messages</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$n</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;offset&nbsp;of&nbsp;source&nbsp;message&nbsp;table<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">=</span><span style="color: #0000BB">28</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">+=(</span><span style="color: #0000BB">$n</span><span style="color: #007700">*</span><span style="color: #0000BB">8</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;hashtable&nbsp;size,&nbsp;omitted<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">+=(</span><span style="color: #0000BB">$n</span><span style="color: #007700">*</span><span style="color: #0000BB">8</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;length&nbsp;and&nbsp;offsets&nbsp;for&nbsp;source&nbsp;messagess<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$messages</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$len</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">+=</span><span style="color: #0000BB">$len</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;length&nbsp;and&nbsp;offsets&nbsp;for&nbsp;target&nbsp;messagess<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$messages&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">=</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$len</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$offset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$offset</span><span style="color: #007700">+=</span><span style="color: #0000BB">$len</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;source&nbsp;messages<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$messages</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeString</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$id</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;target&nbsp;messages<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(</span><span style="color: #0000BB">$messages&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$message</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeString</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">flock</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">LOCK_UN</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Saves messages to an MO file.</p>


<div class="detailHeader" id="writeByte-detail">
writeByte()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>writeByte</b>(resource $fw, string $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fw</td>
  <td class="paramTypeCol">resource</td>
  <td class="paramDescCol">file handle</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">how many bytes are written</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L221">yii\i18n\gettext\CGettextMoFile.php#L221</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">writeByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Writes bytes.</p>


<div class="detailHeader" id="writeInteger-detail">
writeInteger()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>writeInteger</b>(resource $fw, integer $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fw</td>
  <td class="paramTypeCol">resource</td>
  <td class="paramDescCol">file handle</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the data</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">how many bytes are written</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L243">yii\i18n\gettext\CGettextMoFile.php#L243</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">writeInteger</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">useBigEndian&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'N'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">'V'</span><span style="color: #007700">,&nbsp;(int)</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Writes a 4-byte integer.</p>


<div class="detailHeader" id="writeString-detail">
writeString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected integer <b>writeString</b>(resource $fw, string $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$fw</td>
  <td class="paramTypeCol">resource</td>
  <td class="paramDescCol">file handle</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the string</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">how many bytes are written</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\i18n\gettext\CGettextMoFile.php#L268">yii\i18n\gettext\CGettextMoFile.php#L268</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">writeString</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">writeByte</span><span style="color: #007700">(</span><span style="color: #0000BB">$fw</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">.</span><span style="color: #DD0000">"\0"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Writes a string.</p>


