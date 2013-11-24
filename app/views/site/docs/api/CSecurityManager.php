<?php
$this->pageTitle = $this->pageHeading = 'CSecurityManager';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CSecurityManager';
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
  <td><?php echo CHtml::link('system.base', array('/site/doc', '#' => 'system.base')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CSecurityManager &raquo;
<?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td><?php echo CHtml::link('IApplicationComponent', array('/site/doc', 'view' => 'IApplicationComponent')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php">yii\base\CSecurityManager.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CSecurityManager provides private keys, hashing and encryption functions.
<br/><br/>
CSecurityManager is used by Yii components and applications for security-related purpose.
For example, it is used in cookie validation feature to prevent cookie data
from being tampered.
<br/><br/>
CSecurityManager is mainly used to protect data from being tampered and viewed.
It can generate HMAC and encrypt the data. The private key used to generate HMAC
is set by <?php echo CHtml::link('ValidationKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setValidationKey')); ?>. The key used to encrypt data is
specified by <?php echo CHtml::link('EncryptionKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setEncryptionKey')); ?>. If the above keys are not
explicitly set, random keys will be generated and used.
<br/><br/>
To protected data with HMAC, call <?php echo CHtml::link('hashData()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashData')); ?>; and to check if the data
is tampered, call <?php echo CHtml::link('validateData()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validateData')); ?>, which will return the real data if
it is not tampered. The algorithm used to generated HMAC is specified by
<?php echo CHtml::link('validation', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validation')); ?>.
<br/><br/>
To encrypt and decrypt data, call <?php echo CHtml::link('encrypt()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'encrypt')); ?> and <?php echo CHtml::link('decrypt()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'decrypt')); ?>
respectively, which uses 3DES encryption algorithm.  Note, the PHP Mcrypt
extension must be installed and loaded.
<br/><br/>
CSecurityManager is a core application component that can be accessed via
<?php echo CHtml::link('CApplication::getSecurityManager()', array('/site/doc', 'view' => 'CApplication', '#' => 'getSecurityManager')); ?>.</div>
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
<tr id="cryptAlgorithm">
  <td><?php echo CHtml::link('cryptAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'cryptAlgorithm-detail')); ?></td>
  <td>mixed</td>
  <td>the name of the crypt algorithm to be used by <?php echo CHtml::link('encrypt', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'encrypt')); ?> and <?php echo CHtml::link('decrypt', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'decrypt')); ?>.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="encryptionKey">
  <td><?php echo CHtml::link('encryptionKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'encryptionKey-detail')); ?></td>
  <td>string</td>
  <td>the private key used to encrypt/decrypt data.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="hashAlgorithm">
  <td><?php echo CHtml::link('hashAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashAlgorithm-detail')); ?></td>
  <td>string</td>
  <td>the name of the hashing algorithm to be used by <?php echo CHtml::link('computeHMAC', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'computeHMAC')); ?>.</td>
  <td>CSecurityManager</td>
</tr>
<tr class="inherited" id="isInitialized">
  <td><?php echo CHtml::link('isInitialized', array('/site/doc', 'view' => 'CApplicationComponent', '#' => 'isInitialized-detail')); ?></td>
  <td>boolean</td>
  <td>Checks if this application component has been initialized.</td>
  <td><?php echo CHtml::link('CApplicationComponent', array('/site/doc', 'view' => 'CApplicationComponent')); ?></td>
</tr>
<tr id="validation">
  <td><?php echo CHtml::link('validation', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validation-detail')); ?></td>
  <td>string</td>
  <td>This method has been deprecated since version 1.1.3.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="validationKey">
  <td><?php echo CHtml::link('validationKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validationKey-detail')); ?></td>
  <td>string</td>
  <td>the private key used to generate HMAC.</td>
  <td>CSecurityManager</td>
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
<tr id="computeHMAC">
  <td><?php echo CHtml::link('computeHMAC()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'computeHMAC-detail')); ?></td>
  <td>Computes the HMAC for the data with <?php echo CHtml::link('validationKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getValidationKey')); ?>. This method has been made public</td>
  <td>CSecurityManager</td>
</tr>
<tr id="decrypt">
  <td><?php echo CHtml::link('decrypt()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'decrypt-detail')); ?></td>
  <td>Decrypts data</td>
  <td>CSecurityManager</td>
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
<tr id="encrypt">
  <td><?php echo CHtml::link('encrypt()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'encrypt-detail')); ?></td>
  <td>Encrypts data.</td>
  <td>CSecurityManager</td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="generatePseudoRandomBlock">
  <td><?php echo CHtml::link('generatePseudoRandomBlock()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'generatePseudoRandomBlock-detail')); ?></td>
  <td>Generate a pseudo random block of data using several sources. On some systems this may be a bit</td>
  <td>CSecurityManager</td>
</tr>
<tr id="generateRandomBytes">
  <td><?php echo CHtml::link('generateRandomBytes()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'generateRandomBytes-detail')); ?></td>
  <td>Generates a string of random bytes.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="generateRandomString">
  <td><?php echo CHtml::link('generateRandomString()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'generateRandomString-detail')); ?></td>
  <td>Generate a random ASCII string. Generates only [0-9a-zA-z_~] characters which are all</td>
  <td>CSecurityManager</td>
</tr>
<tr id="generateSessionRandomBlock">
  <td><?php echo CHtml::link('generateSessionRandomBlock()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'generateSessionRandomBlock-detail')); ?></td>
  <td>Get random bytes from the system entropy source via PHP session manager.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="getEncryptionKey">
  <td><?php echo CHtml::link('getEncryptionKey()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getEncryptionKey-detail')); ?></td>
  <td>Returns the private key used to encrypt/decrypt data.
If the key is not explicitly set, a random one is generated and returned.</td>
  <td>CSecurityManager</td>
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
<tr id="getValidation">
  <td><?php echo CHtml::link('getValidation()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getValidation-detail')); ?></td>
  <td>This method has been deprecated since version 1.1.3.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="getValidationKey">
  <td><?php echo CHtml::link('getValidationKey()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getValidationKey-detail')); ?></td>
  <td>Returns the private key used to generate HMAC.
If the key is not explicitly set, a random one is generated and returned.</td>
  <td>CSecurityManager</td>
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
<tr id="hashData">
  <td><?php echo CHtml::link('hashData()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashData-detail')); ?></td>
  <td>Prefixes data with an HMAC.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'init-detail')); ?></td>
  <td></td>
  <td>CSecurityManager</td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr id="setEncryptionKey">
  <td><?php echo CHtml::link('setEncryptionKey()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setEncryptionKey-detail')); ?></td>
  <td>Sets the key used to encrypt/decrypt data.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="setValidation">
  <td><?php echo CHtml::link('setValidation()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setValidation-detail')); ?></td>
  <td>This method has been deprecated since version 1.1.3.</td>
  <td>CSecurityManager</td>
</tr>
<tr id="setValidationKey">
  <td><?php echo CHtml::link('setValidationKey()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setValidationKey-detail')); ?></td>
  <td>Sets the key used to generate HMAC</td>
  <td>CSecurityManager</td>
</tr>
<tr id="validateData">
  <td><?php echo CHtml::link('validateData()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validateData-detail')); ?></td>
  <td>Validates if data is tampered.</td>
  <td>CSecurityManager</td>
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
<tr id="generateRandomKey">
  <td><?php echo CHtml::link('generateRandomKey()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'generateRandomKey-detail')); ?></td>
  <td></td>
  <td>CSecurityManager</td>
</tr>
<tr id="openCryptModule">
  <td><?php echo CHtml::link('openCryptModule()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'openCryptModule-detail')); ?></td>
  <td>Opens the mcrypt module with the configuration specified in <?php echo CHtml::link('cryptAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'cryptAlgorithm')); ?>.</td>
  <td>CSecurityManager</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="cryptAlgorithm-detail">
cryptAlgorithm<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public mixed <b>$cryptAlgorithm</b>;</div>

<p>the name of the crypt algorithm to be used by <?php echo CHtml::link('encrypt', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'encrypt')); ?> and <?php echo CHtml::link('decrypt', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'decrypt')); ?>.
This will be passed as the first parameter to <a href="http://php.net/manual/en/function.mcrypt-module-open.php">mcrypt_module_open</a>.
<br/><br/>
This property can also be configured as an array. In this case, the array elements will be passed in order
as parameters to mcrypt_module_open. For example, <code>array('rijndael-256', '', 'ofb', '')</code>.
<br/><br/>
Defaults to 'des', meaning using DES crypt algorithm.</p>


<div class="detailHeader" id="encryptionKey-detail">
encryptionKey<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getEncryptionKey</b>', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getEncryptionKey')); ?>()<br/>public void <?php echo CHtml::link('<b>setEncryptionKey</b>', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setEncryptionKey')); ?>(string $value)</div>

<p>the private key used to encrypt/decrypt data.
If the key is not explicitly set, a random one is generated and returned.</p>


<div class="detailHeader" id="hashAlgorithm-detail">
hashAlgorithm<span class="detailHeaderTag">
property
 (available since v1.1.3)
</span>
</div>

<div class="signature">
public string <b>$hashAlgorithm</b>;</div>

<p>the name of the hashing algorithm to be used by <?php echo CHtml::link('computeHMAC', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'computeHMAC')); ?>.
See <a href="http://php.net/manual/en/function.hash-algos.php">hash-algos</a> for the list of possible
hash algorithms. Note that if you are using PHP 5.1.1 or below, you can only use 'sha1' or 'md5'.
<br/><br/>
Defaults to 'sha1', meaning using SHA1 hash algorithm.</p>


<div class="detailHeader" id="validation-detail">
validation<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getValidation</b>', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getValidation')); ?>()<br/>public void <?php echo CHtml::link('<b>setValidation</b>', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setValidation')); ?>(string $value)</div>

<p>This method has been deprecated since version 1.1.3.
Please use <?php echo CHtml::link('hashAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashAlgorithm')); ?> instead.</p>


<div class="detailHeader" id="validationKey-detail">
validationKey<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getValidationKey</b>', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getValidationKey')); ?>()<br/>public void <?php echo CHtml::link('<b>setValidationKey</b>', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'setValidationKey')); ?>(string $value)</div>

<p>the private key used to generate HMAC.
If the key is not explicitly set, a random one is generated and returned.</p>


<h2>Method Details</h2>

<div class="detailHeader" id="computeHMAC-detail">
computeHMAC()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>computeHMAC</b>(string $data, string|null $key=NULL, string|null $hashAlgorithm=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data to be generated HMAC.</td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string|null</td>
  <td class="paramDescCol">the private key to be used for generating HMAC. Defaults to null, meaning using
<?php echo CHtml::link('validationKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validationKey')); ?> value.</td>
</tr>
<tr>
  <td class="paramNameCol">$hashAlgorithm</td>
  <td class="paramTypeCol">string|null</td>
  <td class="paramDescCol">the name of the hashing algorithm to be used.
See <a href="http://php.net/manual/en/function.hash-algos.php">hash-algos</a> for the list of possible
hash algorithms. Note that if you are using PHP 5.1.1 or below, you can only use 'sha1' or 'md5'.
Defaults to null, meaning using <?php echo CHtml::link('hashAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashAlgorithm')); ?> value.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the HMAC for the data.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L298">yii\base\CSecurityManager.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">computeHMAC</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashAlgorithm</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$key</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValidationKey</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$hashAlgorithm</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hashAlgorithm</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hashAlgorithm</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'hash_hmac'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">hash_hmac</span><span style="color: #007700">(</span><span style="color: #0000BB">$hashAlgorithm</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">0</span><span style="color: #007700">===</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$hashAlgorithm</span><span style="color: #007700">,</span><span style="color: #DD0000">'sha1'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pack</span><span style="color: #007700">=</span><span style="color: #DD0000">'H40'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$func</span><span style="color: #007700">=</span><span style="color: #DD0000">'sha1'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">0</span><span style="color: #007700">===</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$hashAlgorithm</span><span style="color: #007700">,</span><span style="color: #DD0000">'md5'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pack</span><span style="color: #007700">=</span><span style="color: #DD0000">'H32'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$func</span><span style="color: #007700">=</span><span style="color: #DD0000">'md5'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Only&nbsp;SHA1&nbsp;and&nbsp;MD5&nbsp;hashing&nbsp;algorithms&nbsp;are&nbsp;supported&nbsp;when&nbsp;using&nbsp;PHP&nbsp;5.1.1&nbsp;or&nbsp;below.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&gt;</span><span style="color: #0000BB">64</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #0000BB">$pack</span><span style="color: #007700">,</span><span style="color: #0000BB">$func</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">64</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">str_pad</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">64</span><span style="color: #007700">,</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">64</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$func</span><span style="color: #007700">((</span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">0x5C</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">)&nbsp;^&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #0000BB">$pack</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$func</span><span style="color: #007700">((</span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #0000BB">chr</span><span style="color: #007700">(</span><span style="color: #0000BB">0x36</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">64</span><span style="color: #007700">)&nbsp;^&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)));<br />}</span>
</span>
</code></div>
</div>
<p>Computes the HMAC for the data with <?php echo CHtml::link('validationKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getValidationKey')); ?>. This method has been made public
since 1.1.14.</p>


<div class="detailHeader" id="decrypt-detail">
decrypt()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>decrypt</b>(string $data, string $key=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data to be decrypted.</td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the decryption key. This defaults to null, meaning using <?php echo CHtml::link('EncryptionKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getEncryptionKey')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the decrypted data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L216">yii\base\CSecurityManager.php#L216</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">decrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$module</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">openCryptModule</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEncryptionKey</span><span style="color: #007700">())&nbsp;:&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">mcrypt_enc_get_key_size</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ivSize</span><span style="color: #007700">=</span><span style="color: #0000BB">mcrypt_enc_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$ivSize</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mcrypt_generic_init</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$iv</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$decrypted</span><span style="color: #007700">=</span><span style="color: #0000BB">mdecrypt_generic</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$ivSize</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mcrypt_generic_deinit</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mcrypt_module_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">$decrypted</span><span style="color: #007700">,</span><span style="color: #DD0000">"\0"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Decrypts data</p>


<div class="detailHeader" id="encrypt-detail">
encrypt()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>encrypt</b>(string $data, string $key=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data to be encrypted.</td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the decryption key. This defaults to null, meaning using <?php echo CHtml::link('EncryptionKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'getEncryptionKey')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the encrypted data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L196">yii\base\CSecurityManager.php#L196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">encrypt</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$module</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">openCryptModule</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">===</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getEncryptionKey</span><span style="color: #007700">())&nbsp;:&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">mcrypt_enc_get_key_size</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">srand</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$iv</span><span style="color: #007700">=</span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">mcrypt_enc_get_iv_size</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">MCRYPT_RAND</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mcrypt_generic_init</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$iv</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$encrypted</span><span style="color: #007700">=</span><span style="color: #0000BB">$iv</span><span style="color: #007700">.</span><span style="color: #0000BB">mcrypt_generic</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mcrypt_generic_deinit</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mcrypt_module_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$module</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$encrypted</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Encrypts data.</p>


<div class="detailHeader" id="generatePseudoRandomBlock-detail">
generatePseudoRandomBlock()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>generatePseudoRandomBlock</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">of 64 pseudo random bytes.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L411">yii\base\CSecurityManager.php#L411</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">generatePseudoRandomBlock</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'openssl_random_pseudo_bytes'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">=</span><span style="color: #0000BB">openssl_random_pseudo_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">512</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">512</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">512</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;for(</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">32</span><span style="color: #007700">;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">.=</span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'S'</span><span style="color: #007700">,</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0xffff</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;On&nbsp;UNIX&nbsp;and&nbsp;UNIX-like&nbsp;operating&nbsp;systems&nbsp;the&nbsp;numerical&nbsp;values&nbsp;in&nbsp;`ps`,&nbsp;`uptime`&nbsp;and&nbsp;`iostat`<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;ought&nbsp;to&nbsp;be&nbsp;fairly&nbsp;unpredictable.&nbsp;Gather&nbsp;the&nbsp;non-zero&nbsp;digits&nbsp;from&nbsp;those.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">foreach(array(</span><span style="color: #DD0000">'ps'</span><span style="color: #007700">,</span><span style="color: #DD0000">'uptime'</span><span style="color: #007700">,</span><span style="color: #DD0000">'iostat'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$command</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$command</span><span style="color: #007700">,</span><span style="color: #0000BB">$commandResult</span><span style="color: #007700">,</span><span style="color: #0000BB">$retVal</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$commandResult</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!empty(</span><span style="color: #0000BB">$commandResult</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$retVal</span><span style="color: #007700">==</span><span style="color: #0000BB">0</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">.=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/[^1-9]/'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$commandResult</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Gather&nbsp;the&nbsp;current&nbsp;time's&nbsp;microsecond&nbsp;part.&nbsp;Note:&nbsp;this&nbsp;is&nbsp;only&nbsp;a&nbsp;source&nbsp;of&nbsp;entropy&nbsp;on<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;the&nbsp;first&nbsp;call!&nbsp;If&nbsp;multiple&nbsp;calls&nbsp;are&nbsp;made,&nbsp;the&nbsp;entropy&nbsp;is&nbsp;only&nbsp;as&nbsp;much&nbsp;as&nbsp;the<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;randomness&nbsp;in&nbsp;the&nbsp;time&nbsp;between&nbsp;calls.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">microtime</span><span style="color: #007700">(),</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">6</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Concatenate&nbsp;everything&nbsp;gathered,&nbsp;mix&nbsp;it&nbsp;with&nbsp;sha512.&nbsp;hash()&nbsp;is&nbsp;part&nbsp;of&nbsp;PHP&nbsp;core&nbsp;and<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;enabled&nbsp;by&nbsp;default&nbsp;but&nbsp;it&nbsp;can&nbsp;be&nbsp;disabled&nbsp;at&nbsp;compile&nbsp;time&nbsp;but&nbsp;we&nbsp;ignore&nbsp;that&nbsp;possibility&nbsp;here.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'sha512'</span><span style="color: #007700">,</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generate a pseudo random block of data using several sources. On some systems this may be a bit
better than PHP's mt_rand built-in function, which is not really random.</p>


<div class="detailHeader" id="generateRandomBytes-detail">
generateRandomBytes()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean|string <b>generateRandomBytes</b>(integer $length, boolean $cryptographicallyStrong=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$length</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">number of random bytes to be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$cryptographicallyStrong</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to fail if a cryptographically strong
result cannot be generated. The method attempts to read from a cryptographically strong
pseudorandom number generator (CS-PRNG), see
Wikipedia.
However, in some runtime environments, PHP has no access to a CS-PRNG, in which case
the method returns false if $cryptographicallyStrong is true. When $cryptographicallyStrong is false,
the method always returns a pseudorandom result but may fall back to using <?php echo CHtml::link('generatePseudoRandomBlock', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'generatePseudoRandomBlock')); ?>.
This method does not guarantee that entropy, from sources external to the CS-PRNG, was mixed into
the CS-PRNG state between each successive call. The caller can therefore expect non-blocking
behavior, unlike, for example, reading from /dev/random on Linux, see
<a href="http://eprint.iacr.org/2006/086.pdf">Gutterman et al 2006</a>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean|string</td>
  <td class="paramDescCol">generated random binary string or false on failure.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L362">yii\base\CSecurityManager.php#L362</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">generateRandomBytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$length</span><span style="color: #007700">,</span><span style="color: #0000BB">$cryptographicallyStrong</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'openssl_random_pseudo_bytes'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">=</span><span style="color: #0000BB">openssl_random_pseudo_bytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$length</span><span style="color: #007700">,</span><span style="color: #0000BB">$strong</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">$length&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$strong&nbsp;</span><span style="color: #007700">||&nbsp;!</span><span style="color: #0000BB">$cryptographicallyStrong</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">function_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'mcrypt_create_iv'</span><span style="color: #007700">)&nbsp;&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">=</span><span style="color: #0000BB">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #0000BB">$length</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_DEV_URANDOM</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">$length</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$file</span><span style="color: #007700">=@</span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'/dev/urandom'</span><span style="color: #007700">,</span><span style="color: #DD0000">'rb'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">=@</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">$length</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">$length&nbsp;</span><span style="color: #007700">&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(</span><span style="color: #0000BB">$byte</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateSessionRandomBlock</span><span style="color: #007700">())!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++</span><span style="color: #0000BB">$i</span><span style="color: #007700">&lt;</span><span style="color: #0000BB">3</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">.=</span><span style="color: #0000BB">$byte</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">$length</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$cryptographicallyStrong</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;while(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)&lt;</span><span style="color: #0000BB">$length</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">.=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generatePseudoRandomBlock</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a string of random bytes.</p>


<div class="detailHeader" id="generateRandomKey-detail">
generateRandomKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>generateRandomKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a randomly generated private key.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L86">yii\base\CSecurityManager.php#L86</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">generateRandomKey</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateRandomString</span><span style="color: #007700">(</span><span style="color: #0000BB">32</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="generateRandomString-detail">
generateRandomString()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string|boolean <b>generateRandomString</b>(integer $length, boolean $cryptographicallyStrong=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$length</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">length of the generated string in characters.</td>
</tr>
<tr>
  <td class="paramNameCol">$cryptographicallyStrong</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">set this to require cryptographically strong randomness.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string|boolean</td>
  <td class="paramDescCol">random string or false in case it cannot be generated.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L338">yii\base\CSecurityManager.php#L338</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">generateRandomString</span><span style="color: #007700">(</span><span style="color: #0000BB">$length</span><span style="color: #007700">,</span><span style="color: #0000BB">$cryptographicallyStrong</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$randomBytes</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateRandomBytes</span><span style="color: #007700">(</span><span style="color: #0000BB">$length</span><span style="color: #007700">+</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">$cryptographicallyStrong</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$randomBytes</span><span style="color: #007700">),</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$length</span><span style="color: #007700">),array(</span><span style="color: #DD0000">'+'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,</span><span style="color: #DD0000">'/'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'~'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generate a random ASCII string. Generates only [0-9a-zA-z_~] characters which are all
transparent in raw URL encoding.</p>


<div class="detailHeader" id="generateSessionRandomBlock-detail">
generateSessionRandomBlock()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean|string <b>generateSessionRandomBlock</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean|string</td>
  <td class="paramDescCol">20-byte random binary string or false on error.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L448">yii\base\CSecurityManager.php#L448</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">generateSessionRandomBlock</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ini_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.entropy_length'</span><span style="color: #007700">,</span><span style="color: #0000BB">20</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'session.entropy_length'</span><span style="color: #007700">)!=</span><span style="color: #0000BB">20</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;These&nbsp;calls&nbsp;are&nbsp;(supposed&nbsp;to&nbsp;be,&nbsp;according&nbsp;to&nbsp;PHP&nbsp;manual)&nbsp;safe&nbsp;even&nbsp;if<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;there&nbsp;is&nbsp;already&nbsp;an&nbsp;active&nbsp;session&nbsp;for&nbsp;the&nbsp;calling&nbsp;script.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">@</span><span style="color: #0000BB">session_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;@</span><span style="color: #0000BB">session_regenerate_id</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">=</span><span style="color: #0000BB">session_id</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;$bytes&nbsp;has&nbsp;20&nbsp;bytes&nbsp;of&nbsp;entropy&nbsp;but&nbsp;the&nbsp;session&nbsp;manager&nbsp;converts&nbsp;the&nbsp;binary<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;random&nbsp;bytes&nbsp;into&nbsp;something&nbsp;readable.&nbsp;We&nbsp;have&nbsp;to&nbsp;convert&nbsp;that&nbsp;back.<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;SHA-1&nbsp;should&nbsp;do&nbsp;it&nbsp;without&nbsp;losing&nbsp;entropy.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">sha1</span><span style="color: #007700">(</span><span style="color: #0000BB">$bytes</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get random bytes from the system entropy source via PHP session manager.</p>


<div class="detailHeader" id="getEncryptionKey-detail">
getEncryptionKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getEncryptionKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the private key used to encrypt/decrypt data.
If the key is not explicitly set, a random one is generated and returned.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L134">yii\base\CSecurityManager.php#L134</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getEncryptionKey</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_encryptionKey</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_encryptionKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">STATE_ENCRYPTION_KEY</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setEncryptionKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateRandomString</span><span style="color: #007700">(</span><span style="color: #0000BB">32</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateRandomString</span><span style="color: #007700">(</span><span style="color: #0000BB">32</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'CSecurityManager::generateRandomString()&nbsp;cannot&nbsp;generate&nbsp;random&nbsp;string&nbsp;in&nbsp;the&nbsp;current&nbsp;environment.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setEncryptionKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">STATE_ENCRYPTION_KEY</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_encryptionKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getValidation-detail">
getValidation()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getValidation</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">-</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L173">yii\base\CSecurityManager.php#L173</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getValidation</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hashAlgorithm</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method has been deprecated since version 1.1.3.
Please use <?php echo CHtml::link('hashAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashAlgorithm')); ?> instead.</p>


<div class="detailHeader" id="getValidationKey-detail">
getValidationKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getValidationKey</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the private key used to generate HMAC.
If the key is not explicitly set, a random one is generated and returned.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L96">yii\base\CSecurityManager.php#L96</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getValidationKey</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_validationKey</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_validationKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">STATE_VALIDATION_KEY</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValidationKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateRandomString</span><span style="color: #007700">(</span><span style="color: #0000BB">32</span><span style="color: #007700">,</span><span style="color: #0000BB">true</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">generateRandomString</span><span style="color: #007700">(</span><span style="color: #0000BB">32</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'CSecurityManager::generateRandomString()&nbsp;cannot&nbsp;generate&nbsp;random&nbsp;string&nbsp;in&nbsp;the&nbsp;current&nbsp;environment.'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setValidationKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setGlobalState</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">STATE_VALIDATION_KEY</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_validationKey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="hashData-detail">
hashData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>hashData</b>(string $data, string $key=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data to be hashed.</td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the private key to be used for generating HMAC. Defaults to null, meaning using <?php echo CHtml::link('validationKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validationKey')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data prefixed with HMAC</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L259">yii\base\CSecurityManager.php#L259</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">hashData</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">computeHMAC</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">).</span><span style="color: #0000BB">$data</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Prefixes data with an HMAC.</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L76">yii\base\CSecurityManager.php#L76</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">init</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">init</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_mbstring</span><span style="color: #007700">=</span><span style="color: #0000BB">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'mbstring'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="openCryptModule-detail">
openCryptModule()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected resource <b>openCryptModule</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">resource</td>
  <td class="paramDescCol">the mycrypt module handle.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L235">yii\base\CSecurityManager.php#L235</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">openCryptModule</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">extension_loaded</span><span style="color: #007700">(</span><span style="color: #DD0000">'mcrypt'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cryptAlgorithm</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$module</span><span style="color: #007700">=@</span><span style="color: #0000BB">call_user_func_array</span><span style="color: #007700">(</span><span style="color: #DD0000">'mcrypt_module_open'</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cryptAlgorithm</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$module</span><span style="color: #007700">=@</span><span style="color: #0000BB">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cryptAlgorithm</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">MCRYPT_MODE_CBC</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$module</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Failed&nbsp;to&nbsp;initialize&nbsp;the&nbsp;mcrypt&nbsp;module.'</span><span style="color: #007700">));<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$module</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CSecurityManager&nbsp;requires&nbsp;PHP&nbsp;mcrypt&nbsp;extension&nbsp;to&nbsp;be&nbsp;loaded&nbsp;in&nbsp;order&nbsp;to&nbsp;use&nbsp;data&nbsp;encryption&nbsp;feature.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Opens the mcrypt module with the configuration specified in <?php echo CHtml::link('cryptAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'cryptAlgorithm')); ?>.</p>


<div class="detailHeader" id="setEncryptionKey-detail">
setEncryptionKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setEncryptionKey</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key used to encrypt/decrypt data.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L159">yii\base\CSecurityManager.php#L159</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setEncryptionKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_encryptionKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CSecurityManager.encryptionKey&nbsp;cannot&nbsp;be&nbsp;empty.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setValidation-detail">
setValidation()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setValidation</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">-</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L184">yii\base\CSecurityManager.php#L184</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setValidation</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hashAlgorithm</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>This method has been deprecated since version 1.1.3.
Please use <?php echo CHtml::link('hashAlgorithm', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashAlgorithm')); ?> instead.</p>


<div class="detailHeader" id="setValidationKey-detail">
setValidationKey()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setValidationKey</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the key used to generate HMAC</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L121">yii\base\CSecurityManager.php#L121</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setValidationKey</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_validationKey</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'CSecurityManager.validationKey&nbsp;cannot&nbsp;be&nbsp;empty.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="validateData-detail">
validateData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>validateData</b>(string $data, string $key=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data to be validated. The data must be previously
generated using <?php echo CHtml::link('hashData()', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'hashData')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the private key to be used for generating HMAC. Defaults to null, meaning using <?php echo CHtml::link('validationKey', array('/site/doc', 'view' => 'CSecurityManager', '#' => 'validationKey')); ?>.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the real data with HMAC stripped off. False if the data
is tampered.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\base\CSecurityManager.php#L272">yii\base\CSecurityManager.php#L272</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">validateData</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$len</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">computeHMAC</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)&gt;=</span><span style="color: #0000BB">$len</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hmac</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$len</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data2</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$len</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hmac</span><span style="color: #007700">===</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">computeHMAC</span><span style="color: #007700">(</span><span style="color: #0000BB">$data2</span><span style="color: #007700">,</span><span style="color: #0000BB">$key</span><span style="color: #007700">)?</span><span style="color: #0000BB">$data2</span><span style="color: #007700">:</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Validates if data is tampered.</p>


