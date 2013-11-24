<?php
$this->pageTitle = $this->pageHeading = 'CMarkdownParser';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'CMarkdownParser';
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
  <td><?php echo CHtml::link('system.utils', array('/site/doc', '#' => 'system.utils')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class CMarkdownParser &raquo;
MarkdownExtra_Parser &raquo;
Markdown_Parser</td>
</tr>
<tr>
  <th>Since</th>
  <td>1.0</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php">yii/utils/CMarkdownParser.php</a></td>
</tr>
<tr>
  <th>Author</th>
  <td>Qiang Xue &lt;qiang.xue@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
CMarkdownParser is a wrapper of <a href="http://michelf.com/projects/php-markdown/extra/">MarkdownExtra_Parser</a>.
<br/><br/>
CMarkdownParser extends MarkdownExtra_Parser by using Text_Highlighter
to highlight code blocks with specific language syntax.
In particular, if a code block starts with the following:
<pre>
[language]
</pre>
The syntax for the specified language will be used to highlight
code block. The languages supported include (case-insensitive):
ABAP, CPP, CSS, DIFF, DTD, HTML, JAVA, JAVASCRIPT,
MYSQL, PERL, PHP, PYTHON, RUBY, SQL, XML
<br/><br/>
You can also specify options to be passed to the syntax highlighter. For example:
<pre>
[php showLineNumbers=1]
</pre>
which will show line numbers in each line of the code block.
<br/><br/>
For details about the standard markdown syntax, please check the following:
<ul>
<li><a href="http://daringfireball.net/projects/markdown/syntax">official markdown syntax</a></li>
<li><a href="http://michelf.com/projects/php-markdown/extra/">markdown extra syntax</a></li>
</ul></div>
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
<tr class="inherited" id="abbr_desciptions">
  <td>abbr_desciptions</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="abbr_word_re">
  <td>abbr_word_re</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="auto_close_tags_re">
  <td>auto_close_tags_re</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="block_gamut">
  <td>block_gamut</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="block_tags_re">
  <td>block_tags_re</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="clean_tags_re">
  <td>clean_tags_re</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="contain_span_tags_re">
  <td>contain_span_tags_re</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="context_block_tags_re">
  <td>context_block_tags_re</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr id="defaultCssFile">
  <td><?php echo CHtml::link('defaultCssFile', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'defaultCssFile-detail')); ?></td>
  <td>string</td>
  <td>The default CSS file that is used to highlight code blocks.</td>
  <td>CMarkdownParser</td>
</tr>
<tr class="inherited" id="document_gamut">
  <td>document_gamut</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="em_relist">
  <td>em_relist</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="em_strong_prepared_relist">
  <td>em_strong_prepared_relist</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="em_strong_relist">
  <td>em_strong_relist</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="empty_element_suffix">
  <td>empty_element_suffix</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="escape_chars">
  <td>escape_chars</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="escape_chars_re">
  <td>escape_chars_re</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="fn_backlink_class">
  <td>fn_backlink_class</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="fn_backlink_title">
  <td>fn_backlink_title</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="fn_id_prefix">
  <td>fn_id_prefix</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="fn_link_class">
  <td>fn_link_class</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="fn_link_title">
  <td>fn_link_title</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="footnote_counter">
  <td>footnote_counter</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="footnotes">
  <td>footnotes</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="footnotes_ordered">
  <td>footnotes_ordered</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr id="highlightCssClass">
  <td><?php echo CHtml::link('highlightCssClass', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'highlightCssClass-detail')); ?></td>
  <td>string</td>
  <td>the css class for the div element containing
the code block that is highlighted.</td>
  <td>CMarkdownParser</td>
</tr>
<tr class="inherited" id="html_hashes">
  <td>html_hashes</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="in_anchor">
  <td>in_anchor</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="list_level">
  <td>list_level</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="nested_brackets_depth">
  <td>nested_brackets_depth</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="nested_brackets_re">
  <td>nested_brackets_re</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="nested_url_parenthesis_depth">
  <td>nested_url_parenthesis_depth</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="nested_url_parenthesis_re">
  <td>nested_url_parenthesis_re</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="no_entities">
  <td>no_entities</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="no_markup">
  <td>no_markup</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="predef_abbr">
  <td>predef_abbr</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="predef_titles">
  <td>predef_titles</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="predef_urls">
  <td>predef_urls</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr id="purifierOptions">
  <td><?php echo CHtml::link('purifierOptions', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'purifierOptions-detail')); ?></td>
  <td>mixed</td>
  <td>the options to be passed to {@link http://htmlpurifier.</td>
  <td>CMarkdownParser</td>
</tr>
<tr class="inherited" id="span_gamut">
  <td>span_gamut</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="strong_relist">
  <td>strong_relist</td>
  <td></td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="tab_width">
  <td>tab_width</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="titles">
  <td>titles</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="urls">
  <td>urls</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="utf8_strlen">
  <td>utf8_strlen</td>
  <td></td>
  <td></td>
  <td>Markdown_Parser</td>
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
<tr class="inherited" id="__construct">
  <td>__construct()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_appendFootnotes_callback">
  <td>_appendFootnotes_callback()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_detab_callback">
  <td>_detab_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doAbbreviations_callback">
  <td>_doAbbreviations_callback()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_doAnchors_inline_callback">
  <td>_doAnchors_inline_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doAnchors_reference_callback">
  <td>_doAnchors_reference_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doAutoLinks_email_callback">
  <td>_doAutoLinks_email_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doAutoLinks_url_callback">
  <td>_doAutoLinks_url_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doBlockQuotes_callback">
  <td>_doBlockQuotes_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doBlockQuotes_callback2">
  <td>_doBlockQuotes_callback2()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr id="_doCodeBlocks_callback">
  <td><?php echo CHtml::link('_doCodeBlocks_callback()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => '_doCodeBlocks_callback-detail')); ?></td>
  <td>Callback function when a code block is matched.</td>
  <td>CMarkdownParser</td>
</tr>
<tr class="inherited" id="_doDefLists_callback">
  <td>_doDefLists_callback()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr id="_doFencedCodeBlocks_callback">
  <td><?php echo CHtml::link('_doFencedCodeBlocks_callback()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => '_doFencedCodeBlocks_callback-detail')); ?></td>
  <td>Callback function when a fenced code block is matched.</td>
  <td>CMarkdownParser</td>
</tr>
<tr class="inherited" id="_doFencedCodeBlocks_newlines">
  <td>_doFencedCodeBlocks_newlines()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_doHardBreaks_callback">
  <td>_doHardBreaks_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doHeaders_attr">
  <td>_doHeaders_attr()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_doHeaders_callback_atx">
  <td>_doHeaders_callback_atx()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_doHeaders_callback_setext">
  <td>_doHeaders_callback_setext()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_doImages_inline_callback">
  <td>_doImages_inline_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doImages_reference_callback">
  <td>_doImages_reference_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doLists_callback">
  <td>_doLists_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_doTable_callback">
  <td>_doTable_callback()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_doTable_leadingPipe_callback">
  <td>_doTable_leadingPipe_callback()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_hashHTMLBlocks_callback">
  <td>_hashHTMLBlocks_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_hashHTMLBlocks_inHTML">
  <td>_hashHTMLBlocks_inHTML()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_hashHTMLBlocks_inMarkdown">
  <td>_hashHTMLBlocks_inMarkdown()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_initDetab">
  <td>_initDetab()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_processDefListItems_callback_dd">
  <td>_processDefListItems_callback_dd()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_processDefListItems_callback_dt">
  <td>_processDefListItems_callback_dt()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_processListItems_callback">
  <td>_processListItems_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_stripAbbreviations_callback">
  <td>_stripAbbreviations_callback()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_stripFootnotes_callback">
  <td>_stripFootnotes_callback()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="_stripLinkDefinitions_callback">
  <td>_stripLinkDefinitions_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="_unhash_callback">
  <td>_unhash_callback()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="appendFootnotes">
  <td>appendFootnotes()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="detab">
  <td>detab()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doAbbreviations">
  <td>doAbbreviations()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="doAnchors">
  <td>doAnchors()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doAutoLinks">
  <td>doAutoLinks()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doBlockQuotes">
  <td>doBlockQuotes()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doCodeBlocks">
  <td>doCodeBlocks()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doDefLists">
  <td>doDefLists()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="doFencedCodeBlocks">
  <td>doFencedCodeBlocks()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="doFootnotes">
  <td>doFootnotes()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="doHardBreaks">
  <td>doHardBreaks()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doHeaders">
  <td>doHeaders()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="doHorizontalRules">
  <td>doHorizontalRules()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doImages">
  <td>doImages()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doItalicsAndBold">
  <td>doItalicsAndBold()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doLists">
  <td>doLists()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="doTables">
  <td>doTables()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="encodeAmpsAndAngles">
  <td>encodeAmpsAndAngles()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="encodeAttribute">
  <td>encodeAttribute()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="encodeEmailAddress">
  <td>encodeEmailAddress()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="formParagraphs">
  <td>formParagraphs()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr id="getDefaultCssFile">
  <td><?php echo CHtml::link('getDefaultCssFile()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'getDefaultCssFile-detail')); ?></td>
  <td>Returns the default CSS file that is used to highlight code blocks.</td>
  <td>CMarkdownParser</td>
</tr>
<tr id="getHighlightConfig">
  <td><?php echo CHtml::link('getHighlightConfig()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'getHighlightConfig-detail')); ?></td>
  <td>Generates the config for the highlighter.</td>
  <td>CMarkdownParser</td>
</tr>
<tr id="getHiglightConfig">
  <td><?php echo CHtml::link('getHiglightConfig()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'getHiglightConfig-detail')); ?></td>
  <td>Generates the config for the highlighter.</td>
  <td>CMarkdownParser</td>
</tr>
<tr class="inherited" id="handleSpanToken">
  <td>handleSpanToken()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="hashBlock">
  <td>hashBlock()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="hashClean">
  <td>hashClean()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="hashHTMLBlocks">
  <td>hashHTMLBlocks()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="hashPart">
  <td>hashPart()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="makeCodeSpan">
  <td>makeCodeSpan()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="outdent">
  <td>outdent()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="parseSpan">
  <td>parseSpan()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="prepareItalicsAndBold">
  <td>prepareItalicsAndBold()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="processDefListItems">
  <td>processDefListItems()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="processListItems">
  <td>processListItems()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="runBasicBlockGamut">
  <td>runBasicBlockGamut()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="runBlockGamut">
  <td>runBlockGamut()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="runSpanGamut">
  <td>runSpanGamut()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr id="safeTransform">
  <td><?php echo CHtml::link('safeTransform()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'safeTransform-detail')); ?></td>
  <td>Transforms the content and purifies the result.</td>
  <td>CMarkdownParser</td>
</tr>
<tr class="inherited" id="setup">
  <td>setup()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="stripAbbreviations">
  <td>stripAbbreviations()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="stripFootnotes">
  <td>stripFootnotes()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="stripLinkDefinitions">
  <td>stripLinkDefinitions()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="teardown">
  <td>teardown()</td>
  <td></td>
  <td>MarkdownExtra_Parser</td>
</tr>
<tr class="inherited" id="transform">
  <td>transform()</td>
  <td></td>
  <td>Markdown_Parser</td>
</tr>
<tr class="inherited" id="unhash">
  <td>unhash()</td>
  <td></td>
  <td>Markdown_Parser</td>
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
<tr id="createHighLighter">
  <td><?php echo CHtml::link('createHighLighter()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'createHighLighter-detail')); ?></td>
  <td>Creates a highlighter instance.</td>
  <td>CMarkdownParser</td>
</tr>
<tr id="getHighlightTag">
  <td><?php echo CHtml::link('getHighlightTag()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'getHighlightTag-detail')); ?></td>
  <td>Returns the user-entered highlighting options.</td>
  <td>CMarkdownParser</td>
</tr>
<tr id="getInlineOption">
  <td><?php echo CHtml::link('getInlineOption()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'getInlineOption-detail')); ?></td>
  <td>Retrieves the specified configuration.</td>
  <td>CMarkdownParser</td>
</tr>
<tr id="highlightCodeBlock">
  <td><?php echo CHtml::link('highlightCodeBlock()', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'highlightCodeBlock-detail')); ?></td>
  <td>Highlights the code block.</td>
  <td>CMarkdownParser</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="defaultCssFile-detail">
defaultCssFile<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
string <b>defaultCssFile</b>;</div>

<p>The default CSS file that is used to highlight code blocks.</p>


<div class="detailHeader" id="highlightCssClass-detail">
highlightCssClass<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public string <b>$highlightCssClass</b>;</div>

<p>the css class for the div element containing
the code block that is highlighted. Defaults to 'hl-code'.</p>


<div class="detailHeader" id="purifierOptions-detail">
purifierOptions<span class="detailHeaderTag">
property
 (available since v1.1.4)
</span>
</div>

<div class="signature">
public mixed <b>$purifierOptions</b>;</div>

<p>the options to be passed to <a href="http://htmlpurifier.org">HTML Purifier</a>.
This can be a HTMLPurifier_Config object,  an array of directives (Namespace.Directive => Value)
or the filename of an ini file.
This property is used only when <?php echo CHtml::link('safeTransform', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'safeTransform')); ?> is invoked.</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li><a href="http://htmlpurifier.org/live/configdoc/plain.html">http://htmlpurifier.org/live/configdoc/plain.html</a></li>
</ul>
</div>

<h2>Method Details</h2>

<div class="detailHeader" id="_doCodeBlocks_callback-detail">
_doCodeBlocks_callback()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>_doCodeBlocks_callback</b>(array $matches)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$matches</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">matches</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the highlighted code block</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L97">yii/utils/CMarkdownParser.php#L97</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">_doCodeBlocks_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$codeblock&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">outdent</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$codeblock&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">highlightCodeBlock</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">))&nbsp;!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hashBlock</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">_doCodeBlocks_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Callback function when a code block is matched.</p>


<div class="detailHeader" id="_doFencedCodeBlocks_callback-detail">
_doFencedCodeBlocks_callback()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>_doFencedCodeBlocks_callback</b>(array $matches)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$matches</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">matches</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the highlighted code block</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L111">yii/utils/CMarkdownParser.php#L111</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">_doFencedCodeBlocks_callback</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">hashBlock</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">highlightCodeBlock</span><span style="color: #007700">(</span><span style="color: #0000BB">$matches</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">])).</span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Callback function when a fenced code block is matched.</p>


<div class="detailHeader" id="createHighLighter-detail">
createHighLighter()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected Text_Highlighter <b>createHighLighter</b>(string $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the user-entered options</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">Text_Highlighter</td>
  <td class="paramDescCol">the highlighter instance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L152">yii/utils/CMarkdownParser.php#L152</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">createHighLighter</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">class_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'Text_Highlighter'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require_once(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.vendors.TextHighlighter.Text.Highlighter'</span><span style="color: #007700">).</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;require_once(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.vendors.TextHighlighter.Text.Highlighter.Renderer.Html'</span><span style="color: #007700">).</span><span style="color: #DD0000">'.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$lang&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\s+/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">,</span><span style="color: #0000BB">1</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,-</span><span style="color: #0000BB">1</span><span style="color: #007700">),</span><span style="color: #0000BB">2</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$highlighter&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Text_Highlighter</span><span style="color: #007700">::</span><span style="color: #0000BB">factory</span><span style="color: #007700">(</span><span style="color: #0000BB">$lang</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$highlighter</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$highlighter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setRenderer</span><span style="color: #007700">(new&nbsp;</span><span style="color: #0000BB">Text_Highlighter_Renderer_Html</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHighlightConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$highlighter</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Creates a highlighter instance.</p>


<div class="detailHeader" id="getDefaultCssFile-detail">
getDefaultCssFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getDefaultCssFile</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the default CSS file that is used to highlight code blocks.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L87">yii/utils/CMarkdownParser.php#L87</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDefaultCssFile</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'system.vendors.TextHighlighter.highlight'</span><span style="color: #007700">).</span><span style="color: #DD0000">'.css'</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getHighlightConfig-detail">
getHighlightConfig()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getHighlightConfig</b>(string $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user-entered options</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the highlighter config</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L171">yii/utils/CMarkdownParser.php#L171</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHighlightConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'use_language'</span><span style="color: #007700">=&gt;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInlineOption</span><span style="color: #007700">(</span><span style="color: #DD0000">'showLineNumbers'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'numbers'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">HL_NUMBERS_LI</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">[</span><span style="color: #DD0000">'tabsize'</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInlineOption</span><span style="color: #007700">(</span><span style="color: #DD0000">'tabSize'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$config</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generates the config for the highlighter.</p>


<div class="detailHeader" id="getHighlightTag-detail">
getHighlightTag()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>getHighlightTag</b>(string $codeblock)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$codeblock</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">code block with highlighting options.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the user-entered highlighting options. Null if no option is entered.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L140">yii/utils/CMarkdownParser.php#L140</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getHighlightTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$str&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">trim</span><span style="color: #007700">(</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">"/\r|\n/"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #DD0000">'['&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #DD0000">']'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns the user-entered highlighting options.</p>


<div class="detailHeader" id="getHiglightConfig-detail">
getHiglightConfig()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getHiglightConfig</b>(string $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">user-entered options</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the highlighter config</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L189">yii/utils/CMarkdownParser.php#L189</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getHiglightConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHighlightConfig</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Generates the config for the highlighter.
<br/><br/>
NOTE: This method is deprecated due to a mistake in the method name.
Use <?php echo CHtml::link('getHighlightConfig', array('/site/doc', 'view' => 'CMarkdownParser', '#' => 'getHighlightConfig')); ?> instead of this.</p>


<div class="detailHeader" id="getInlineOption-detail">
getInlineOption()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected mixed <b>getInlineOption</b>(string $name, string $str, mixed $defaultValue)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the configuration name</td>
</tr>
<tr>
  <td class="paramNameCol">$str</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the user-entered options</td>
</tr>
<tr>
  <td class="paramNameCol">$defaultValue</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">default value if the configuration is not present</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the configuration value</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L201">yii/utils/CMarkdownParser.php#L201</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">getInlineOption</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">preg_match</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">.</span><span style="color: #0000BB">$name</span><span style="color: #007700">.</span><span style="color: #DD0000">'(\s*=\s*(\d+))?/i'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$str</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$v</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">[</span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$defaultValue</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Retrieves the specified configuration.</p>


<div class="detailHeader" id="highlightCodeBlock-detail">
highlightCodeBlock()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected string <b>highlightCodeBlock</b>(string $codeblock)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$codeblock</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the code block</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the highlighted code block. Null if the code block does not need to highlighted</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L121">yii/utils/CMarkdownParser.php#L121</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">highlightCodeBlock</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if((</span><span style="color: #0000BB">$tag</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getHighlightTag</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">))!==</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;(</span><span style="color: #0000BB">$highlighter</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createHighLighter</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$codeblock&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/\A\n+|\n+\z/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$tagLen&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">)+</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$codeblock&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ltrim</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tagLen</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/&lt;span\s+[^&gt;]*&gt;(\s*)&lt;\/span&gt;/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'\1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$highlighter</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">highlight</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"&lt;div&nbsp;class=\"</span><span style="color: #007700">{</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">highlightCssClass</span><span style="color: #007700">}</span><span style="color: #DD0000">\"&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">$output</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;/div&gt;"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"&lt;pre&gt;"</span><span style="color: #007700">.</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$codeblock</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;/pre&gt;"</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Highlights the code block.</p>


<div class="detailHeader" id="safeTransform-detail">
safeTransform()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>safeTransform</b>(string $content)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$content</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the markdown content</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the purified HTML content</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/yiisoft/yii/blob/master/framework/utils/CMarkdownParser.php#L76">yii/utils/CMarkdownParser.php#L76</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">safeTransform</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">=</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">transform</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$purifier</span><span style="color: #007700">=new&nbsp;</span><span style="color: #0000BB">HTMLPurifier</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">purifierOptions</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$purifier</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">config</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cache.SerializerPath'</span><span style="color: #007700">,</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getRuntimePath</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$purifier</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">purify</span><span style="color: #007700">(</span><span style="color: #0000BB">$content</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Transforms the content and purifies the result.
This method calls the transform() method to convert
markdown content into HTML content. It then
uses <?php echo CHtml::link('CHtmlPurifier', array('/site/doc', 'view' => 'CHtmlPurifier')); ?> to purify the HTML content
to avoid XSS attacks.</p>


