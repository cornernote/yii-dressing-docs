<?php
$this->pageTitle = $this->pageHeading = 'CHtml';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CHtml';
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
  <td><?php echo CHtml::link('system.web.helpers', array('/site/doc', '#' => 'system.web.helpers')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CHtml</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('TbHtml', array('/site/doc', 'view' => 'TbHtml')); ?></td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php">yii\web\helpers\CHtml.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CHtml is a static class that provides a collection of helper methods for creating HTML views.</div>
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
<tr id="afterRequiredLabel">
  <td><?php echo CHtml::link('afterRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'afterRequiredLabel-detail')); ?></td>
  <td>string</td>
  <td>the HTML code to be appended to the required label.</td>
  <td>CHtml</td>
</tr>
<tr id="beforeRequiredLabel">
  <td><?php echo CHtml::link('beforeRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'beforeRequiredLabel-detail')); ?></td>
  <td>string</td>
  <td>the HTML code to be prepended to the required label.</td>
  <td>CHtml</td>
</tr>
<tr id="closeSingleTags">
  <td><?php echo CHtml::link('closeSingleTags', array('/site/doc', 'view' => 'CHtml', '#' => 'closeSingleTags-detail')); ?></td>
  <td>boolean</td>
  <td>whether to close single tags.</td>
  <td>CHtml</td>
</tr>
<tr id="count">
  <td><?php echo CHtml::link('count', array('/site/doc', 'view' => 'CHtml', '#' => 'count-detail')); ?></td>
  <td>integer</td>
  <td>the counter for generating automatic input field names.</td>
  <td>CHtml</td>
</tr>
<tr id="errorContainerTag">
  <td><?php echo CHtml::link('errorContainerTag', array('/site/doc', 'view' => 'CHtml', '#' => 'errorContainerTag-detail')); ?></td>
  <td>string</td>
  <td>the tag name for the error container tag.</td>
  <td>CHtml</td>
</tr>
<tr id="errorCss">
  <td><?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for highlighting error inputs.</td>
  <td>CHtml</td>
</tr>
<tr id="errorMessageCss">
  <td><?php echo CHtml::link('errorMessageCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorMessageCss-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for displaying error messages (see <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CHtml', '#' => 'error')); ?>).</td>
  <td>CHtml</td>
</tr>
<tr id="errorSummaryCss">
  <td><?php echo CHtml::link('errorSummaryCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummaryCss-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for displaying error summaries (see <?php echo CHtml::link('errorSummary', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummary')); ?>).</td>
  <td>CHtml</td>
</tr>
<tr id="liveEvents">
  <td><?php echo CHtml::link('liveEvents', array('/site/doc', 'view' => 'CHtml', '#' => 'liveEvents-detail')); ?></td>
  <td></td>
  <td>Sets the default style for attaching jQuery event handlers.</td>
  <td>CHtml</td>
</tr>
<tr id="renderSpecialAttributesValue">
  <td><?php echo CHtml::link('renderSpecialAttributesValue', array('/site/doc', 'view' => 'CHtml', '#' => 'renderSpecialAttributesValue-detail')); ?></td>
  <td>boolean</td>
  <td>whether to render special attributes value.</td>
  <td>CHtml</td>
</tr>
<tr id="requiredCss">
  <td><?php echo CHtml::link('requiredCss', array('/site/doc', 'view' => 'CHtml', '#' => 'requiredCss-detail')); ?></td>
  <td>string</td>
  <td>the CSS class for required labels.</td>
  <td>CHtml</td>
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
<tr id="activeCheckBox">
  <td><?php echo CHtml::link('activeCheckBox()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBox-detail')); ?></td>
  <td>Generates a check box for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeCheckBoxList">
  <td><?php echo CHtml::link('activeCheckBoxList()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeCheckBoxList-detail')); ?></td>
  <td>Generates a check box list for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeDateField">
  <td><?php echo CHtml::link('activeDateField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDateField-detail')); ?></td>
  <td>Generates a date field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeDropDownList">
  <td><?php echo CHtml::link('activeDropDownList()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDropDownList-detail')); ?></td>
  <td>Generates a drop down list for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeEmailField">
  <td><?php echo CHtml::link('activeEmailField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeEmailField-detail')); ?></td>
  <td>Generates an email field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeFileField">
  <td><?php echo CHtml::link('activeFileField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeFileField-detail')); ?></td>
  <td>Generates a file input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeHiddenField">
  <td><?php echo CHtml::link('activeHiddenField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeHiddenField-detail')); ?></td>
  <td>Generates a hidden input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeId">
  <td><?php echo CHtml::link('activeId()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeId-detail')); ?></td>
  <td>Generates input field ID for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeLabel">
  <td><?php echo CHtml::link('activeLabel()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeLabel-detail')); ?></td>
  <td>Generates a label tag for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeLabelEx">
  <td><?php echo CHtml::link('activeLabelEx()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeLabelEx-detail')); ?></td>
  <td>Generates a label tag for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeListBox">
  <td><?php echo CHtml::link('activeListBox()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeListBox-detail')); ?></td>
  <td>Generates a list box for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeName">
  <td><?php echo CHtml::link('activeName()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeName-detail')); ?></td>
  <td>Generates input field name for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeNumberField">
  <td><?php echo CHtml::link('activeNumberField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeNumberField-detail')); ?></td>
  <td>Generates a number field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activePasswordField">
  <td><?php echo CHtml::link('activePasswordField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activePasswordField-detail')); ?></td>
  <td>Generates a password field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeRadioButton">
  <td><?php echo CHtml::link('activeRadioButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButton-detail')); ?></td>
  <td>Generates a radio button for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeRadioButtonList">
  <td><?php echo CHtml::link('activeRadioButtonList()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRadioButtonList-detail')); ?></td>
  <td>Generates a radio button list for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeRangeField">
  <td><?php echo CHtml::link('activeRangeField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeRangeField-detail')); ?></td>
  <td>Generates a range field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeSearchField">
  <td><?php echo CHtml::link('activeSearchField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeSearchField-detail')); ?></td>
  <td>Generates a search field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeTelField">
  <td><?php echo CHtml::link('activeTelField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTelField-detail')); ?></td>
  <td>Generates a telephone field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeTextArea">
  <td><?php echo CHtml::link('activeTextArea()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextArea-detail')); ?></td>
  <td>Generates a text area input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeTextField">
  <td><?php echo CHtml::link('activeTextField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTextField-detail')); ?></td>
  <td>Generates a text field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeTimeField">
  <td><?php echo CHtml::link('activeTimeField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeTimeField-detail')); ?></td>
  <td>Generates a time field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="activeUrlField">
  <td><?php echo CHtml::link('activeUrlField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeUrlField-detail')); ?></td>
  <td>Generates a url field input for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="ajax">
  <td><?php echo CHtml::link('ajax()', array('/site/doc', 'view' => 'CHtml', '#' => 'ajax-detail')); ?></td>
  <td>Generates the JavaScript that initiates an AJAX request.</td>
  <td>CHtml</td>
</tr>
<tr id="ajaxButton">
  <td><?php echo CHtml::link('ajaxButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'ajaxButton-detail')); ?></td>
  <td>Generates a push button that can initiate AJAX requests.</td>
  <td>CHtml</td>
</tr>
<tr id="ajaxLink">
  <td><?php echo CHtml::link('ajaxLink()', array('/site/doc', 'view' => 'CHtml', '#' => 'ajaxLink-detail')); ?></td>
  <td>Generates a link that can initiate AJAX requests.</td>
  <td>CHtml</td>
</tr>
<tr id="ajaxSubmitButton">
  <td><?php echo CHtml::link('ajaxSubmitButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'ajaxSubmitButton-detail')); ?></td>
  <td>Generates a push button that can submit the current form in POST method.</td>
  <td>CHtml</td>
</tr>
<tr id="asset">
  <td><?php echo CHtml::link('asset()', array('/site/doc', 'view' => 'CHtml', '#' => 'asset-detail')); ?></td>
  <td>Generates the URL for the published assets.</td>
  <td>CHtml</td>
</tr>
<tr id="beginForm">
  <td><?php echo CHtml::link('beginForm()', array('/site/doc', 'view' => 'CHtml', '#' => 'beginForm-detail')); ?></td>
  <td>Generates an opening form tag.</td>
  <td>CHtml</td>
</tr>
<tr id="button">
  <td><?php echo CHtml::link('button()', array('/site/doc', 'view' => 'CHtml', '#' => 'button-detail')); ?></td>
  <td>Generates a button.</td>
  <td>CHtml</td>
</tr>
<tr id="cdata">
  <td><?php echo CHtml::link('cdata()', array('/site/doc', 'view' => 'CHtml', '#' => 'cdata-detail')); ?></td>
  <td>Encloses the given string within a CDATA tag.</td>
  <td>CHtml</td>
</tr>
<tr id="checkBox">
  <td><?php echo CHtml::link('checkBox()', array('/site/doc', 'view' => 'CHtml', '#' => 'checkBox-detail')); ?></td>
  <td>Generates a check box.</td>
  <td>CHtml</td>
</tr>
<tr id="checkBoxList">
  <td><?php echo CHtml::link('checkBoxList()', array('/site/doc', 'view' => 'CHtml', '#' => 'checkBoxList-detail')); ?></td>
  <td>Generates a check box list.</td>
  <td>CHtml</td>
</tr>
<tr id="closeTag">
  <td><?php echo CHtml::link('closeTag()', array('/site/doc', 'view' => 'CHtml', '#' => 'closeTag-detail')); ?></td>
  <td>Generates a close HTML element.</td>
  <td>CHtml</td>
</tr>
<tr id="css">
  <td><?php echo CHtml::link('css()', array('/site/doc', 'view' => 'CHtml', '#' => 'css-detail')); ?></td>
  <td>Encloses the given CSS content with a CSS tag.</td>
  <td>CHtml</td>
</tr>
<tr id="cssFile">
  <td><?php echo CHtml::link('cssFile()', array('/site/doc', 'view' => 'CHtml', '#' => 'cssFile-detail')); ?></td>
  <td>Links to the specified CSS file.</td>
  <td>CHtml</td>
</tr>
<tr id="dateField">
  <td><?php echo CHtml::link('dateField()', array('/site/doc', 'view' => 'CHtml', '#' => 'dateField-detail')); ?></td>
  <td>Generates a date field input.</td>
  <td>CHtml</td>
</tr>
<tr id="decode">
  <td><?php echo CHtml::link('decode()', array('/site/doc', 'view' => 'CHtml', '#' => 'decode-detail')); ?></td>
  <td>Decodes special HTML entities back to the corresponding characters.</td>
  <td>CHtml</td>
</tr>
<tr id="dropDownList">
  <td><?php echo CHtml::link('dropDownList()', array('/site/doc', 'view' => 'CHtml', '#' => 'dropDownList-detail')); ?></td>
  <td>Generates a drop down list.</td>
  <td>CHtml</td>
</tr>
<tr id="emailField">
  <td><?php echo CHtml::link('emailField()', array('/site/doc', 'view' => 'CHtml', '#' => 'emailField-detail')); ?></td>
  <td>Generates an email field input.</td>
  <td>CHtml</td>
</tr>
<tr id="encode">
  <td><?php echo CHtml::link('encode()', array('/site/doc', 'view' => 'CHtml', '#' => 'encode-detail')); ?></td>
  <td>Encodes special characters into HTML entities.</td>
  <td>CHtml</td>
</tr>
<tr id="encodeArray">
  <td><?php echo CHtml::link('encodeArray()', array('/site/doc', 'view' => 'CHtml', '#' => 'encodeArray-detail')); ?></td>
  <td>Encodes special characters in an array of strings into HTML entities.</td>
  <td>CHtml</td>
</tr>
<tr id="endForm">
  <td><?php echo CHtml::link('endForm()', array('/site/doc', 'view' => 'CHtml', '#' => 'endForm-detail')); ?></td>
  <td>Generates a closing form tag.</td>
  <td>CHtml</td>
</tr>
<tr id="error">
  <td><?php echo CHtml::link('error()', array('/site/doc', 'view' => 'CHtml', '#' => 'error-detail')); ?></td>
  <td>Displays the first validation error for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="errorSummary">
  <td><?php echo CHtml::link('errorSummary()', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummary-detail')); ?></td>
  <td>Displays a summary of validation errors for one or several models.</td>
  <td>CHtml</td>
</tr>
<tr id="fileField">
  <td><?php echo CHtml::link('fileField()', array('/site/doc', 'view' => 'CHtml', '#' => 'fileField-detail')); ?></td>
  <td>Generates a file input.</td>
  <td>CHtml</td>
</tr>
<tr id="form">
  <td><?php echo CHtml::link('form()', array('/site/doc', 'view' => 'CHtml', '#' => 'form-detail')); ?></td>
  <td>Generates an opening form tag.</td>
  <td>CHtml</td>
</tr>
<tr id="getIdByName">
  <td><?php echo CHtml::link('getIdByName()', array('/site/doc', 'view' => 'CHtml', '#' => 'getIdByName-detail')); ?></td>
  <td>Generates a valid HTML ID based on name.</td>
  <td>CHtml</td>
</tr>
<tr id="hiddenField">
  <td><?php echo CHtml::link('hiddenField()', array('/site/doc', 'view' => 'CHtml', '#' => 'hiddenField-detail')); ?></td>
  <td>Generates a hidden input.</td>
  <td>CHtml</td>
</tr>
<tr id="htmlButton">
  <td><?php echo CHtml::link('htmlButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'htmlButton-detail')); ?></td>
  <td>Generates a button using HTML button tag.</td>
  <td>CHtml</td>
</tr>
<tr id="image">
  <td><?php echo CHtml::link('image()', array('/site/doc', 'view' => 'CHtml', '#' => 'image-detail')); ?></td>
  <td>Generates an image tag.</td>
  <td>CHtml</td>
</tr>
<tr id="imageButton">
  <td><?php echo CHtml::link('imageButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'imageButton-detail')); ?></td>
  <td>Generates an image submit button.</td>
  <td>CHtml</td>
</tr>
<tr id="label">
  <td><?php echo CHtml::link('label()', array('/site/doc', 'view' => 'CHtml', '#' => 'label-detail')); ?></td>
  <td>Generates a label tag.</td>
  <td>CHtml</td>
</tr>
<tr id="link">
  <td><?php echo CHtml::link('link()', array('/site/doc', 'view' => 'CHtml', '#' => 'link-detail')); ?></td>
  <td>Generates a hyperlink tag.</td>
  <td>CHtml</td>
</tr>
<tr id="linkButton">
  <td><?php echo CHtml::link('linkButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'linkButton-detail')); ?></td>
  <td>Generates a link submit button.</td>
  <td>CHtml</td>
</tr>
<tr id="linkTag">
  <td><?php echo CHtml::link('linkTag()', array('/site/doc', 'view' => 'CHtml', '#' => 'linkTag-detail')); ?></td>
  <td>Generates a link tag that can be inserted in the head section of HTML page.</td>
  <td>CHtml</td>
</tr>
<tr id="listBox">
  <td><?php echo CHtml::link('listBox()', array('/site/doc', 'view' => 'CHtml', '#' => 'listBox-detail')); ?></td>
  <td>Generates a list box.</td>
  <td>CHtml</td>
</tr>
<tr id="listData">
  <td><?php echo CHtml::link('listData()', array('/site/doc', 'view' => 'CHtml', '#' => 'listData-detail')); ?></td>
  <td>Generates the data suitable for list-based HTML elements.</td>
  <td>CHtml</td>
</tr>
<tr id="listOptions">
  <td><?php echo CHtml::link('listOptions()', array('/site/doc', 'view' => 'CHtml', '#' => 'listOptions-detail')); ?></td>
  <td>Generates the list options.</td>
  <td>CHtml</td>
</tr>
<tr id="mailto">
  <td><?php echo CHtml::link('mailto()', array('/site/doc', 'view' => 'CHtml', '#' => 'mailto-detail')); ?></td>
  <td>Generates a mailto link.</td>
  <td>CHtml</td>
</tr>
<tr id="metaTag">
  <td><?php echo CHtml::link('metaTag()', array('/site/doc', 'view' => 'CHtml', '#' => 'metaTag-detail')); ?></td>
  <td>Generates a meta tag that can be inserted in the head section of HTML page.</td>
  <td>CHtml</td>
</tr>
<tr id="modelName">
  <td><?php echo CHtml::link('modelName()', array('/site/doc', 'view' => 'CHtml', '#' => 'modelName-detail')); ?></td>
  <td>Generates HTML name for given model.</td>
  <td>CHtml</td>
</tr>
<tr id="normalizeUrl">
  <td><?php echo CHtml::link('normalizeUrl()', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl-detail')); ?></td>
  <td>Normalizes the input parameter to be a valid URL.</td>
  <td>CHtml</td>
</tr>
<tr id="numberField">
  <td><?php echo CHtml::link('numberField()', array('/site/doc', 'view' => 'CHtml', '#' => 'numberField-detail')); ?></td>
  <td>Generates a number field input.</td>
  <td>CHtml</td>
</tr>
<tr id="openTag">
  <td><?php echo CHtml::link('openTag()', array('/site/doc', 'view' => 'CHtml', '#' => 'openTag-detail')); ?></td>
  <td>Generates an open HTML element.</td>
  <td>CHtml</td>
</tr>
<tr id="pageStateField">
  <td><?php echo CHtml::link('pageStateField()', array('/site/doc', 'view' => 'CHtml', '#' => 'pageStateField-detail')); ?></td>
  <td>Generates a hidden field for storing persistent page states.</td>
  <td>CHtml</td>
</tr>
<tr id="passwordField">
  <td><?php echo CHtml::link('passwordField()', array('/site/doc', 'view' => 'CHtml', '#' => 'passwordField-detail')); ?></td>
  <td>Generates a password field input.</td>
  <td>CHtml</td>
</tr>
<tr id="radioButton">
  <td><?php echo CHtml::link('radioButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'radioButton-detail')); ?></td>
  <td>Generates a radio button.</td>
  <td>CHtml</td>
</tr>
<tr id="radioButtonList">
  <td><?php echo CHtml::link('radioButtonList()', array('/site/doc', 'view' => 'CHtml', '#' => 'radioButtonList-detail')); ?></td>
  <td>Generates a radio button list.</td>
  <td>CHtml</td>
</tr>
<tr id="rangeField">
  <td><?php echo CHtml::link('rangeField()', array('/site/doc', 'view' => 'CHtml', '#' => 'rangeField-detail')); ?></td>
  <td>Generates a range field input.</td>
  <td>CHtml</td>
</tr>
<tr id="refresh">
  <td><?php echo CHtml::link('refresh()', array('/site/doc', 'view' => 'CHtml', '#' => 'refresh-detail')); ?></td>
  <td>Registers a 'refresh' meta tag.</td>
  <td>CHtml</td>
</tr>
<tr id="renderAttributes">
  <td><?php echo CHtml::link('renderAttributes()', array('/site/doc', 'view' => 'CHtml', '#' => 'renderAttributes-detail')); ?></td>
  <td>Renders the HTML tag attributes.</td>
  <td>CHtml</td>
</tr>
<tr id="resetButton">
  <td><?php echo CHtml::link('resetButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'resetButton-detail')); ?></td>
  <td>Generates a reset button.</td>
  <td>CHtml</td>
</tr>
<tr id="resolveName">
  <td><?php echo CHtml::link('resolveName()', array('/site/doc', 'view' => 'CHtml', '#' => 'resolveName-detail')); ?></td>
  <td>Generates input name for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="resolveNameID">
  <td><?php echo CHtml::link('resolveNameID()', array('/site/doc', 'view' => 'CHtml', '#' => 'resolveNameID-detail')); ?></td>
  <td>Generates input name and ID for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="resolveValue">
  <td><?php echo CHtml::link('resolveValue()', array('/site/doc', 'view' => 'CHtml', '#' => 'resolveValue-detail')); ?></td>
  <td>Evaluates the attribute value of the model.</td>
  <td>CHtml</td>
</tr>
<tr id="script">
  <td><?php echo CHtml::link('script()', array('/site/doc', 'view' => 'CHtml', '#' => 'script-detail')); ?></td>
  <td>Encloses the given JavaScript within a script tag.</td>
  <td>CHtml</td>
</tr>
<tr id="scriptFile">
  <td><?php echo CHtml::link('scriptFile()', array('/site/doc', 'view' => 'CHtml', '#' => 'scriptFile-detail')); ?></td>
  <td>Includes a JavaScript file.</td>
  <td>CHtml</td>
</tr>
<tr id="setModelNameConverter">
  <td><?php echo CHtml::link('setModelNameConverter()', array('/site/doc', 'view' => 'CHtml', '#' => 'setModelNameConverter-detail')); ?></td>
  <td>Set generator used in the <?php echo CHtml::link('CHtml::modelName()', array('/site/doc', 'view' => 'CHtml', '#' => 'modelName')); ?> method. You can use the `null` value to restore default</td>
  <td>CHtml</td>
</tr>
<tr id="statefulForm">
  <td><?php echo CHtml::link('statefulForm()', array('/site/doc', 'view' => 'CHtml', '#' => 'statefulForm-detail')); ?></td>
  <td>Generates a stateful form tag.</td>
  <td>CHtml</td>
</tr>
<tr id="submitButton">
  <td><?php echo CHtml::link('submitButton()', array('/site/doc', 'view' => 'CHtml', '#' => 'submitButton-detail')); ?></td>
  <td>Generates a submit button.</td>
  <td>CHtml</td>
</tr>
<tr id="tag">
  <td><?php echo CHtml::link('tag()', array('/site/doc', 'view' => 'CHtml', '#' => 'tag-detail')); ?></td>
  <td>Generates an HTML element.</td>
  <td>CHtml</td>
</tr>
<tr id="telField">
  <td><?php echo CHtml::link('telField()', array('/site/doc', 'view' => 'CHtml', '#' => 'telField-detail')); ?></td>
  <td>Generates a telephone field input.</td>
  <td>CHtml</td>
</tr>
<tr id="textArea">
  <td><?php echo CHtml::link('textArea()', array('/site/doc', 'view' => 'CHtml', '#' => 'textArea-detail')); ?></td>
  <td>Generates a text area input.</td>
  <td>CHtml</td>
</tr>
<tr id="textField">
  <td><?php echo CHtml::link('textField()', array('/site/doc', 'view' => 'CHtml', '#' => 'textField-detail')); ?></td>
  <td>Generates a text field input.</td>
  <td>CHtml</td>
</tr>
<tr id="timeField">
  <td><?php echo CHtml::link('timeField()', array('/site/doc', 'view' => 'CHtml', '#' => 'timeField-detail')); ?></td>
  <td>Generates a time field input.</td>
  <td>CHtml</td>
</tr>
<tr id="urlField">
  <td><?php echo CHtml::link('urlField()', array('/site/doc', 'view' => 'CHtml', '#' => 'urlField-detail')); ?></td>
  <td>Generates a URL field input.</td>
  <td>CHtml</td>
</tr>
<tr id="value">
  <td><?php echo CHtml::link('value()', array('/site/doc', 'view' => 'CHtml', '#' => 'value-detail')); ?></td>
  <td>Evaluates the value of the specified attribute for the given model.</td>
  <td>CHtml</td>
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
<tr id="activeInputField">
  <td><?php echo CHtml::link('activeInputField()', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField-detail')); ?></td>
  <td>Generates an input HTML tag for a model attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="addErrorCss">
  <td><?php echo CHtml::link('addErrorCss()', array('/site/doc', 'view' => 'CHtml', '#' => 'addErrorCss-detail')); ?></td>
  <td>Appends <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?> to the 'class' attribute.</td>
  <td>CHtml</td>
</tr>
<tr id="clientChange">
  <td><?php echo CHtml::link('clientChange()', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange-detail')); ?></td>
  <td>Generates the JavaScript with the specified client changes.</td>
  <td>CHtml</td>
</tr>
<tr id="inputField">
  <td><?php echo CHtml::link('inputField()', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField-detail')); ?></td>
  <td>Generates an input HTML tag.</td>
  <td>CHtml</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="afterRequiredLabel-detail">
afterRequiredLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static string <b>$afterRequiredLabel</b>;</div>

<p>the HTML code to be appended to the required label.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('label', array('/site/doc', 'view' => 'CHtml', '#' => 'label')); ?></li>
</ul>
</div>

<div class="detailHeader" id="beforeRequiredLabel-detail">
beforeRequiredLabel<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static string <b>$beforeRequiredLabel</b>;</div>

<p>the HTML code to be prepended to the required label.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('label', array('/site/doc', 'view' => 'CHtml', '#' => 'label')); ?></li>
</ul>
</div>

<div class="detailHeader" id="closeSingleTags-detail">
closeSingleTags<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public static boolean <b>$closeSingleTags</b>;</div>

<p>whether to close single tags. Defaults to true. Can be set to false for HTML5.</p>


<div class="detailHeader" id="count-detail">
count<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static integer <b>$count</b>;</div>

<p>the counter for generating automatic input field names.</p>


<div class="detailHeader" id="errorContainerTag-detail">
errorContainerTag<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public static string <b>$errorContainerTag</b>;</div>

<p>the tag name for the error container tag. Defaults to 'div'.</p>


<div class="detailHeader" id="errorCss-detail">
errorCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static string <b>$errorCss</b>;</div>

<p>the CSS class for highlighting error inputs. Form inputs will be appended
with this CSS class if they have input errors.</p>


<div class="detailHeader" id="errorMessageCss-detail">
errorMessageCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static string <b>$errorMessageCss</b>;</div>

<p>the CSS class for displaying error messages (see <?php echo CHtml::link('error', array('/site/doc', 'view' => 'CHtml', '#' => 'error')); ?>).</p>


<div class="detailHeader" id="errorSummaryCss-detail">
errorSummaryCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static string <b>$errorSummaryCss</b>;</div>

<p>the CSS class for displaying error summaries (see <?php echo CHtml::link('errorSummary', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummary')); ?>).</p>


<div class="detailHeader" id="liveEvents-detail">
liveEvents<span class="detailHeaderTag">
property
 (available since v1.1.9)
</span>
</div>

<div class="signature">
public static <b>$liveEvents</b>;</div>

<p>Sets the default style for attaching jQuery event handlers.
<br/><br/>
If set to true (default), event handlers are delegated.
Event handlers are attached to the document body and can process events
from descendant elements that are added to the document at a later time.
<br/><br/>
If set to false, event handlers are directly bound.
Event handlers are attached directly to the DOM element, that must already exist
on the page. Elements injected into the page at a later time will not be processed.
<br/><br/>
You can override this setting for a particular element by setting the htmlOptions delegate attribute
(see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?>).
<br/><br/>
For more information about attaching jQuery event handler see <a href="http://api.jquery.com/on/">http://api.jquery.com/on/</a></p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="renderSpecialAttributesValue-detail">
renderSpecialAttributesValue<span class="detailHeaderTag">
property
 (available since v1.1.13)
</span>
</div>

<div class="signature">
public static boolean <b>$renderSpecialAttributesValue</b>;</div>

<p>whether to render special attributes value. Defaults to true. Can be set to false for HTML5.</p>


<div class="detailHeader" id="requiredCss-detail">
requiredCss<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static string <b>$requiredCss</b>;</div>

<p>the CSS class for required labels. Defaults to 'required'.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('label', array('/site/doc', 'view' => 'CHtml', '#' => 'label')); ?></li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="activeCheckBox-detail">
activeCheckBox()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeCheckBox</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)
A special option named 'uncheckValue' is available that can be used to specify
the value returned when the checkbox is not checked. By default, this value is '0'.
Internally, a hidden field is rendered so that when the checkbox is not checked,
we can still obtain the posted uncheck value.
If 'uncheckValue' is set as NULL, the hidden field will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated check box</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1738">yii\web\helpers\CHtml.php#L1738</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeCheckBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)==</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #DD0000">'0'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">,</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a check box for a model attribute.
The attribute is assumed to take either true or false value.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeCheckBoxList-detail">
activeCheckBoxList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeCheckBoxList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the check box list.
Note, the values will be automatically HTML-encoded, while the labels will not.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options. The options will be applied to
each checkbox input. The following special options are recognized:
<ul>
<li>template: string, specifies how each checkbox is rendered. Defaults
to "{input} {label}", where "{input}" will be replaced by the generated
check box input tag while "{label}" will be replaced by the corresponding check box label.</li>
<li>separator: string, specifies the string that separates the generated check boxes.</li>
<li>checkAll: string, specifies the label for the "check all" checkbox.
If this option is specified, a 'check all' checkbox will be displayed. Clicking on
this checkbox will cause all checkboxes checked or unchecked.</li>
<li>checkAllLast: boolean, specifies whether the 'check all' checkbox should be
displayed at the end of the checkbox list. If this option is not set (default)
or is false, the 'check all' checkbox will be displayed at the beginning of
the checkbox list.</li>
<li>encode: boolean, specifies whether to encode HTML-encode tag attributes and values. Defaults to true.</li>
</ul>
Since 1.1.7, a special option named 'uncheckValue' is available. It can be used to set the value
that will be returned when the checkbox is not checked. By default, this value is ''.
Internally, a hidden field is rendered so when the checkbox is not checked, we can still
obtain the value. If 'uncheckValue' is set to NULL, there will be no hidden field rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated check box list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1902">yii\web\helpers\CHtml.php#L1902</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeCheckBoxList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selection</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addErrorCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">,</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">checkBoxList</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$selection</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a check box list for a model attribute.
The model attribute value is used as the selection.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.
Note that a check box list allows multiple selection, like <?php echo CHtml::link('listBox', array('/site/doc', 'view' => 'CHtml', '#' => 'listBox')); ?>.
As a result, the corresponding POST value is an array. In case no selection
is made, the corresponding POST value is an empty string.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('checkBoxList', array('/site/doc', 'view' => 'CHtml', '#' => 'checkBoxList')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeDateField-detail">
activeDateField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeDateField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1550">yii\web\helpers\CHtml.php#L1550</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeDateField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'date'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a date field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeDropDownList-detail">
activeDropDownList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeDropDownList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data for generating the list options (value=>display)
You may use <?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?> to generate this data.
Please refer to <?php echo CHtml::link('listOptions', array('/site/doc', 'view' => 'CHtml', '#' => 'listOptions')); ?> on how this data is used to generate the list options.
Note, the values and labels will be automatically HTML-encoded by this method.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are recognized. See <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.
In addition, the following options are also supported:
<ul>
<li>encode: boolean, specifies whether to encode the values. Defaults to true.</li>
<li>prompt: string, specifies the prompt text shown as the first list option. Its value is empty.  Note, the prompt text will NOT be HTML-encoded.</li>
<li>empty: string, specifies the text corresponding to empty selection. Its value is empty.
The 'empty' option can also be an array of value-label pairs.
Each pair will be used to render a list option at the beginning. Note, the text label will NOT be HTML-encoded.</li>
<li>options: array, specifies additional attributes for each OPTION tag.
    The array keys must be the option values, and the array values are the extra
    OPTION tag attributes in the name-value pairs. For example,
<pre>
    array(
        'value1'=&gt;array('disabled'=&gt;true,'label'=&gt;'value 1'),
        'value2'=&gt;array('label'=&gt;'value 2'),
    );
</pre>
</li>
</ul>
Since 1.1.13, a special option named 'unselectValue' is available. It can be used to set the value
that will be returned when no option is selected in multiple mode. When set, a hidden field is
rendered so that if no option is selected in multiple mode, we can still obtain the posted
unselect value. If 'unselectValue' is not set or set to NULL, the hidden field will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated drop down list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1799">yii\web\helpers\CHtml.php#L1799</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeDropDownList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selection</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">listOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$selection</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addErrorCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'multiple'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],-</span><span style="color: #0000BB">2</span><span style="color: #007700">)!==</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'unselectValue'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">2</span><span style="color: #007700">),</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'unselectValue'</span><span style="color: #007700">],</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'unselectValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a drop down list for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeEmailField-detail">
activeEmailField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeEmailField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1490">yii\web\helpers\CHtml.php#L1490</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeEmailField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an email field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeFileField-detail">
activeFileField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeFileField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1669">yii\web\helpers\CHtml.php#L1669</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeFileField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;a&nbsp;hidden&nbsp;field&nbsp;so&nbsp;that&nbsp;if&nbsp;a&nbsp;model&nbsp;only&nbsp;has&nbsp;a&nbsp;file&nbsp;field,&nbsp;we&nbsp;can<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;still&nbsp;use&nbsp;isset($_POST[$modelClass])&nbsp;to&nbsp;detect&nbsp;if&nbsp;the&nbsp;input&nbsp;is&nbsp;submitted<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'file'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a file input for a model attribute.
Note, you have to set the enclosing form's 'enctype' attribute to be 'multipart/form-data'.
After the form is submitted, the uploaded file information can be obtained via $_FILES (see
PHP documentation).</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeHiddenField-detail">
activeHiddenField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeHiddenField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1606">yii\web\helpers\CHtml.php#L1606</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeHiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'hidden'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a hidden input for a model attribute.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeId-detail">
activeId()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeId</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field ID</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2164">yii\web\helpers\CHtml.php#L2164</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeId</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Generates input field ID for a model attribute.</p>


<div class="detailHeader" id="activeInputField-detail">
activeInputField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static string <b>activeInputField</b>(string $type, <?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input type (e.g. 'text', 'radio')</td>
</tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes for the HTML tag</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2229">yii\web\helpers\CHtml.php#L2229</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$type</span><span style="color: #007700">===</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">===</span><span style="color: #DD0000">'password'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxlength'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getValidators</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$validator&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">CStringValidator&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">max</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxlength'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$validator</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">max</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxlength'</span><span style="color: #007700">]===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'maxlength'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$type</span><span style="color: #007700">===</span><span style="color: #DD0000">'file'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addErrorCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'input'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an input HTML tag for a model attribute.
This method generates an input HTML tag based on the given data model and attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.
This enables highlighting the incorrect input.</p>


<div class="detailHeader" id="activeLabel-detail">
activeLabel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeLabel</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. The following special options are recognized:
<ul>
<li>required: if this is set and is true, the label will be styled
with CSS class 'required' (customizable with CHtml::$requiredCss),
and be decorated with <?php echo CHtml::link('CHtml::beforeRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'beforeRequiredLabel')); ?> and
<?php echo CHtml::link('CHtml::afterRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'afterRequiredLabel')); ?>.</li>
<li>label: this specifies the label to be displayed. If this is not set,
<?php echo CHtml::link('CModel::getAttributeLabel', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributeLabel')); ?> will be called to get the label for display.
If the label is specified as false, no label will be rendered.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated label tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1373">yii\web\helpers\CHtml.php#L1373</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$inputName</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'for'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$for</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'for'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'for'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$for</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$inputName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">])===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttributeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addErrorCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$for</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a label tag for a model attribute.
The label text is the attribute label and the label is associated with
the input for the attribute (see <?php echo CHtml::link('CModel::getAttributeLabel', array('/site/doc', 'view' => 'CModel', '#' => 'getAttributeLabel')); ?>.
If the attribute has input error, the label's CSS class will be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>


<div class="detailHeader" id="activeLabelEx-detail">
activeLabelEx()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeLabelEx</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated label tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1410">yii\web\helpers\CHtml.php#L1410</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeLabelEx</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$realAttribute</span><span style="color: #007700">=</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;strip&nbsp;off&nbsp;square&nbsp;brackets&nbsp;if&nbsp;any<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'required'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isAttributeRequired</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeLabel</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$realAttribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a label tag for a model attribute.
This is an enhanced version of <?php echo CHtml::link('activeLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'activeLabel')); ?>. It will render additional
CSS class and mark when the attribute is required.
In particular, it calls <?php echo CHtml::link('CModel::isAttributeRequired', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeRequired')); ?> to determine
if the attribute is required.
If so, it will add a CSS class <?php echo CHtml::link('CHtml::requiredCss', array('/site/doc', 'view' => 'CHtml', '#' => 'requiredCss')); ?> to the label,
and decorate the label with <?php echo CHtml::link('CHtml::beforeRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'beforeRequiredLabel')); ?> and
<?php echo CHtml::link('CHtml::afterRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'afterRequiredLabel')); ?>.</p>


<div class="detailHeader" id="activeListBox-detail">
activeListBox()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeListBox</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data for generating the list options (value=>display)
You may use <?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?> to generate this data.
Please refer to <?php echo CHtml::link('listOptions', array('/site/doc', 'view' => 'CHtml', '#' => 'listOptions')); ?> on how this data is used to generate the list options.
Note, the values and labels will be automatically HTML-encoded by this method.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are recognized. See <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.
In addition, the following options are also supported:
<ul>
<li>encode: boolean, specifies whether to encode the values. Defaults to true.</li>
<li>prompt: string, specifies the prompt text shown as the first list option. Its value is empty. Note, the prompt text will NOT be HTML-encoded.</li>
<li>empty: string, specifies the text corresponding to empty selection. Its value is empty.
The 'empty' option can also be an array of value-label pairs.
Each pair will be used to render a list option at the beginning. Note, the text label will NOT be HTML-encoded.</li>
<li>options: array, specifies additional attributes for each OPTION tag.
    The array keys must be the option values, and the array values are the extra
    OPTION tag attributes in the name-value pairs. For example,
<pre>
    array(
        'value1'=&gt;array('disabled'=&gt;true,'label'=&gt;'value 1'),
        'value2'=&gt;array('label'=&gt;'value 2'),
    );
</pre>
</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated list box</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1860">yii\web\helpers\CHtml.php#L1860</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeListBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'size'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'size'</span><span style="color: #007700">]=</span><span style="color: #0000BB">4</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeDropDownList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a list box for a model attribute.
The model attribute value is used as the selection.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeName-detail">
activeName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeName</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2211">yii\web\helpers\CHtml.php#L2211</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$a</span><span style="color: #007700">=</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;because&nbsp;the&nbsp;attribute&nbsp;name&nbsp;may&nbsp;be&nbsp;changed&nbsp;by&nbsp;resolveName<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates input field name for a model attribute.
Unlike <?php echo CHtml::link('resolveName', array('/site/doc', 'view' => 'CHtml', '#' => 'resolveName')); ?>, this method does NOT modify the attribute name.</p>


<div class="detailHeader" id="activeNumberField-detail">
activeNumberField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeNumberField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1510">yii\web\helpers\CHtml.php#L1510</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeNumberField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'number'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a number field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activePasswordField-detail">
activePasswordField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activePasswordField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1624">yii\web\helpers\CHtml.php#L1624</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activePasswordField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a password field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeRadioButton-detail">
activeRadioButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeRadioButton</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)
A special option named 'uncheckValue' is available that can be used to specify
the value returned when the radio button is not checked. By default, this value is '0'.
Internally, a hidden field is rendered so that when the radio button is not checked,
we can still obtain the posted uncheck value.
If 'uncheckValue' is set as NULL, the hidden field will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1696">yii\web\helpers\CHtml.php#L1696</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeRadioButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)==</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #DD0000">'0'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">,</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;a&nbsp;hidden&nbsp;field&nbsp;so&nbsp;that&nbsp;if&nbsp;the&nbsp;radio&nbsp;button&nbsp;is&nbsp;not&nbsp;selected,&nbsp;it&nbsp;still&nbsp;submits&nbsp;a&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a radio button for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeRadioButtonList-detail">
activeRadioButtonList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeRadioButtonList</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the radio button list.
Note, the values will be automatically HTML-encoded, while the labels will not.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options. The options will be applied to
each radio button input. The following special options are recognized:
<ul>
<li>template: string, specifies how each radio button is rendered. Defaults
to "{input} {label}", where "{input}" will be replaced by the generated
radio button input tag while "{label}" will be replaced by the corresponding radio button label.</li>
<li>separator: string, specifies the string that separates the generated radio buttons. Defaults to new line (<br/>).</li>
<li>encode: boolean, specifies whether to encode HTML-encode tag attributes and values. Defaults to true.</li>
</ul>
Since version 1.1.7, a special option named 'uncheckValue' is available that can be used to specify the value
returned when the radio button is not checked. By default, this value is ''. Internally, a hidden field is
rendered so that when the radio button is not checked, we can still obtain the posted uncheck value.
If 'uncheckValue' is set as NULL, the hidden field will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1950">yii\web\helpers\CHtml.php#L1950</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeRadioButtonList</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selection</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addErrorCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">,</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">radioButtonList</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$selection</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a radio button list for a model attribute.
The model attribute value is used as the selection.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('radioButtonList', array('/site/doc', 'view' => 'CHtml', '#' => 'radioButtonList')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeRangeField-detail">
activeRangeField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeRangeField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1530">yii\web\helpers\CHtml.php#L1530</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeRangeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'range'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a range field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeSearchField-detail">
activeSearchField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeSearchField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1450">yii\web\helpers\CHtml.php#L1450</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeSearchField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'search'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a search field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeTelField-detail">
activeTelField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeTelField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1590">yii\web\helpers\CHtml.php#L1590</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeTelField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'tel'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a telephone field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeTextArea-detail">
activeTextArea()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeTextArea</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated text area</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1642">yii\web\helpers\CHtml.php#L1642</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeTextArea</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hasErrors</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">addErrorCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'textarea'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #0000BB">$text&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Generates a text area input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeTextField-detail">
activeTextField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeTextField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1430">yii\web\helpers\CHtml.php#L1430</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeTextField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a text field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeTimeField-detail">
activeTimeField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeTimeField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1570">yii\web\helpers\CHtml.php#L1570</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeTimeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'time'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a time field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="activeUrlField-detail">
activeUrlField()
<span class="detailHeaderTag">
method
(available since v1.1.11)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>activeUrlField</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1470">yii\web\helpers\CHtml.php#L1470</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">activeUrlField</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">activeInputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'url'</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a url field input for a model attribute.
If the attribute has input error, the input field's CSS class will
be appended with <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('activeInputField', array('/site/doc', 'view' => 'CHtml', '#' => 'activeInputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="addErrorCss-detail">
addErrorCss()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static void <b>addErrorCss</b>(array &$htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">HTML options to be modified</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2536">yii\web\helpers\CHtml.php#L2536</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">addErrorCss</span><span style="color: #007700">(&amp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorCss</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Appends <?php echo CHtml::link('errorCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorCss')); ?> to the 'class' attribute.</p>


<div class="detailHeader" id="ajax-detail">
ajax()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>ajax</b>(array $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">AJAX options. The valid options are used in the form of jQuery.ajax([settings])
as specified in the jQuery AJAX documentation.
The following special options are added for convenience:
<ul>
<li>update: string, specifies the selector whose HTML content should be replaced
  by the AJAX request result.</li>
<li>replace: string, specifies the selector whose target should be replaced
  by the AJAX request result.</li>
</ul>
Note, if you specify the 'success' option, the above options will be ignored.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated JavaScript</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1253">yii\web\helpers\CHtml.php#L1253</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ajax</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #DD0000">'location.href'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'cache'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'cache'</span><span style="color: #007700">]=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #DD0000">'jQuery(this).parents("form").serialize()'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(array(</span><span style="color: #DD0000">'beforeSend'</span><span style="color: #007700">,</span><span style="color: #DD0000">'complete'</span><span style="color: #007700">,</span><span style="color: #DD0000">'error'</span><span style="color: #007700">,</span><span style="color: #DD0000">'success'</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]&nbsp;instanceof&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'update'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'success'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'success'</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #DD0000">'function(html){jQuery("'</span><span style="color: #007700">.</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'update'</span><span style="color: #007700">].</span><span style="color: #DD0000">'").html(html)}'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'update'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'replace'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'success'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'success'</span><span style="color: #007700">]=new&nbsp;</span><span style="color: #0000BB">CJavaScriptExpression</span><span style="color: #007700">(</span><span style="color: #DD0000">'function(html){jQuery("'</span><span style="color: #007700">.</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'replace'</span><span style="color: #007700">].</span><span style="color: #DD0000">'").replaceWith(html)}'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'replace'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'jQuery.ajax('</span><span style="color: #007700">.</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">).</span><span style="color: #DD0000">');'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates the JavaScript that initiates an AJAX request.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://api.jquery.com/jQuery.ajax/#jQuery-ajax-settings">http://api.jquery.com/jQuery.ajax/#jQuery-ajax-settings</a></li>
</ul>
</div>

<div class="detailHeader" id="ajaxButton-detail">
ajaxButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>ajaxButton</b>(string $label, mixed $url, array $ajaxOptions=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button label</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the URL for the AJAX request. If empty, it is assumed to be the current URL. See <?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for more details.</td>
</tr>
<tr>
  <td class="paramNameCol">$ajaxOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">AJAX options (see <?php echo CHtml::link('ajax', array('/site/doc', 'view' => 'CHtml', '#' => 'ajax')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1215">yii\web\helpers\CHtml.php#L1215</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ajaxButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'ajax'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">button</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a push button that can initiate AJAX requests.</p>


<div class="detailHeader" id="ajaxLink-detail">
ajaxLink()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>ajaxLink</b>(string $text, mixed $url, array $ajaxOptions=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the link body (it will NOT be HTML-encoded.)</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the URL for the AJAX request. If empty, it is assumed to be the current URL. See <?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for more details.</td>
</tr>
<tr>
  <td class="paramNameCol">$ajaxOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">AJAX options (see <?php echo CHtml::link('ajax', array('/site/doc', 'view' => 'CHtml', '#' => 'ajax')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated link</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1196">yii\web\helpers\CHtml.php#L1196</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ajaxLink</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'href'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'href'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'#'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'ajax'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a link that can initiate AJAX requests.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?></li>
	<li><?php echo CHtml::link('ajax', array('/site/doc', 'view' => 'CHtml', '#' => 'ajax')); ?></li>
</ul>
</div>

<div class="detailHeader" id="ajaxSubmitButton-detail">
ajaxSubmitButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>ajaxSubmitButton</b>(string $label, mixed $url, array $ajaxOptions=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button label</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the URL for the AJAX request. If empty, it is assumed to be the current URL. See <?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for more details.</td>
</tr>
<tr>
  <td class="paramNameCol">$ajaxOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">AJAX options (see <?php echo CHtml::link('ajax', array('/site/doc', 'view' => 'CHtml', '#' => 'ajax')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1231">yii\web\helpers\CHtml.php#L1231</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">ajaxSubmitButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'POST'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ajaxButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$ajaxOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a push button that can submit the current form in POST method.</p>


<div class="detailHeader" id="asset-detail">
asset()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>asset</b>(string $path, boolean $hashByName=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$path</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the path of the asset to be published</td>
</tr>
<tr>
  <td class="paramNameCol">$hashByName</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the published directory should be named as the hashed basename.
If false, the name will be the hashed dirname of the path being published.
Defaults to false. Set true if the path being published is shared among
different extensions.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the asset URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1293">yii\web\helpers\CHtml.php#L1293</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">asset</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getAssetManager</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">publish</span><span style="color: #007700">(</span><span style="color: #0000BB">$path</span><span style="color: #007700">,</span><span style="color: #0000BB">$hashByName</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates the URL for the published assets.</p>


<div class="detailHeader" id="beginForm-detail">
beginForm()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>beginForm</b>(mixed $action='', string $method='post', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the form action URL (see <?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter.)</td>
</tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">form method (e.g. post, get)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated form tag.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L335">yii\web\helpers\CHtml.php#L335</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">beginForm</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">=</span><span style="color: #DD0000">'post'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'action'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'method'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$method</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$form</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddens</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$method</span><span style="color: #007700">,</span><span style="color: #DD0000">'get'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #DD0000">'?'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&amp;'</span><span style="color: #007700">,</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">))&nbsp;as&nbsp;</span><span style="color: #0000BB">$pair</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pair</span><span style="color: #007700">,</span><span style="color: #DD0000">'='</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddens</span><span style="color: #007700">[]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">urldecode</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pair</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">)),</span><span style="color: #0000BB">urldecode</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pair</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">)),array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddens</span><span style="color: #007700">[]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">urldecode</span><span style="color: #007700">(</span><span style="color: #0000BB">$pair</span><span style="color: #007700">),</span><span style="color: #DD0000">''</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableCsrfValidation&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$method</span><span style="color: #007700">,</span><span style="color: #DD0000">'post'</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddens</span><span style="color: #007700">[]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">,</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCsrfToken</span><span style="color: #007700">(),array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$hiddens</span><span style="color: #007700">!==array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$form</span><span style="color: #007700">.=</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'style'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'display:none'</span><span style="color: #007700">),</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">,</span><span style="color: #0000BB">$hiddens</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$form</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates an opening form tag.
Note, only the open tag is generated. A close tag should be placed manually
at the end of the form.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('endForm', array('/site/doc', 'view' => 'CHtml', '#' => 'endForm')); ?></li>
</ul>
</div>

<div class="detailHeader" id="button-detail">
button()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>button</b>(string $label='button', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button label</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L453">yii\web\helpers\CHtml.php#L453</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">button</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$count</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'button'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]!=</span><span style="color: #DD0000">'image'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$label</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'input'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a button.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="cdata-detail">
cdata()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>cdata</b>(string $text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the string to be enclosed</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CDATA tag with the enclosed content.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L194">yii\web\helpers\CHtml.php#L194</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">cdata</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;![CDATA['&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$text&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">']]&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Encloses the given string within a CDATA tag.</p>


<div class="detailHeader" id="checkBox-detail">
checkBox()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>checkBox</b>(string $name, boolean $checked=false, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$checked</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the check box is checked</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)
Since version 1.1.2, a special option named 'uncheckValue' is available that can be used to specify
the value returned when the checkbox is not checked. When set, a hidden field is rendered so that
when the checkbox is not checked, we can still obtain the posted uncheck value.
If 'uncheckValue' is not set or set to NULL, the hidden field will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated check box</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L845">yii\web\helpers\CHtml.php#L845</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$checked</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$checked</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;a&nbsp;hidden&nbsp;field&nbsp;so&nbsp;that&nbsp;if&nbsp;the&nbsp;check&nbsp;box&nbsp;is&nbsp;not&nbsp;checked,&nbsp;it&nbsp;still&nbsp;submits&nbsp;a&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheckOptions</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheckOptions</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">,</span><span style="color: #0000BB">$uncheckOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;a&nbsp;hidden&nbsp;field&nbsp;so&nbsp;that&nbsp;if&nbsp;the&nbsp;check&nbsp;box&nbsp;is&nbsp;not&nbsp;checked,&nbsp;it&nbsp;still&nbsp;submits&nbsp;a&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a check box.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="checkBoxList-detail">
checkBoxList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>checkBoxList</b>(string $name, mixed $select, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the check box list. You can use this name to retrieve
the selected value(s) once the form is submitted.</td>
</tr>
<tr>
  <td class="paramNameCol">$select</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">selection of the check boxes. This can be either a string
for single selection or an array for multiple selections.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the check box list.
Note, the values will be automatically HTML-encoded, while the labels will not.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options. The options will be applied to
each checkbox input. The following special options are recognized:
<ul>
<li>template: string, specifies how each checkbox is rendered. Defaults
to "{input} {label}", where "{input}" will be replaced by the generated
check box input tag while "{label}" be replaced by the corresponding check box label,
{beginLabel} will be replaced by &lt;label&gt; with labelOptions, {labelTitle} will be replaced
by the corresponding check box label title and {endLabel} will be replaced by &lt;/label&gt;</li>
<li>separator: string, specifies the string that separates the generated check boxes.</li>
<li>checkAll: string, specifies the label for the "check all" checkbox.
If this option is specified, a 'check all' checkbox will be displayed. Clicking on
this checkbox will cause all checkboxes checked or unchecked.</li>
<li>checkAllLast: boolean, specifies whether the 'check all' checkbox should be
displayed at the end of the checkbox list. If this option is not set (default)
or is false, the 'check all' checkbox will be displayed at the beginning of
the checkbox list.</li>
<li>labelOptions: array, specifies the additional HTML attributes to be rendered
for every label tag in the list.</li>
<li>container: string, specifies the checkboxes enclosing tag. Defaults to 'span'.
If the value is an empty string, no enclosing tag will be generated</li>
<li>baseID: string, specifies the base ID prefix to be used for checkboxes in the list.
This option is available since version 1.1.13.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated check box list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1024">yii\web\helpers\CHtml.php#L1024</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">checkBoxList</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]:</span><span style="color: #DD0000">'{input}&nbsp;{label}'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$separator</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">]:</span><span style="color: #DD0000">"&lt;br/&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$container</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">]:</span><span style="color: #DD0000">'span'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,-</span><span style="color: #0000BB">2</span><span style="color: #007700">)!==</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">.=</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAll'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAllLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAll'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAllLast</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAllLast'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAllLast'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAll'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checkAllLast'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]:array();<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAll</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$labelTitle</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checked</span><span style="color: #007700">=!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checkAll</span><span style="color: #007700">=</span><span style="color: #0000BB">$checkAll&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$checked</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">.</span><span style="color: #DD0000">'_'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">checkBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$checked</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$beginLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">,</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$labelTitle</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">],</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$endLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[]=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{input}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$option</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{beginLabel}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$beginLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{label}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$label</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{labelTitle}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$labelTitle</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{endLabel}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$endLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$checkAllLabel</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">.</span><span style="color: #DD0000">'_all'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">checkBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$checkAll</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$beginLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">,</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$checkAllLabel</span><span style="color: #007700">,</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$endLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$item</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{input}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$option</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{beginLabel}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$beginLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{label}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$label</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{labelTitle}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$checkAllLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{endLabel}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$endLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$checkAllLast</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[]=</span><span style="color: #0000BB">$item</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">array_unshift</span><span style="color: #007700">(</span><span style="color: #0000BB">$items</span><span style="color: #007700">,</span><span style="color: #0000BB">$item</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'['</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\\['</span><span style="color: #007700">,</span><span style="color: #DD0000">']'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'\\]'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$js</span><span style="color: #007700">=&lt;&lt;&lt;EOD<br /></span><span style="color: #DD0000">jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').click(function()&nbsp;{<br />jQuery("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']").prop('checked',&nbsp;this.checked);<br />});<br />jQuery("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']").click(function()&nbsp;{<br />jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').prop('checked',&nbsp;!jQuery("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']:not(:checked)").length);<br />});<br />jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').prop('checked',&nbsp;!jQuery("input[name='</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">']:not(:checked)").length);<br /></span><span style="color: #007700">EOD;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #0000BB">$js</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$container</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$separator</span><span style="color: #007700">,</span><span style="color: #0000BB">$items</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$container</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">),</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$separator</span><span style="color: #007700">,</span><span style="color: #0000BB">$items</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Generates a check box list.
A check box list allows multiple selection, like <?php echo CHtml::link('listBox', array('/site/doc', 'view' => 'CHtml', '#' => 'listBox')); ?>.
As a result, the corresponding POST value is an array.</p>


<div class="detailHeader" id="clientChange-detail">
clientChange()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static void <b>clientChange</b>(string $event, array &$htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$event</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">event name (without 'on')</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">HTML attributes which may contain the following special attributes
specifying the client change behaviors:
<ul>
<li>submit: string, specifies the URL to submit to. If the current element has a parent form, that form will be
submitted, and if 'submit' is non-empty its value will replace the form's URL. If there is no parent form the
data listed in 'params' will be submitted instead (via POST method), to the URL in 'submit' or the currently
requested URL if 'submit' is empty. Please note that if the 'csrf' setting is true, the CSRF token will be
included in the params too.</li>
<li>params: array, name-value pairs that should be submitted together with the form. This is only used when 'submit' option is specified.</li>
<li>csrf: boolean, whether a CSRF token should be automatically included in 'params' when <?php echo CHtml::link('CHttpRequest::enableCsrfValidation', array('/site/doc', 'view' => 'CHttpRequest', '#' => 'enableCsrfValidation')); ?> is true. Defaults to false.
You may want to set this to be true if there is no enclosing form around this element.
This option is meaningful only when 'submit' option is set.</li>
<li>return: boolean, the return value of the javascript. Defaults to false, meaning that the execution of
javascript would not cause the default behavior of the event.</li>
<li>confirm: string, specifies the message that should show in a pop-up confirmation dialog.</li>
<li>ajax: array, specifies the AJAX options (see <?php echo CHtml::link('ajax', array('/site/doc', 'view' => 'CHtml', '#' => 'ajax')); ?>).</li>
<li>live: boolean, whether the event handler should be delegated or directly bound.
If not set, <?php echo CHtml::link('liveEvents', array('/site/doc', 'view' => 'CHtml', '#' => 'liveEvents')); ?> will be used. This option has been available since version 1.1.11.</li>
</ul>
This parameter has been available since version 1.1.1.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2376">yii\web\helpers\CHtml.php#L2376</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #0000BB">$event</span><span style="color: #007700">,&amp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'confirm'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'ajax'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'live'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$live</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'live'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'live'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$live&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$liveEvents</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'return'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'return'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$return</span><span style="color: #007700">=</span><span style="color: #DD0000">'return&nbsp;true'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$return</span><span style="color: #007700">=</span><span style="color: #DD0000">'return&nbsp;false'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">.</span><span style="color: #0000BB">$event</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">=</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">.</span><span style="color: #0000BB">$event</span><span style="color: #007700">],</span><span style="color: #DD0000">';'</span><span style="color: #007700">).</span><span style="color: #DD0000">';'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'on'</span><span style="color: #007700">.</span><span style="color: #0000BB">$event</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]:</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$count</span><span style="color: #007700">++;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getClientScript</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'jquery'</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerCoreScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$request</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">enableCsrfValidation&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'csrf'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'csrf'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">][</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">csrfTokenName</span><span style="color: #007700">]=</span><span style="color: #0000BB">$request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getCsrfToken</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">=</span><span style="color: #DD0000">'{}'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">]!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">]));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">.=</span><span style="color: #DD0000">"jQuery.yii.submitForm(this,'</span><span style="color: #0000BB">$url</span><span style="color: #DD0000">',</span><span style="color: #0000BB">$params</span><span style="color: #DD0000">);</span><span style="color: #007700">{</span><span style="color: #0000BB">$return</span><span style="color: #007700">}</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'ajax'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">.=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ajax</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'ajax'</span><span style="color: #007700">]).</span><span style="color: #DD0000">"</span><span style="color: #007700">{</span><span style="color: #0000BB">$return</span><span style="color: #007700">}</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'confirm'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$confirm</span><span style="color: #007700">=</span><span style="color: #DD0000">'confirm(\''</span><span style="color: #007700">.</span><span style="color: #0000BB">CJavaScript</span><span style="color: #007700">::</span><span style="color: #0000BB">quote</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'confirm'</span><span style="color: #007700">]).</span><span style="color: #DD0000">'\')'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$handler</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">=</span><span style="color: #DD0000">"if(</span><span style="color: #0000BB">$confirm</span><span style="color: #DD0000">)&nbsp;{"</span><span style="color: #007700">.</span><span style="color: #0000BB">$handler</span><span style="color: #007700">.</span><span style="color: #DD0000">"}&nbsp;else&nbsp;return&nbsp;false;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$handler</span><span style="color: #007700">=</span><span style="color: #DD0000">"return&nbsp;</span><span style="color: #0000BB">$confirm</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$live</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'Yii.CHtml.#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #DD0000">"jQuery('body').on('</span><span style="color: #0000BB">$event</span><span style="color: #DD0000">','#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">',function(){</span><span style="color: #007700">{</span><span style="color: #0000BB">$handler</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cs</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerScript</span><span style="color: #007700">(</span><span style="color: #DD0000">'Yii.CHtml.#'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,</span><span style="color: #DD0000">"jQuery('#</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">').on('</span><span style="color: #0000BB">$event</span><span style="color: #DD0000">',&nbsp;function(){</span><span style="color: #007700">{</span><span style="color: #0000BB">$handler</span><span style="color: #007700">}</span><span style="color: #DD0000">});"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'params'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'ajax'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'confirm'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'return'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'csrf'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Generates the JavaScript with the specified client changes.</p>


<div class="detailHeader" id="closeTag-detail">
closeTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>closeTag</b>(string $tag)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the tag name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated HTML element tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L184">yii\web\helpers\CHtml.php#L184</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$tag</span><span style="color: #007700">.</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates a close HTML element.</p>


<div class="detailHeader" id="css-detail">
css()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>css</b>(string $text, string $media='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS content</td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the media that this CSS should apply to.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS properly enclosed</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L246">yii\web\helpers\CHtml.php#L246</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">css</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$media</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$media</span><span style="color: #007700">=</span><span style="color: #DD0000">'&nbsp;media="'</span><span style="color: #007700">.</span><span style="color: #0000BB">$media</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"&lt;style&nbsp;type=\"text/css\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$media</span><span style="color: #007700">}</span><span style="color: #DD0000">&gt;\n/*&lt;![CDATA[*/\n</span><span style="color: #007700">{</span><span style="color: #0000BB">$text</span><span style="color: #007700">}</span><span style="color: #DD0000">\n/*]]&gt;*/\n&lt;/style&gt;"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Encloses the given CSS content with a CSS tag.</p>


<div class="detailHeader" id="cssFile-detail">
cssFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>cssFile</b>(string $url, string $media='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS URL</td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the media that this CSS should apply to.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the CSS link.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L276">yii\web\helpers\CHtml.php#L276</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">cssFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">linkTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'stylesheet'</span><span style="color: #007700">,</span><span style="color: #DD0000">'text/css'</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">!==</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$media&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Links to the specified CSS file.</p>


<div class="detailHeader" id="dateField-detail">
dateField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>dateField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L644">yii\web\helpers\CHtml.php#L644</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">dateField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'date'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a date field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="decode-detail">
decode()
<span class="detailHeaderTag">
method
(available since v1.1.8)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>decode</b>(string $text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data to be decoded</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the decoded data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L114">yii\web\helpers\CHtml.php#L114</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">htmlspecialchars_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Decodes special HTML entities back to the corresponding characters.
This is the opposite of <?php echo CHtml::link('encode()', array('/site/doc', 'view' => 'CHtml', '#' => 'encode')); ?>.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.htmlspecialchars-decode.php">http://www.php.net/manual/en/function.htmlspecialchars-decode.php</a></li>
</ul>
</div>

<div class="detailHeader" id="dropDownList-detail">
dropDownList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>dropDownList</b>(string $name, string $select, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$select</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the selected value</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data for generating the list options (value=>display).
You may use <?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?> to generate this data.
Please refer to <?php echo CHtml::link('listOptions', array('/site/doc', 'view' => 'CHtml', '#' => 'listOptions')); ?> on how this data is used to generate the list options.
Note, the values and labels will be automatically HTML-encoded by this method.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are recognized. See <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.
In addition, the following options are also supported specifically for dropdown list:
<ul>
<li>encode: boolean, specifies whether to encode the values. Defaults to true.</li>
<li>prompt: string, specifies the prompt text shown as the first list option. Its value is empty. Note, the prompt text will NOT be HTML-encoded.</li>
<li>empty: string, specifies the text corresponding to empty selection. Its value is empty.
The 'empty' option can also be an array of value-label pairs.
Each pair will be used to render a list option at the beginning. Note, the text label will NOT be HTML-encoded.</li>
<li>options: array, specifies additional attributes for each OPTION tag.
    The array keys must be the option values, and the array values are the extra
    OPTION tag attributes in the name-value pairs. For example,
<pre>
    array(
        'value1'=&gt;array('disabled'=&gt;true,'label'=&gt;'value 1'),
        'value2'=&gt;array('label'=&gt;'value 2'),
    );
</pre>
</li>
</ul>
Since 1.1.13, a special option named 'unselectValue' is available. It can be used to set the value
that will be returned when no option is selected in multiple mode. When set, a hidden field is
rendered so that if no option is selected in multiple mode, we can still obtain the posted
unselect value. If 'unselectValue' is not set or set to NULL, the hidden field will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated drop down list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L915">yii\web\helpers\CHtml.php#L915</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">listOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$select</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'multiple'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],-</span><span style="color: #0000BB">2</span><span style="color: #007700">)!==</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'unselectValue'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;?&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;:&nbsp;array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">],</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">2</span><span style="color: #007700">),</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'unselectValue'</span><span style="color: #007700">],</span><span style="color: #0000BB">$hiddenOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'unselectValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;a&nbsp;hidden&nbsp;field&nbsp;so&nbsp;that&nbsp;if&nbsp;the&nbsp;option&nbsp;is&nbsp;not&nbsp;selected,&nbsp;it&nbsp;still&nbsp;submits&nbsp;a&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a drop down list.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
	<li><?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?></li>
</ul>
</div>

<div class="detailHeader" id="emailField-detail">
emailField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>emailField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L678">yii\web\helpers\CHtml.php#L678</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">emailField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an email field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="encode-detail">
encode()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>encode</b>(string $text)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">data to be encoded</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the encoded data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L101">yii\web\helpers\CHtml.php#L101</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">charset</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Encodes special characters into HTML entities.
The <?php echo CHtml::link('application charset', array('/site/doc', 'view' => 'CApplication', '#' => 'charset')); ?> will be used for encoding.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.htmlspecialchars.php">http://www.php.net/manual/en/function.htmlspecialchars.php</a></li>
</ul>
</div>

<div class="detailHeader" id="encodeArray-detail">
encodeArray()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>encodeArray</b>(array $data)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data to be encoded</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the encoded data</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L128">yii\web\helpers\CHtml.php#L128</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">encodeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">charset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">ENT_QUOTES</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">charset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encodeArray</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$d</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Encodes special characters in an array of strings into HTML entities.
Both the array keys and values will be encoded if needed.
If a value is an array, this method will also encode it recursively.
The <?php echo CHtml::link('application charset', array('/site/doc', 'view' => 'CApplication', '#' => 'charset')); ?> will be used for encoding.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://www.php.net/manual/en/function.htmlspecialchars.php">http://www.php.net/manual/en/function.htmlspecialchars.php</a></li>
</ul>
</div>

<div class="detailHeader" id="endForm-detail">
endForm()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>endForm</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L364">yii\web\helpers\CHtml.php#L364</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">endForm</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;/form&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates a closing form tag.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('beginForm', array('/site/doc', 'view' => 'CHtml', '#' => 'beginForm')); ?></li>
</ul>
</div>

<div class="detailHeader" id="error-detail">
error()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>error</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes to be rendered in the container tag.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error display. Empty if no errors are found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2035">yii\web\helpers\CHtml.php#L2035</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">error</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;turn&nbsp;[a][b]attr&nbsp;into&nbsp;attr<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getError</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$error</span><span style="color: #007700">!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorMessageCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorContainerTag</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$error</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Displays the first validation error for a model attribute.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CModel::getErrors', array('/site/doc', 'view' => 'CModel', '#' => 'getErrors')); ?></li>
	<li><?php echo CHtml::link('errorMessageCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorMessageCss')); ?></li>
	<li>$errorContainerTag</li>
</ul>
</div>

<div class="detailHeader" id="errorSummary-detail">
errorSummary()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>errorSummary</b>(mixed $model, string $header=NULL, string $footer=NULL, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the models whose input errors are to be displayed. This can be either
a single model or an array of models.</td>
</tr>
<tr>
  <td class="paramNameCol">$header</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a piece of HTML code that appears in front of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$footer</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a piece of HTML code that appears at the end of the errors</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes to be rendered in the container div tag.
A special option named 'firstError' is recognized, which when set true, will
make the error summary to show only the first error message of each attribute.
If this is not set or is false, all error messages will be displayed.
This option has been available since version 1.1.3.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the error summary. Empty if no errors are found.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1988">yii\web\helpers\CHtml.php#L1988</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">errorSummary</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$header</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$footer</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">=array(</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'firstError'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$firstError</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'firstError'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'firstError'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$firstError</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$m</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$m</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrors</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$errors&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$error</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$error</span><span style="color: #007700">!=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #DD0000">"&lt;li&gt;</span><span style="color: #0000BB">$error</span><span style="color: #DD0000">&lt;/li&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$firstError</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$content</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$header</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$header</span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;p&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'Please&nbsp;fix&nbsp;the&nbsp;following&nbsp;input&nbsp;errors:'</span><span style="color: #007700">).</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$errorSummaryCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$header</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n&lt;ul&gt;\n</span><span style="color: #0000BB">$content</span><span style="color: #DD0000">&lt;/ul&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$footer</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Displays a summary of validation errors for one or several models.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CModel::getErrors', array('/site/doc', 'view' => 'CModel', '#' => 'getErrors')); ?></li>
	<li><?php echo CHtml::link('errorSummaryCss', array('/site/doc', 'view' => 'CHtml', '#' => 'errorSummaryCss')); ?></li>
</ul>
</div>

<div class="detailHeader" id="fileField-detail">
fileField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>fileField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L758">yii\web\helpers\CHtml.php#L758</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">fileField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'file'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a file input.
Note, you have to set the enclosing form's 'enctype' attribute to be 'multipart/form-data'.
After the form is submitted, the uploaded file information can be obtained via $_FILES[$name] (see
PHP documentation).</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="form-detail">
form()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>form</b>(mixed $action='', string $method='post', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the form action URL (see <?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter.)</td>
</tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">form method (e.g. post, get)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated form tag.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L320">yii\web\helpers\CHtml.php#L320</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">=</span><span style="color: #DD0000">'post'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">beginForm</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an opening form tag.
This is a shortcut to <?php echo CHtml::link('beginForm', array('/site/doc', 'view' => 'CHtml', '#' => 'beginForm')); ?>.</p>


<div class="detailHeader" id="getIdByName-detail">
getIdByName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getIdByName</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name from which to generate HTML ID</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ID generated based on name.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2153">yii\web\helpers\CHtml.php#L2153</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">,</span><span style="color: #DD0000">']['</span><span style="color: #007700">,</span><span style="color: #DD0000">'['</span><span style="color: #007700">,</span><span style="color: #DD0000">']'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">),array(</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #DD0000">'_'</span><span style="color: #007700">),</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a valid HTML ID based on name.</p>


<div class="detailHeader" id="hiddenField-detail">
hiddenField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>hiddenField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L726">yii\web\helpers\CHtml.php#L726</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'hidden'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a hidden input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="htmlButton-detail">
htmlButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>htmlButton</b>(string $label='button', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button label. Note that this value will be directly inserted in the button element
without being HTML-encoded.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L479">yii\web\helpers\CHtml.php#L479</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">htmlButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$count</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'button'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$label</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a button using HTML button tag.
This method is similar to <?php echo CHtml::link('button', array('/site/doc', 'view' => 'CHtml', '#' => 'button')); ?> except that it generates a 'button'
tag instead of 'input' tag.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="image-detail">
image()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>image</b>(string $src, string $alt='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$src</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the image URL</td>
</tr>
<tr>
  <td class="paramNameCol">$alt</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the alternative text display</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated image tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L438">yii\web\helpers\CHtml.php#L438</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$alt</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'src'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$src</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'alt'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$alt</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'img'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an image tag.</p>


<div class="detailHeader" id="imageButton-detail">
imageButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>imageButton</b>(string $src, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$src</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the image URL</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L525">yii\web\helpers\CHtml.php#L525</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">imageButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$src</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'src'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$src</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'image'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">button</span><span style="color: #007700">(</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an image submit button.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="inputField-detail">
inputField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected static string <b>inputField</b>(string $type, string $name, string $value, array $htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input type (e.g. 'text', 'radio')</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes for the HTML tag (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1342">yii\web\helpers\CHtml.php#L1342</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'input'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates an input HTML tag.
This method generates an input HTML tag based on the given input name and value.</p>


<div class="detailHeader" id="label-detail">
label()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>label</b>(string $label, string $for, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">label text. Note, you should HTML-encode the text if needed.</td>
</tr>
<tr>
  <td class="paramNameCol">$for</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ID of the HTML element that this label is associated with.
If this is false, the 'for' attribute for the label tag will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes.
The following HTML option is recognized:
<ul>
<li>required: if this is set and is true, the label will be styled
with CSS class 'required' (customizable with CHtml::$requiredCss),
and be decorated with <?php echo CHtml::link('CHtml::beforeRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'beforeRequiredLabel')); ?> and
<?php echo CHtml::link('CHtml::afterRequiredLabel', array('/site/doc', 'view' => 'CHtml', '#' => 'afterRequiredLabel')); ?>.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated label tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L562">yii\web\helpers\CHtml.php#L562</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$for</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$for</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'for'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'for'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$for</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'required'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'required'</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">].=</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$requiredCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$requiredCss</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$beforeRequiredLabel</span><span style="color: #007700">.</span><span style="color: #0000BB">$label</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$afterRequiredLabel</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'required'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$label</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a label tag.</p>


<div class="detailHeader" id="link-detail">
link()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>link</b>(string $text, mixed $url='#', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">link body. It will NOT be HTML-encoded. Therefore you can pass in HTML code such as an image tag.</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">a URL or an action route that can be used to create a URL.
See <?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for more details about how to specify this parameter.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated hyperlink</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L407">yii\web\helpers\CHtml.php#L407</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$url</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'href'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a hyperlink tag.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?></li>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="linkButton-detail">
linkButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>linkButton</b>(string $label='submit', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button label</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L540">yii\web\helpers\CHtml.php#L540</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">linkButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">]=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'href'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'href'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a link submit button.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="linkTag-detail">
linkTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>linkTag</b>(string $relation=NULL, string $type=NULL, string $href=NULL, string $media=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$relation</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">rel attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">type attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$href</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">href attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$media</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">media attribute of the link tag. If null, the attribute will not be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">other options in name-value pairs</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated link tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L227">yii\web\helpers\CHtml.php#L227</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">linkTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$type</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$href</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$media</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$relation</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'rel'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$relation</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$type</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$href</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'href'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$href</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$media</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'media'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$media</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a link tag that can be inserted in the head section of HTML page.
Do not confuse this method with <?php echo CHtml::link('link()', array('/site/doc', 'view' => 'CHtml', '#' => 'link')); ?>. The latter generates a hyperlink.</p>


<div class="detailHeader" id="listBox-detail">
listBox()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>listBox</b>(string $name, mixed $select, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$select</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the selected value(s). This can be either a string for single selection or an array for multiple selections.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">data for generating the list options (value=>display)
You may use <?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?> to generate this data.
Please refer to <?php echo CHtml::link('listOptions', array('/site/doc', 'view' => 'CHtml', '#' => 'listOptions')); ?> on how this data is used to generate the list options.
Note, the values and labels will be automatically HTML-encoded by this method.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized. See <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.
In addition, the following options are also supported specifically for list box:
<ul>
<li>encode: boolean, specifies whether to encode the values. Defaults to true.</li>
<li>prompt: string, specifies the prompt text shown as the first list option. Its value is empty. Note, the prompt text will NOT be HTML-encoded.</li>
<li>empty: string, specifies the text corresponding to empty selection. Its value is empty.
The 'empty' option can also be an array of value-label pairs.
Each pair will be used to render a list option at the beginning. Note, the text label will NOT be HTML-encoded.</li>
<li>options: array, specifies additional attributes for each OPTION tag.
    The array keys must be the option values, and the array values are the extra
    OPTION tag attributes in the name-value pairs. For example,
<pre>
    array(
        'value1'=&gt;array('disabled'=&gt;true,'label'=&gt;'value 1'),
        'value2'=&gt;array('label'=&gt;'value 2'),
    );
</pre>
</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated list box</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L977">yii\web\helpers\CHtml.php#L977</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">listBox</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'size'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'size'</span><span style="color: #007700">]=</span><span style="color: #0000BB">4</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!empty(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'multiple'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,-</span><span style="color: #0000BB">2</span><span style="color: #007700">)!==</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">.=</span><span style="color: #DD0000">'[]'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">dropDownList</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a list box.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
	<li><?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?></li>
</ul>
</div>

<div class="detailHeader" id="listData-detail">
listData()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static array <b>listData</b>(array $models, mixed $valueField, mixed $textField, mixed $groupField='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$models</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">a list of model objects. This parameter
can also be an array of associative arrays (e.g. results of <?php echo CHtml::link('CDbCommand::queryAll', array('/site/doc', 'view' => 'CDbCommand', '#' => 'queryAll')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">$valueField</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute name or anonymous function (PHP 5.3+) for list option values</td>
</tr>
<tr>
  <td class="paramNameCol">$textField</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute name or anonymous function (PHP 5.3+) for list option texts</td>
</tr>
<tr>
  <td class="paramNameCol">$groupField</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute name or anonymous function (PHP 5.3+) for list option group names. If empty, no group will be generated.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the list data that can be used in <?php echo CHtml::link('dropDownList', array('/site/doc', 'view' => 'CHtml', '#' => 'dropDownList')); ?>, <?php echo CHtml::link('listBox', array('/site/doc', 'view' => 'CHtml', '#' => 'listBox')); ?>, etc.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2073">yii\web\helpers\CHtml.php#L2073</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">listData</span><span style="color: #007700">(</span><span style="color: #0000BB">$models</span><span style="color: #007700">,</span><span style="color: #0000BB">$valueField</span><span style="color: #007700">,</span><span style="color: #0000BB">$textField</span><span style="color: #007700">,</span><span style="color: #0000BB">$groupField</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$listData</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$groupField</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$models&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$valueField</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$textField</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$listData</span><span style="color: #007700">[</span><span style="color: #0000BB">$value</span><span style="color: #007700">]=</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$models&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$group</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$groupField</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$valueField</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$text</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$textField</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$group</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$listData</span><span style="color: #007700">[</span><span style="color: #0000BB">$value</span><span style="color: #007700">]=</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$listData</span><span style="color: #007700">[</span><span style="color: #0000BB">$group</span><span style="color: #007700">][</span><span style="color: #0000BB">$value</span><span style="color: #007700">]=</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$listData</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates the data suitable for list-based HTML elements.
The generated data can be used in <?php echo CHtml::link('dropDownList', array('/site/doc', 'view' => 'CHtml', '#' => 'dropDownList')); ?>, <?php echo CHtml::link('listBox', array('/site/doc', 'view' => 'CHtml', '#' => 'listBox')); ?>, <?php echo CHtml::link('checkBoxList', array('/site/doc', 'view' => 'CHtml', '#' => 'checkBoxList')); ?>,
<?php echo CHtml::link('radioButtonList', array('/site/doc', 'view' => 'CHtml', '#' => 'radioButtonList')); ?>, and their active-versions (such as <?php echo CHtml::link('activeDropDownList', array('/site/doc', 'view' => 'CHtml', '#' => 'activeDropDownList')); ?>).
Note, this method does not HTML-encode the generated data. You may call <?php echo CHtml::link('encodeArray', array('/site/doc', 'view' => 'CHtml', '#' => 'encodeArray')); ?> to
encode it if needed.
Please refer to the <?php echo CHtml::link('value', array('/site/doc', 'view' => 'CHtml', '#' => 'value')); ?> method on how to specify value field, text field and group field.
You can also pass anonymous functions as second, third and fourth arguments which calculates
text field value (PHP 5.3+ only) since 1.1.13. Your anonymous function should receive one argument,
which is the model, the current &lt;option&gt; tag is generated from.
<br/><br/>
<pre>
CHtml::listData($posts,'id',function($post) {
	return CHtml::encode($post-&gt;title);
});
</pre></p>


<div class="detailHeader" id="listOptions-detail">
listOptions()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>listOptions</b>(mixed $selection, array $listData, array &$htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$selection</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the selected value(s). This can be either a string for single selection or an array for multiple selections.</td>
</tr>
<tr>
  <td class="paramNameCol">$listData</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the option data (see <?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. The following two special attributes are recognized:
<ul>
<li>encode: boolean, specifies whether to encode the values. Defaults to true.</li>
<li>prompt: string, specifies the prompt text shown as the first list option. Its value is empty. Note, the prompt text will NOT be HTML-encoded.</li>
<li>empty: string, specifies the text corresponding to empty selection. Its value is empty.
The 'empty' option can also be an array of value-label pairs.
Each pair will be used to render a list option at the beginning. Note, the text label will NOT be HTML-encoded.</li>
<li>options: array, specifies additional attributes for each OPTION tag.
    The array keys must be the option values, and the array values are the extra
    OPTION tag attributes in the name-value pairs. For example,
<pre>
    array(
        'value1'=&gt;array('disabled'=&gt;true,'label'=&gt;'value 1'),
        'value2'=&gt;array('label'=&gt;'value 2'),
    );
</pre>
</li>
<li>key: string, specifies the name of key attribute of the selection object(s).
This is used when the selection is represented in terms of objects. In this case,
the property named by the key option of the objects will be treated as the actual selection value.
This option defaults to 'primaryKey', meaning using the 'primaryKey' property value of the objects in the selection.
This option has been available since version 1.1.3.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated list options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2287">yii\web\helpers\CHtml.php#L2287</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">listOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$selection</span><span style="color: #007700">,</span><span style="color: #0000BB">$listData</span><span style="color: #007700">,&amp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$raw</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prompt'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;option&nbsp;value=""&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prompt'</span><span style="color: #007700">],array(</span><span style="color: #DD0000">'&lt;'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&amp;lt;'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&amp;gt;'</span><span style="color: #007700">)).</span><span style="color: #DD0000">"&lt;/option&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'prompt'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]=array(</span><span style="color: #DD0000">''</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$label</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;option&nbsp;value="'</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">).</span><span style="color: #DD0000">'"&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'&lt;'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&amp;lt;'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'&amp;gt;'</span><span style="color: #007700">)).</span><span style="color: #DD0000">"&lt;/option&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'options'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #DD0000">'primaryKey'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$selection</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$selection&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$item</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$item</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selection</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]=</span><span style="color: #0000BB">$item</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$selection</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$selection</span><span style="color: #007700">=</span><span style="color: #0000BB">$selection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$key</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$listData&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;optgroup&nbsp;label="'</span><span style="color: #007700">.(</span><span style="color: #0000BB">$raw</span><span style="color: #007700">?</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">)).</span><span style="color: #DD0000">"\"&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dummy</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'options'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dummy</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">listOptions</span><span style="color: #007700">(</span><span style="color: #0000BB">$selection</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$dummy</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #DD0000">'&lt;/optgroup&gt;'</span><span style="color: #007700">.</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'value'</span><span style="color: #007700">=&gt;(string)</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">=&gt;!</span><span style="color: #0000BB">$raw</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$selection</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$selection</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$selection</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,</span><span style="color: #0000BB">$selection</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">[</span><span style="color: #DD0000">'selected'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'selected'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #0000BB">$key</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'option'</span><span style="color: #007700">,</span><span style="color: #0000BB">$attributes</span><span style="color: #007700">,</span><span style="color: #0000BB">$raw</span><span style="color: #007700">?(string)</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">((string)</span><span style="color: #0000BB">$value</span><span style="color: #007700">)).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates the list options.</p>


<div class="detailHeader" id="mailto-detail">
mailto()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>mailto</b>(string $text, string $email='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">link body. It will NOT be HTML-encoded. Therefore you can pass in HTML code such as an image tag.</td>
</tr>
<tr>
  <td class="paramNameCol">$email</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">email address. If this is empty, the first parameter (link body) will be treated as the email address.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated mailto link</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L424">yii\web\helpers\CHtml.php#L424</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">mailto</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #0000BB">$email</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$email</span><span style="color: #007700">===</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$email</span><span style="color: #007700">=</span><span style="color: #0000BB">$text</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,</span><span style="color: #DD0000">'mailto:'</span><span style="color: #007700">.</span><span style="color: #0000BB">$email</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a mailto link.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="metaTag-detail">
metaTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>metaTag</b>(string $content, string $name=NULL, string $httpEquiv=NULL, array $options=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$content</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">content attribute of the meta tag</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name attribute of the meta tag. If null, the attribute will not be generated</td>
</tr>
<tr>
  <td class="paramNameCol">$httpEquiv</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">http-equiv attribute of the meta tag. If null, the attribute will not be generated</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">other options in name-value pairs (e.g. 'scheme', 'lang')</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated meta tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L207">yii\web\helpers\CHtml.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">metaTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$httpEquiv</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$name</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$httpEquiv</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'http-equiv'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$httpEquiv</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">[</span><span style="color: #DD0000">'content'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'meta'</span><span style="color: #007700">,</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a meta tag that can be inserted in the head section of HTML page.</p>


<div class="detailHeader" id="modelName-detail">
modelName()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>modelName</b>(CModel|string $model)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol">CModel|string</td>
  <td class="paramDescCol">the data model or the model class name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated HTML name value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2176">yii\web\helpers\CHtml.php#L2176</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">modelName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_callable</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_modelNameConverter</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_modelNameConverter</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$className</span><span style="color: #007700">=</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;:&nbsp;(string)</span><span style="color: #0000BB">$model</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">,</span><span style="color: #DD0000">'_'</span><span style="color: #007700">,</span><span style="color: #0000BB">$className</span><span style="color: #007700">),</span><span style="color: #DD0000">'_'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates HTML name for given model.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('CHtml::setModelNameConverter()', array('/site/doc', 'view' => 'CHtml', '#' => 'setModelNameConverter')); ?></li>
</ul>
</div>

<div class="detailHeader" id="normalizeUrl-detail">
normalizeUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>normalizeUrl</b>(mixed $url)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the parameter to be used to generate a valid URL</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the normalized URL</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1316">yii\web\helpers\CHtml.php#L1316</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$c</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getController</span><span style="color: #007700">())!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">$c</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">createUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">],</span><span style="color: #0000BB">array_splice</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">===</span><span style="color: #DD0000">''&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRequest</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">()&nbsp;:&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Normalizes the input parameter to be a valid URL.
<br/><br/>
If the input parameter is an empty string, the currently requested URL will be returned.
<br/><br/>
If the input parameter is a non-empty string, it is treated as a valid URL and will
be returned without any change.
<br/><br/>
If the input parameter is an array, it is treated as a controller route and a list of
GET parameters, and the <?php echo CHtml::link('CController::createUrl', array('/site/doc', 'view' => 'CController', '#' => 'createUrl')); ?> method will be invoked to
create a URL. In this case, the first array element refers to the controller route,
and the rest key-value pairs refer to the additional GET parameters for the URL.
For example, <code>array('post/list', 'page'=>3)</code> may be used to generate the URL
<code>/index.php?r=post/list&page=3</code>.</p>


<div class="detailHeader" id="numberField-detail">
numberField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>numberField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L610">yii\web\helpers\CHtml.php#L610</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">numberField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'number'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a number field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="openTag-detail">
openTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>openTag</b>(string $tag, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the tag name</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the element attributes. The values will be HTML-encoded using <?php echo CHtml::link('encode()', array('/site/doc', 'view' => 'CHtml', '#' => 'encode')); ?>.
If an 'encode' attribute is given and its value is false,
the rest of the attribute values will NOT be HTML-encoded.
Since version 1.1.5, attributes whose value is null will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated HTML element tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L174">yii\web\helpers\CHtml.php#L174</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">renderAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates an open HTML element.</p>


<div class="detailHeader" id="pageStateField-detail">
pageStateField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>pageStateField</b>(string $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the persistent page states in serialized format</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated hidden field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L391">yii\web\helpers\CHtml.php#L391</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">pageStateField</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">'&lt;input&nbsp;type="hidden"&nbsp;name="'</span><span style="color: #007700">.</span><span style="color: #0000BB">CController</span><span style="color: #007700">::</span><span style="color: #0000BB">STATE_INPUT_NAME</span><span style="color: #007700">.</span><span style="color: #DD0000">'"&nbsp;value="'</span><span style="color: #007700">.</span><span style="color: #0000BB">$value</span><span style="color: #007700">.</span><span style="color: #DD0000">'"&nbsp;/&gt;'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates a hidden field for storing persistent page states.
This method is internally used by <?php echo CHtml::link('statefulForm', array('/site/doc', 'view' => 'CHtml', '#' => 'statefulForm')); ?>.</p>


<div class="detailHeader" id="passwordField-detail">
passwordField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>passwordField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L741">yii\web\helpers\CHtml.php#L741</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">passwordField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a password field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="radioButton-detail">
radioButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>radioButton</b>(string $name, boolean $checked=false, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$checked</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether the radio button is checked</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)
Since version 1.1.2, a special option named 'uncheckValue' is available that can be used to specify
the value returned when the radio button is not checked. When set, a hidden field is rendered so that
when the radio button is not checked, we can still obtain the posted uncheck value.
If 'uncheckValue' is not set or set to NULL, the hidden field will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L798">yii\web\helpers\CHtml.php#L798</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$checked</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$checked</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'click'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">array_key_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'uncheckValue'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;a&nbsp;hidden&nbsp;field&nbsp;so&nbsp;that&nbsp;if&nbsp;the&nbsp;radio&nbsp;button&nbsp;is&nbsp;not&nbsp;selected,&nbsp;it&nbsp;still&nbsp;submits&nbsp;a&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheckOptions</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">ID_PREFIX</span><span style="color: #007700">.</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$uncheckOptions</span><span style="color: #007700">=array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">hiddenField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$uncheck</span><span style="color: #007700">,</span><span style="color: #0000BB">$uncheckOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$hidden</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;add&nbsp;a&nbsp;hidden&nbsp;field&nbsp;so&nbsp;that&nbsp;if&nbsp;the&nbsp;radio&nbsp;button&nbsp;is&nbsp;not&nbsp;selected,&nbsp;it&nbsp;still&nbsp;submits&nbsp;a&nbsp;value<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$hidden&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a radio button.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="radioButtonList-detail">
radioButtonList()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>radioButtonList</b>(string $name, string $select, array $data, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">name of the radio button list. You can use this name to retrieve
the selected value(s) once the form is submitted.</td>
</tr>
<tr>
  <td class="paramNameCol">$select</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">selection of the radio buttons.</td>
</tr>
<tr>
  <td class="paramNameCol">$data</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">value-label pairs used to generate the radio button list.
Note, the values will be automatically HTML-encoded, while the labels will not.</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML options. The options will be applied to
each radio button input. The following special options are recognized:
<ul>
<li>template: string, specifies how each radio button is rendered. Defaults
to "{input} {label}", where "{input}" will be replaced by the generated
radio button input tag while "{label}" will be replaced by the corresponding radio button label,
{beginLabel} will be replaced by &lt;label&gt; with labelOptions, {labelTitle} will be replaced
by the corresponding radio button label title and {endLabel} will be replaced by &lt;/label&gt;</li>
<li>separator: string, specifies the string that separates the generated radio buttons. Defaults to new line (<br/>).</li>
<li>labelOptions: array, specifies the additional HTML attributes to be rendered
for every label tag in the list.</li>
<li>container: string, specifies the radio buttons enclosing tag. Defaults to 'span'.
If the value is an empty string, no enclosing tag will be generated</li>
<li>baseID: string, specifies the base ID prefix to be used for radio buttons in the list.
This option is available since version 1.1.13.</li>
<li>empty: string, specifies the text corresponding to empty selection. Its value is empty.
The 'empty' option can also be an array of value-label pairs.
Each pair will be used to render a radio button at the beginning. Note, the text label will NOT be HTML-encoded.
This option is available since version 1.1.14.</li>
</ul></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated radio button list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L1140">yii\web\helpers\CHtml.php#L1140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">radioButtonList</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">,</span><span style="color: #0000BB">$data</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$template</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">]:</span><span style="color: #DD0000">'{input}&nbsp;{label}'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$separator</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">]:</span><span style="color: #DD0000">"&lt;br/&gt;\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$container</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">]:</span><span style="color: #DD0000">'span'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'template'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'separator'</span><span style="color: #007700">],</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'container'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">])?</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]:array();<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'labelOptions'</span><span style="color: #007700">]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]=array(</span><span style="color: #DD0000">''</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">],</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'empty'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">=array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">=isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'baseID'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$data&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$labelTitle</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$checked</span><span style="color: #007700">=!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$select</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">.</span><span style="color: #DD0000">'_'</span><span style="color: #007700">.</span><span style="color: #0000BB">$id</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$option</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">radioButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$checked</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$beginLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">openTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">,</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">label</span><span style="color: #007700">(</span><span style="color: #0000BB">$labelTitle</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">],</span><span style="color: #0000BB">$labelOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$endLabel</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">closeTag</span><span style="color: #007700">(</span><span style="color: #DD0000">'label'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$items</span><span style="color: #007700">[]=</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$template</span><span style="color: #007700">,array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{input}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$option</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{beginLabel}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$beginLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{label}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$label</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{labelTitle}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$labelTitle</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'{endLabel}'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$endLabel</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(empty(</span><span style="color: #0000BB">$container</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$separator</span><span style="color: #007700">,</span><span style="color: #0000BB">$items</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$container</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$baseID</span><span style="color: #007700">),</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #0000BB">$separator</span><span style="color: #007700">,</span><span style="color: #0000BB">$items</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Generates a radio button list.
A radio button list is like a <?php echo CHtml::link('check box list', array('/site/doc', 'view' => 'CHtml', '#' => 'checkBoxList')); ?>, except that
it only allows single selection.</p>


<div class="detailHeader" id="rangeField-detail">
rangeField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>rangeField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L627">yii\web\helpers\CHtml.php#L627</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">rangeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'range'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a range field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="refresh-detail">
refresh()
<span class="detailHeaderTag">
method
(available since v1.1.1)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>refresh</b>(integer $seconds, string $url='')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$seconds</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the number of seconds to wait before refreshing the page</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL to which the page should be redirected to. If empty, it means the current page.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L262">yii\web\helpers\CHtml.php#L262</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">refresh</span><span style="color: #007700">(</span><span style="color: #0000BB">$seconds</span><span style="color: #007700">,</span><span style="color: #0000BB">$url</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$seconds</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$url</span><span style="color: #007700">!==</span><span style="color: #DD0000">''</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">.=</span><span style="color: #DD0000">';url='</span><span style="color: #007700">.</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">normalizeUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">clientScript</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">registerMetaTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">,</span><span style="color: #0000BB">null</span><span style="color: #007700">,</span><span style="color: #DD0000">'refresh'</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Registers a 'refresh' meta tag.
This method can be invoked anywhere in a view. It will register a 'refresh'
meta tag with <?php echo CHtml::link('CClientScript', array('/site/doc', 'view' => 'CClientScript')); ?> so that the page can be refreshed in
the specified seconds.</p>


<div class="detailHeader" id="renderAttributes-detail">
renderAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>renderAttributes</b>(array $htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">attributes to be rendered</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the rendering result</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2555">yii\web\helpers\CHtml.php#L2555</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">renderAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color: #0000BB">$specialAttributes</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'async'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'autofocus'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'autoplay'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'checked'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controls'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'declare'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'defer'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'formnovalidate'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'hidden'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'ismap'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'loop'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'multiple'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'muted'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'nohref'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'noresize'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'novalidate'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'open'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'readonly'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'required'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'reversed'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'scoped'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'seamless'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'selected'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'typemustmatch'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">===array())<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$raw</span><span style="color: #007700">=!</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$raw</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$specialAttributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$renderSpecialAttributesValue</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'="'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$value</span><span style="color: #007700">!==</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">'&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'="'&nbsp;</span><span style="color: #007700">.&nbsp;(</span><span style="color: #0000BB">$raw&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #DD0000">'"'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Renders the HTML tag attributes.
Since version 1.1.5, attributes whose value is null will not be rendered.
Special attributes, such as 'checked', 'disabled', 'readonly', will be rendered
properly based on their corresponding boolean value.</p>


<div class="detailHeader" id="resetButton-detail">
resetButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>resetButton</b>(string $label='reset', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button label</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L511">yii\web\helpers\CHtml.php#L511</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">resetButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #DD0000">'reset'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'reset'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">button</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a reset button.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="resolveName-detail">
resolveName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>resolveName</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string &$attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2473">yii\web\helpers\CHtml.php#L2473</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&amp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">modelName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #DD0000">'['</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pos</span><span style="color: #007700">!==</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;name[a][b]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">.</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">).</span><span style="color: #DD0000">']'</span><span style="color: #007700">.</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strrpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #DD0000">']'</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">!==</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;e.g.&nbsp;[a][b]name<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sub</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">.</span><span style="color: #0000BB">$sub</span><span style="color: #007700">.</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">.</span><span style="color: #DD0000">']'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\](\w+\[.*)$/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">.</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">']'</span><span style="color: #007700">,</span><span style="color: #DD0000">']['</span><span style="color: #007700">,</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">strtr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,array(</span><span style="color: #DD0000">']['</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">']'</span><span style="color: #007700">,</span><span style="color: #DD0000">'['</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">']'</span><span style="color: #007700">)),</span><span style="color: #DD0000">']'</span><span style="color: #007700">)).</span><span style="color: #DD0000">']'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$modelName</span><span style="color: #007700">.</span><span style="color: #DD0000">'['</span><span style="color: #007700">.</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">.</span><span style="color: #DD0000">']'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates input name for a model attribute.
Note, the attribute name may be modified after calling this method if the name
contains square brackets (mainly used in tabular input) before the real attribute name.</p>


<div class="detailHeader" id="resolveNameID-detail">
resolveNameID()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>resolveNameID</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string &$attribute, array &$htmlOptions)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the HTML options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2455">yii\web\helpers\CHtml.php#L2455</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveNameID</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,&amp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,&amp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">resolveName</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />}</span>
</span>
</code></div>
</div>
<p>Generates input name and ID for a model attribute.
This method will update the HTML options by setting appropriate 'name' and 'id' attributes.
This method may also modify the attribute name if the name
contains square brackets (mainly used in tabular input).</p>


<div class="detailHeader" id="resolveValue-detail">
resolveValue()
<span class="detailHeaderTag">
method
(available since v1.1.3)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>resolveValue</b>(<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> $model, string $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol"><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
  <td class="paramDescCol">the data model</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the attribute name</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2506">yii\web\helpers\CHtml.php#L2506</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">resolveValue</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #DD0000">'['</span><span style="color: #007700">))!==</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$pos</span><span style="color: #007700">===</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;</span><span style="color: #FF8000">//&nbsp;[a]name[b][c],&nbsp;should&nbsp;ignore&nbsp;[a]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\](\w+(\[.+)?)/'</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$matches</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">=</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];&nbsp;</span><span style="color: #FF8000">//&nbsp;we&nbsp;get:&nbsp;name[b][c]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if((</span><span style="color: #0000BB">$pos</span><span style="color: #007700">=</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #DD0000">'['</span><span style="color: #007700">))===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">=</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">']['</span><span style="color: #007700">,</span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$pos</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">),</span><span style="color: #DD0000">']'</span><span style="color: #007700">))&nbsp;as&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">instanceof&nbsp;</span><span style="color: #0000BB">ArrayAccess</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #0000BB">$value</span><span style="color: #007700">[</span><span style="color: #0000BB">$id</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Evaluates the attribute value of the model.
This method can recognize the attribute name written in array format.
For example, if the attribute name is 'name[a][b]', the value "$model->name['a']['b']" will be returned.</p>


<div class="detailHeader" id="script-detail">
script()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>script</b>(string $text, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$text</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the JavaScript to be enclosed</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the enclosed JavaScript</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L287">yii\web\helpers\CHtml.php#L287</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">script</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">,array&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultHtmlOptions</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'text/javascript'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultHtmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'script'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #DD0000">"\n/*&lt;![CDATA[*/\n</span><span style="color: #007700">{</span><span style="color: #0000BB">$text</span><span style="color: #007700">}</span><span style="color: #DD0000">\n/*]]&gt;*/\n"</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Encloses the given JavaScript within a script tag.</p>


<div class="detailHeader" id="scriptFile-detail">
scriptFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>scriptFile</b>(string $url, array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">URL for the JavaScript file</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the JavaScript file tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L302">yii\web\helpers\CHtml.php#L302</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">scriptFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">,array&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultHtmlOptions</span><span style="color: #007700">=array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'text/javascript'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'src'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">$url<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultHtmlOptions</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'script'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,</span><span style="color: #DD0000">''</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Includes a JavaScript file.</p>


<div class="detailHeader" id="setModelNameConverter-detail">
setModelNameConverter()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>setModelNameConverter</b>(callback|null $converter)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$converter</td>
  <td class="paramTypeCol">callback|null</td>
  <td class="paramDescCol">the new generator, the model or class name will be passed to the this callback
and result must be a valid value for HTML name attribute.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2194">yii\web\helpers\CHtml.php#L2194</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">setModelNameConverter</span><span style="color: #007700">(</span><span style="color: #0000BB">$converter</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_callable</span><span style="color: #007700">(</span><span style="color: #0000BB">$converter</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_modelNameConverter</span><span style="color: #007700">=</span><span style="color: #0000BB">$converter</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$converter</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$_modelNameConverter</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'yii'</span><span style="color: #007700">,</span><span style="color: #DD0000">'The&nbsp;$converter&nbsp;argument&nbsp;must&nbsp;be&nbsp;a&nbsp;valid&nbsp;callback&nbsp;or&nbsp;null.'</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Set generator used in the <?php echo CHtml::link('CHtml::modelName()', array('/site/doc', 'view' => 'CHtml', '#' => 'modelName')); ?> method. You can use the `null` value to restore default
generator.</p>


<div class="detailHeader" id="statefulForm-detail">
statefulForm()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>statefulForm</b>(mixed $action='', string $method='post', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the form action URL (see <?php echo CHtml::link('normalizeUrl', array('/site/doc', 'view' => 'CHtml', '#' => 'normalizeUrl')); ?> for details about this parameter.)</td>
</tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">form method (e.g. post, get)</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes (see <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?>).</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated form tag.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L379">yii\web\helpers\CHtml.php#L379</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">statefulForm</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">=</span><span style="color: #DD0000">'post'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$action</span><span style="color: #007700">,</span><span style="color: #0000BB">$method</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'div'</span><span style="color: #007700">,array(</span><span style="color: #DD0000">'style'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'display:none'</span><span style="color: #007700">),</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">pageStateField</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Generates a stateful form tag.
A stateful form tag is similar to <?php echo CHtml::link('form', array('/site/doc', 'view' => 'CHtml', '#' => 'form')); ?> except that it renders an additional
hidden field for storing persistent page states. You should use this method to generate
a form tag if you want to access persistent page states when the form is submitted.</p>


<div class="detailHeader" id="submitButton-detail">
submitButton()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>submitButton</b>(string $label='submit', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$label</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the button label</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated button tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L497">yii\web\helpers\CHtml.php#L497</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">submitButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">=</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]=</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">button</span><span style="color: #007700">(</span><span style="color: #0000BB">$label</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a submit button.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
</ul>
</div>

<div class="detailHeader" id="tag-detail">
tag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>tag</b>(string $tag, array $htmlOptions=array (
), mixed $content=false, boolean $closeTag=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the tag name</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the element attributes. The values will be HTML-encoded using <?php echo CHtml::link('encode()', array('/site/doc', 'view' => 'CHtml', '#' => 'encode')); ?>.
If an 'encode' attribute is given and its value is false,
the rest of the attribute values will NOT be HTML-encoded.
Since version 1.1.5, attributes whose value is null will not be rendered.</td>
</tr>
<tr>
  <td class="paramNameCol">$content</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the content to be enclosed between open and close element tags. It will not be HTML-encoded.
If false, it means there is no body content.</td>
</tr>
<tr>
  <td class="paramNameCol">$closeTag</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">whether to generate the close tag.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated HTML element tag</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L156">yii\web\helpers\CHtml.php#L156</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array(),</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,</span><span style="color: #0000BB">$closeTag</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$tag&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">renderAttributes</span><span style="color: #007700">(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$content</span><span style="color: #007700">===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$closeTag&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$closeSingleTags&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.</span><span style="color: #DD0000">'&nbsp;/&gt;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$closeTag&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$content</span><span style="color: #007700">.</span><span style="color: #DD0000">'&lt;/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$tag</span><span style="color: #007700">.</span><span style="color: #DD0000">'&gt;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">.</span><span style="color: #DD0000">'&gt;'</span><span style="color: #007700">.</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates an HTML element.</p>


<div class="detailHeader" id="telField-detail">
telField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>telField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L695">yii\web\helpers\CHtml.php#L695</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">telField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'tel'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a telephone field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="textArea-detail">
textArea()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>textArea</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated text area</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L773">yii\web\helpers\CHtml.php#L773</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">textArea</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]=</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]=</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getIdByName</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]===</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">tag</span><span style="color: #007700">(</span><span style="color: #DD0000">'textarea'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">,isset(</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">[</span><span style="color: #DD0000">'encode'</span><span style="color: #007700">]&nbsp;?&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>Generates a text area input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="textField-detail">
textField()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>textField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L593">yii\web\helpers\CHtml.php#L593</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">textField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a text field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="timeField-detail">
timeField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>timeField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L661">yii\web\helpers\CHtml.php#L661</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">timeField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'time'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a time field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="urlField-detail">
urlField()
<span class="detailHeaderTag">
method
(available since v1.1.14)
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>urlField</b>(string $name, string $value='', array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input name</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the input value</td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">additional HTML attributes. Besides normal HTML attributes, a few special
attributes are also recognized (see <?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?> and <?php echo CHtml::link('tag', array('/site/doc', 'view' => 'CHtml', '#' => 'tag')); ?> for more details.)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the generated input field</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L712">yii\web\helpers\CHtml.php#L712</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">urlField</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">=array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">clientChange</span><span style="color: #007700">(</span><span style="color: #DD0000">'change'</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">inputField</span><span style="color: #007700">(</span><span style="color: #DD0000">'url'</span><span style="color: #007700">,</span><span style="color: #0000BB">$name</span><span style="color: #007700">,</span><span style="color: #0000BB">$value</span><span style="color: #007700">,</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates a URL field input.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><?php echo CHtml::link('clientChange', array('/site/doc', 'view' => 'CHtml', '#' => 'clientChange')); ?></li>
	<li><?php echo CHtml::link('inputField', array('/site/doc', 'view' => 'CHtml', '#' => 'inputField')); ?></li>
</ul>
</div>

<div class="detailHeader" id="value-detail">
value()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static mixed <b>value</b>(mixed $model, mixed $attribute, mixed $defaultValue=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$model</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the model. This can be either an object or an array.</td>
</tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute name (use dot to concatenate multiple attributes)
or anonymous function (PHP 5.3+). Remember that functions created by "create_function"
are not supported by this method. Also note that numeric value is meaningless when
first parameter is object typed.</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the default value to return when the attribute does not exist.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the attribute value.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework\web\helpers\CHtml.php#L2130">yii\web\helpers\CHtml.php#L2130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">value</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_scalar</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">===</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach(</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">,</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)&nbsp;as&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$model</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">=</span><span style="color: #0000BB">$model</span><span style="color: #007700">[</span><span style="color: #0000BB">$name</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">call_user_func</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">,</span><span style="color: #0000BB">$model</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Evaluates the value of the specified attribute for the given model.
The attribute name can be given in a dot syntax. For example, if the attribute
is "author.firstName", this method will return the value of "$model->author->firstName".
A default value (passed as the last parameter) will be returned if the attribute does
not exist or is broken in the middle (e.g. $model->author is null).
The model can be either an object or an array. If the latter, the attribute is treated
as a key of the array. For the example of "author.firstName", if would mean the array value
"$model['author']['firstName']".
<br/><br/>
Anonymous function could also be used for attribute calculation since 1.1.13
($attribute parameter; PHP 5.3+ only) as follows:
<pre>
$taskClosedSecondsAgo=CHtml::value($closedTask,function($model) {
	return time()-$model-&gt;closed_at;
});
</pre>
Your anonymous function should receive one argument, which is the model, the current
value is calculated from. This feature could be used together with the <?php echo CHtml::link('listData', array('/site/doc', 'view' => 'CHtml', '#' => 'listData')); ?>.
Please refer to its documentation for more details.</p>


