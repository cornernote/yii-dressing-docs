<?php
$this->pageTitle = $this->pageHeading = 'YdMailChimpAPI';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdMailChimpAPI';
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
  <td>class YdMailChimpAPI</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php">dressing\components\YdMailChimpAPI.php</a></td>
</tr>
</table>

<div id="classDescription">
Class YdMailChimpAPI</div>
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
<tr id="apiUrl">
  <td><?php echo CHtml::link('apiUrl', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'apiUrl-detail')); ?></td>
  <td></td>
  <td>Cache the information on the API location on the server</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="api_key">
  <td><?php echo CHtml::link('api_key', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'api_key-detail')); ?></td>
  <td></td>
  <td>Cache the user api_key so we only have to log in once per client instantiation</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="chunkSize">
  <td><?php echo CHtml::link('chunkSize', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'chunkSize-detail')); ?></td>
  <td></td>
  <td>Default to a 8K chunk size</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="errorCode">
  <td><?php echo CHtml::link('errorCode', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'errorCode-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="errorMessage">
  <td><?php echo CHtml::link('errorMessage', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'errorMessage-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="secure">
  <td><?php echo CHtml::link('secure', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'secure-detail')); ?></td>
  <td></td>
  <td>Cache the user api_key so we only have to log in once per client instantiation</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="timeout">
  <td><?php echo CHtml::link('timeout', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'timeout-detail')); ?></td>
  <td></td>
  <td>Default to a 300 second timeout on server calls</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="version">
  <td><?php echo CHtml::link('version', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'version-detail')); ?></td>
  <td></td>
  <td></td>
  <td>YdMailChimpAPI</td>
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
<tr id="MCAPI">
  <td><?php echo CHtml::link('MCAPI()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'MCAPI-detail')); ?></td>
  <td>Connect to the MailChimp API for a given list. All MCAPI calls require login before functioning</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="apikeyAdd">
  <td><?php echo CHtml::link('apikeyAdd()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'apikeyAdd-detail')); ?></td>
  <td>Add an API Key to your account. We will generate a new key for you and return it.</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="apikeyExpire">
  <td><?php echo CHtml::link('apikeyExpire()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'apikeyExpire-detail')); ?></td>
  <td>Expire a Specific API Key. Note that if you expire all of your keys, a new, valid one will be created and returned</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="apikeys">
  <td><?php echo CHtml::link('apikeys()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'apikeys-detail')); ?></td>
  <td>Retrieve a list of all MailChimp API Keys for this User</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="callMethod">
  <td><?php echo CHtml::link('callMethod()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'callMethod-detail')); ?></td>
  <td>Internal function - proxy method for certain XML-RPC calls | DO NOT CALL</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="callServer">
  <td><?php echo CHtml::link('callServer()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'callServer-detail')); ?></td>
  <td>Actually connect to the server and call the requested methods, parsing the result</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignAbuseReports">
  <td><?php echo CHtml::link('campaignAbuseReports()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignAbuseReports-detail')); ?></td>
  <td>Get all email addresses that complained about a given campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignAdvice">
  <td><?php echo CHtml::link('campaignAdvice()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignAdvice-detail')); ?></td>
  <td>Retrieve the text presented in our app for how a campaign performed and any advice we may have for you - best</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignAnalytics">
  <td><?php echo CHtml::link('campaignAnalytics()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignAnalytics-detail')); ?></td>
  <td>Retrieve the Google Analytics data we've collected for this campaign. Note, requires Google Analytics Add-on to be installed and configured.</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignBounceMessages">
  <td><?php echo CHtml::link('campaignBounceMessages()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignBounceMessages-detail')); ?></td>
  <td>Retrieve the full bounce messages for the given campaign. Note that this can return very large amounts</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignClickDetailAIM">
  <td><?php echo CHtml::link('campaignClickDetailAIM()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignClickDetailAIM-detail')); ?></td>
  <td>Return the list of email addresses that clicked on a given url, and how many times they clicked</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignClickStats">
  <td><?php echo CHtml::link('campaignClickStats()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignClickStats-detail')); ?></td>
  <td>Get an array of the urls being tracked, and their click counts for a given campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignContent">
  <td><?php echo CHtml::link('campaignContent()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignContent-detail')); ?></td>
  <td>Get the content (both html and text) for a campaign either as it would appear in the campaign archive or as the raw, original content</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignCreate">
  <td><?php echo CHtml::link('campaignCreate()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignCreate-detail')); ?></td>
  <td>Create a new draft campaign to send</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignDelete">
  <td><?php echo CHtml::link('campaignDelete()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignDelete-detail')); ?></td>
  <td>Delete a campaign. Seriously, "poof, gone!" - be careful!</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignEcommAddOrder">
  <td><?php echo CHtml::link('campaignEcommAddOrder()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignEcommAddOrder-detail')); ?></td>
  <td>Attach Ecommerce Order Information to a Campaign. This will generall be used by ecommerce package plugins</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignEcommOrders">
  <td><?php echo CHtml::link('campaignEcommOrders()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignEcommOrders-detail')); ?></td>
  <td>Retrieve the Ecommerce Orders tracked by campaignEcommAddOrder()</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignEmailDomainPerformance">
  <td><?php echo CHtml::link('campaignEmailDomainPerformance()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignEmailDomainPerformance-detail')); ?></td>
  <td>Get the top 5 performing email domains for this campaign. Users want more than 5 should use campaign campaignEmailStatsAIM()</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignEmailStatsAIM">
  <td><?php echo CHtml::link('campaignEmailStatsAIM()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignEmailStatsAIM-detail')); ?></td>
  <td>Given a campaign and email address, return the entire click and open history with timestamps, ordered by time</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignEmailStatsAIMAll">
  <td><?php echo CHtml::link('campaignEmailStatsAIMAll()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignEmailStatsAIMAll-detail')); ?></td>
  <td>Given a campaign and correct paging limits, return the entire click and open history with timestamps, ordered by time,</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignFolders">
  <td><?php echo CHtml::link('campaignFolders()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignFolders-detail')); ?></td>
  <td>List all the folders for a user account</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignHardBounces">
  <td><?php echo CHtml::link('campaignHardBounces()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignHardBounces-detail')); ?></td>
  <td>Get all email addresses with Hard Bounces for a given campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignNotOpenedAIM">
  <td><?php echo CHtml::link('campaignNotOpenedAIM()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignNotOpenedAIM-detail')); ?></td>
  <td>Retrieve the list of email addresses that did not open a given campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignOpenedAIM">
  <td><?php echo CHtml::link('campaignOpenedAIM()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignOpenedAIM-detail')); ?></td>
  <td>Retrieve the list of email addresses that opened a given campaign with how many times they opened - note: this AIM function is free and does</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignPause">
  <td><?php echo CHtml::link('campaignPause()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignPause-detail')); ?></td>
  <td>Pause an AutoResponder orRSS campaign from sending</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignReplicate">
  <td><?php echo CHtml::link('campaignReplicate()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignReplicate-detail')); ?></td>
  <td>Replicate a campaign.</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignResume">
  <td><?php echo CHtml::link('campaignResume()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignResume-detail')); ?></td>
  <td>Resume sending an AutoResponder or RSS campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignSchedule">
  <td><?php echo CHtml::link('campaignSchedule()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignSchedule-detail')); ?></td>
  <td>Schedule a campaign to be sent in the future</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignSegmentTest">
  <td><?php echo CHtml::link('campaignSegmentTest()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignSegmentTest-detail')); ?></td>
  <td>Allows one to test their segmentation rules before creating a campaign using them</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignSendNow">
  <td><?php echo CHtml::link('campaignSendNow()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignSendNow-detail')); ?></td>
  <td>Send a given campaign immediately</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignSendTest">
  <td><?php echo CHtml::link('campaignSendTest()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignSendTest-detail')); ?></td>
  <td>Send a test of this campaign to the provided email address</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignSoftBounces">
  <td><?php echo CHtml::link('campaignSoftBounces()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignSoftBounces-detail')); ?></td>
  <td>Get all email addresses with Soft Bounces for a given campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignStats">
  <td><?php echo CHtml::link('campaignStats()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignStats-detail')); ?></td>
  <td>Given a list and a campaign, get all the relevant campaign statistics (opens, bounces, clicks, etc.)</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignTemplates">
  <td><?php echo CHtml::link('campaignTemplates()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignTemplates-detail')); ?></td>
  <td>Retrieve all templates defined for your user account</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignUnschedule">
  <td><?php echo CHtml::link('campaignUnschedule()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignUnschedule-detail')); ?></td>
  <td>Unschedule a campaign that is scheduled to be sent in the future</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignUnsubscribes">
  <td><?php echo CHtml::link('campaignUnsubscribes()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignUnsubscribes-detail')); ?></td>
  <td>Get all unsubscribed email addresses for a given campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaignUpdate">
  <td><?php echo CHtml::link('campaignUpdate()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaignUpdate-detail')); ?></td>
  <td>Update just about any setting for a campaign that has <em>not</em> been sent. See campaignCreate() for details</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="campaigns">
  <td><?php echo CHtml::link('campaigns()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'campaigns-detail')); ?></td>
  <td>Get the list of campaigns and their details matching the specified filters</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="createFolder">
  <td><?php echo CHtml::link('createFolder()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'createFolder-detail')); ?></td>
  <td>Create a new folder to file campaigns in</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="generateText">
  <td><?php echo CHtml::link('generateText()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'generateText-detail')); ?></td>
  <td>Have HTML content auto-converted to a text-only format. You can send: plain HTML, an array of Template content, an existing Campaign Id, or an existing Template Id. Note that this will <b>not</b> save anything to or update any of your lists, campaigns, or templates.</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="getAccountDetails">
  <td><?php echo CHtml::link('getAccountDetails()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'getAccountDetails-detail')); ?></td>
  <td>Retrieve lots of account information including payments made, plan info, some account stats, installed modules,</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="getAffiliateInfo">
  <td><?php echo CHtml::link('getAffiliateInfo()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'getAffiliateInfo-detail')); ?></td>
  <td><strong>DEPRECATED:</strong> Retrieve your User Unique Id and your Affiliate link to display/use for</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="getTimeout">
  <td><?php echo CHtml::link('getTimeout()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'getTimeout-detail')); ?></td>
  <td></td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="httpBuildQuery">
  <td><?php echo CHtml::link('httpBuildQuery()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'httpBuildQuery-detail')); ?></td>
  <td>Re-implement http_build_query for systems that do not already have it</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="inlineCss">
  <td><?php echo CHtml::link('inlineCss()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'inlineCss-detail')); ?></td>
  <td>Send your HTML content to have the CSS inlined and optionally remove the original styles.</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listAbuseReports">
  <td><?php echo CHtml::link('listAbuseReports()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listAbuseReports-detail')); ?></td>
  <td>Get all email addresses that complained about a given campaign</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listBatchSubscribe">
  <td><?php echo CHtml::link('listBatchSubscribe()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listBatchSubscribe-detail')); ?></td>
  <td>Subscribe a batch of email addresses to a list at once</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listBatchUnsubscribe">
  <td><?php echo CHtml::link('listBatchUnsubscribe()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listBatchUnsubscribe-detail')); ?></td>
  <td>Unsubscribe a batch of email addresses to a list</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listGrowthHistory">
  <td><?php echo CHtml::link('listGrowthHistory()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listGrowthHistory-detail')); ?></td>
  <td>Access the Growth History by Month for a given list.</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listInterestGroupAdd">
  <td><?php echo CHtml::link('listInterestGroupAdd()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listInterestGroupAdd-detail')); ?></td>
  <td>Add a single Interest Group - if interest groups for the List are not yet enabled, adding the first</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listInterestGroupDel">
  <td><?php echo CHtml::link('listInterestGroupDel()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listInterestGroupDel-detail')); ?></td>
  <td>Delete a single Interest Group - if the last group for a list is deleted, this will also turn groups for the list off.</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listInterestGroups">
  <td><?php echo CHtml::link('listInterestGroups()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listInterestGroups-detail')); ?></td>
  <td>Get the list of interest groups for a given list, including the label and form information</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listMemberInfo">
  <td><?php echo CHtml::link('listMemberInfo()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listMemberInfo-detail')); ?></td>
  <td>Get all the information for a particular member of a list</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listMembers">
  <td><?php echo CHtml::link('listMembers()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listMembers-detail')); ?></td>
  <td>Get all of the list members for a list that are of a particular status</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listMergeVarAdd">
  <td><?php echo CHtml::link('listMergeVarAdd()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listMergeVarAdd-detail')); ?></td>
  <td>Add a new merge tag to a given list</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listMergeVarDel">
  <td><?php echo CHtml::link('listMergeVarDel()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listMergeVarDel-detail')); ?></td>
  <td>Delete a merge tag from a given list and all its members. Seriously - the data is removed from all members as well!</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listMergeVarUpdate">
  <td><?php echo CHtml::link('listMergeVarUpdate()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listMergeVarUpdate-detail')); ?></td>
  <td>Update most parameters for a merge tag on a given list. You cannot currently change the merge type</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listMergeVars">
  <td><?php echo CHtml::link('listMergeVars()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listMergeVars-detail')); ?></td>
  <td>Get the list of merge tags for a given list, including their name, tag, and required setting</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listSubscribe">
  <td><?php echo CHtml::link('listSubscribe()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listSubscribe-detail')); ?></td>
  <td>Subscribe the provided email to a list. By default this sends a confirmation email - you will not see new members until the link contained in it is clicked!</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listUnsubscribe">
  <td><?php echo CHtml::link('listUnsubscribe()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listUnsubscribe-detail')); ?></td>
  <td>Unsubscribe the given email address from the list</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listUpdateMember">
  <td><?php echo CHtml::link('listUpdateMember()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listUpdateMember-detail')); ?></td>
  <td>Edit the email address, merge fields, and interest groups for a list member</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listWebhookAdd">
  <td><?php echo CHtml::link('listWebhookAdd()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listWebhookAdd-detail')); ?></td>
  <td>Add a new Webhook URL for the given list</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listWebhookDel">
  <td><?php echo CHtml::link('listWebhookDel()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listWebhookDel-detail')); ?></td>
  <td>Delete an existing Webhook URL from a given list</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="listWebhooks">
  <td><?php echo CHtml::link('listWebhooks()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'listWebhooks-detail')); ?></td>
  <td>Return the Webhooks configured for the given list</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="lists">
  <td><?php echo CHtml::link('lists()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'lists-detail')); ?></td>
  <td>Retrieve all of the lists defined for your user account</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="ping">
  <td><?php echo CHtml::link('ping()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'ping-detail')); ?></td>
  <td>"Ping" the MailChimp API - a simple method you can call that will return a constant value as long as everything is good. Note</td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="setTimeout">
  <td><?php echo CHtml::link('setTimeout()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'setTimeout-detail')); ?></td>
  <td></td>
  <td>YdMailChimpAPI</td>
</tr>
<tr id="useSecure">
  <td><?php echo CHtml::link('useSecure()', array('/site/doc', 'view' => 'YdMailChimpAPI', '#' => 'useSecure-detail')); ?></td>
  <td></td>
  <td>YdMailChimpAPI</td>
</tr>
</table>
</div>
<a name="events"></a>

<h2>Property Details</h2>
<div class="detailHeader" id="apiUrl-detail">
apiUrl<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$apiUrl</b>;</div>

<p>Cache the information on the API location on the server</p>


<div class="detailHeader" id="api_key-detail">
api_key<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$api_key</b>;</div>

<p>Cache the user api_key so we only have to log in once per client instantiation</p>


<div class="detailHeader" id="chunkSize-detail">
chunkSize<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$chunkSize</b>;</div>

<p>Default to a 8K chunk size</p>


<div class="detailHeader" id="errorCode-detail">
errorCode<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$errorCode</b>;</div>

<p></p>


<div class="detailHeader" id="errorMessage-detail">
errorMessage<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$errorMessage</b>;</div>

<p></p>


<div class="detailHeader" id="secure-detail">
secure<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$secure</b>;</div>

<p>Cache the user api_key so we only have to log in once per client instantiation</p>


<div class="detailHeader" id="timeout-detail">
timeout<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$timeout</b>;</div>

<p>Default to a 300 second timeout on server calls</p>


<div class="detailHeader" id="version-detail">
version<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public <b>$version</b>;</div>

<p></p>


<h2>Method Details</h2>

<div class="detailHeader" id="MCAPI-detail">
MCAPI()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>MCAPI</b>(string $username_or_apikey, string $password=NULL, $secure=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$username_or_apikey</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp login user name OR apikey - always required</td>
</tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp login password - only required when username passed instead of API Key</td>
</tr>
<tr>
  <td class="paramNameCol">$secure</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L44">dressing\components\YdMailChimpAPI.php#L44</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">MCAPI</span><span style="color: #007700">(</span><span style="color: #0000BB">$username_or_apikey</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$secure</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//do&nbsp;more&nbsp;"caching"&nbsp;of&nbsp;the&nbsp;uuid&nbsp;for&nbsp;those&nbsp;people&nbsp;that&nbsp;keep&nbsp;instantiating&nbsp;this...<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">secure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$secure</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">parse_url</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://api.mailchimp.com/"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">version&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"/?output=php"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(&nbsp;isset(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"mc_api_key"</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"mc_api_key"</span><span style="color: #007700">]!=</span><span style="color: #DD0000">""&nbsp;</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">api_key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"mc_api_key"</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif(&nbsp;</span><span style="color: #0000BB">$username_or_apikey&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;!</span><span style="color: #0000BB">$password&nbsp;</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">api_key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"mc_api_key"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$username_or_apikey</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">api_key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"login"</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">"username"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$username_or_apikey</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"password"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"mc_api_key"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">api_key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p>Connect to the MailChimp API for a given list. All MCAPI calls require login before functioning</p>


<div class="detailHeader" id="apikeyAdd-detail">
apikeyAdd()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>apikeyAdd</b>(string $username, string $password)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$username</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp user name</td>
</tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp password</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a new API Key that can be immediately used.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1449">dressing\components\YdMailChimpAPI.php#L1449</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">apikeyAdd</span><span style="color: #007700">(</span><span style="color: #0000BB">$username</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"username"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"password"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"apikeyAdd"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Add an API Key to your account. We will generate a new key for you and return it.</p>


<div class="detailHeader" id="apikeyExpire-detail">
apikeyExpire()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>apikeyExpire</b>(string $username, string $password)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$username</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp user name</td>
</tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp password</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if it worked, otherwise an error is thrown.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1470">dressing\components\YdMailChimpAPI.php#L1470</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">apikeyExpire</span><span style="color: #007700">(</span><span style="color: #0000BB">$username</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"username"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"password"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"apikeyExpire"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Expire a Specific API Key. Note that if you expire all of your keys, a new, valid one will be created and returned
next time you call login(). If you are trying to shut off access to your account for an old developer, change your 
MailChimp password, then expire all of the keys they had access to. Note that this takes effect immediately, so make 
sure you replace the keys in any working application before expiring them! Consider yourself warned...</p>


<div class="detailHeader" id="apikeys-detail">
apikeys()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>apikeys</b>(string $username, string $password, boolean $expired=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$username</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp user name</td>
</tr>
<tr>
  <td class="paramNameCol">$password</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your MailChimp password</td>
</tr>
<tr>
  <td class="paramNameCol">$expired</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">optional - whether or not to include expired keys, defaults to false</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">an array of API keys including:</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1431">dressing\components\YdMailChimpAPI.php#L1431</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">apikeys</span><span style="color: #007700">(</span><span style="color: #0000BB">$username</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$expired</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"username"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$username</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"password"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"expired"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$expired</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"apikeys"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve a list of all MailChimp API Keys for this User</p>


<div class="detailHeader" id="callMethod-detail">
callMethod()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public mixed <b>callMethod</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">the result of the call</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1497">dressing\components\YdMailChimpAPI.php#L1497</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">callMethod</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"callMethod"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Internal function - proxy method for certain XML-RPC calls | DO NOT CALL</p>


<div class="detailHeader" id="callServer-detail">
callServer()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>callServer</b>($method, $params)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$method</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1506">dressing\components\YdMailChimpAPI.php#L1506</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #0000BB">$method</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//Always&nbsp;include&nbsp;the&nbsp;apikey&nbsp;if&nbsp;we&nbsp;are&nbsp;not&nbsp;logging&nbsp;in<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if(</span><span style="color: #0000BB">$method&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #DD0000">"login"</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$key</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$dc</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"-"</span><span style="color: #007700">,</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">api_key</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$dc</span><span style="color: #007700">)&nbsp;</span><span style="color: #0000BB">$dc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"us1"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl</span><span style="color: #007700">[</span><span style="color: #DD0000">"host"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$dc</span><span style="color: #007700">.</span><span style="color: #DD0000">"."</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl</span><span style="color: #007700">[</span><span style="color: #DD0000">"host"</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"apikey"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">api_key</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessage&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorCode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$post_vars&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">httpBuildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$payload&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"POST&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl</span><span style="color: #007700">[</span><span style="color: #DD0000">"path"</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">"?"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl</span><span style="color: #007700">[</span><span style="color: #DD0000">"query"</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">"&amp;method="&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$method&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"&nbsp;HTTP/1.0\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$payload&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Host:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl</span><span style="color: #007700">[</span><span style="color: #DD0000">"host"</span><span style="color: #007700">]&nbsp;.&nbsp;</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$payload&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"User-Agent:&nbsp;MCAPI/"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">version&nbsp;</span><span style="color: #007700">.</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$payload&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Content-type:&nbsp;application/x-www-form-urlencoded\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$payload&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Content-length:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$post_vars</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">"\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$payload&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #DD0000">"Connection:&nbsp;close&nbsp;\r\n\r\n"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$payload&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">$post_vars</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">secure</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sock&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"ssl://"</span><span style="color: #007700">.</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl</span><span style="color: #007700">[</span><span style="color: #DD0000">"host"</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">443</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeout</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sock&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fsockopen</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">apiUrl</span><span style="color: #007700">[</span><span style="color: #DD0000">"host"</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">80</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeout</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(!</span><span style="color: #0000BB">$sock</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessage&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"Could&nbsp;not&nbsp;connect&nbsp;(ERR&nbsp;</span><span style="color: #0000BB">$errno</span><span style="color: #DD0000">:&nbsp;</span><span style="color: #0000BB">$errstr</span><span style="color: #DD0000">)"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorCode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"-99"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">""</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$payload</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;while(!</span><span style="color: #0000BB">feof</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">chunkSize</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$sock</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_end_clean</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;list(</span><span style="color: #0000BB">$throw</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">)&nbsp;=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\r\n\r\n"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"magic_quotes_runtime"</span><span style="color: #007700">))&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">stripslashes</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$serial&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">unserialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$serial&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">"error"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"Bad&nbsp;Response.&nbsp;&nbsp;Got&nbsp;This:&nbsp;"&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">"code"&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">"-99"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$response&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$serial</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$response</span><span style="color: #007700">[</span><span style="color: #DD0000">"error"</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorMessage&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">[</span><span style="color: #DD0000">"error"</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorCode&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">[</span><span style="color: #DD0000">"code"</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$response</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Actually connect to the server and call the requested methods, parsing the result
You should never have to call this function manually</p>


<div class="detailHeader" id="campaignAbuseReports-detail">
campaignAbuseReports()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignAbuseReports</b>(string $cid, integer $since=NULL, integer $start=0, string $limit=500)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull abuse reports for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$since</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 500, upper limit set at 1000</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional pull only messages since this time - use YYYY-MM-DD HH:II:SS format in <strong>GMT</strong></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">reports the abuse reports for this campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L582">dressing\components\YdMailChimpAPI.php#L582</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignAbuseReports</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">500</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"since"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignAbuseReports"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get all email addresses that complained about a given campaign</p>


<div class="detailHeader" id="campaignAdvice-detail">
campaignAdvice()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignAdvice</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull advice text for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">advice on the campaign's performance</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L604">dressing\components\YdMailChimpAPI.php#L604</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignAdvice</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignAdvice"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve the text presented in our app for how a campaign performed and any advice we may have for you - best
suited for display in customized reports pages. Note: some messages will contain HTML - clean tags as necessary</p>


<div class="detailHeader" id="campaignAnalytics-detail">
campaignAnalytics()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignAnalytics</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull bounces for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">analytics we've collected for the passed campaign.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L631">dressing\components\YdMailChimpAPI.php#L631</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignAnalytics</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignAnalytics"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve the Google Analytics data we've collected for this campaign. Note, requires Google Analytics Add-on to be installed and configured.</p>


<div class="detailHeader" id="campaignBounceMessages-detail">
campaignBounceMessages()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignBounceMessages</b>(string $cid, integer $start=0, integer $limit=25, string $since=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull bounces for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 25, upper limit set at 50</td>
</tr>
<tr>
  <td class="paramNameCol">$since</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional pull only messages since this time - use YYYY-MM-DD HH:II:SS format in <strong>GMT</strong></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">bounces the full bounce messages for this campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L655">dressing\components\YdMailChimpAPI.php#L655</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignBounceMessages</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">25</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"since"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignBounceMessages"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve the full bounce messages for the given campaign. Note that this can return very large amounts
of data depending on how large the campaign was and how much cruft the bounce provider returned. Also,
message over 30 days old are subject to being removed</p>


<div class="detailHeader" id="campaignClickDetailAIM-detail">
campaignClickDetailAIM()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignClickDetailAIM</b>(string $cid, string $url, integer $start=0, integer $limit=1000)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to get click stats for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL of the link that was clicked on</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 1000, upper limit set at 15000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Array of structs containing email addresses and click counts</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L763">dressing\components\YdMailChimpAPI.php#L763</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignClickDetailAIM</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"url"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignClickDetailAIM"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Return the list of email addresses that clicked on a given url, and how many times they clicked</p>


<div class="detailHeader" id="campaignClickStats-detail">
campaignClickStats()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public struct <b>campaignClickStats</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull stats for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">struct</td>
  <td class="paramDescCol">urls will be keys and contain their associated statistics:</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L476">dressing\components\YdMailChimpAPI.php#L476</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignClickStats</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignClickStats"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get an array of the urls being tracked, and their click counts for a given campaign</p>


<div class="detailHeader" id="campaignContent-detail">
campaignContent()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public struct <b>campaignContent</b>(string $cid, bool $for_archive=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to get content for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$for_archive</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">optional controls whether we return the Archive version (true) or the Raw version (false), defaults to true</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">struct</td>
  <td class="paramDescCol">Struct containing all content for the campaign (see Returned Fields for details</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L704">dressing\components\YdMailChimpAPI.php#L704</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignContent</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$for_archive</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"for_archive"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$for_archive</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignContent"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get the content (both html and text) for a campaign either as it would appear in the campaign archive or as the raw, original content</p>


<div class="detailHeader" id="campaignCreate-detail">
campaignCreate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>campaignCreate</b>(string $type, array $options, array $content, array $segment_opts=NULL, array $type_opts=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the Campaign Type to create - one of "regular", "plaintext", "absplit", "rss", "trans", "auto"</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">a hash of the standard options for this campaign :
string list_id the list to send this campaign to- get lists using lists()
string subject the subject line for your campaign message
string from_email the From: email address for your campaign message
string from_name the From: name for your campaign message (not an email address)
string to_email the To: name recipients will see (not email address)
integer template_id optional - use this template to generate the HTML content of the campaign
integer folder_id optional - automatically file the new campaign in the folder_id passed
array tracking optional - set which recipient actions will be tracked, as a struct of boolean values with the following keys: "opens", "html_clicks", and "text_clicks".  By default, opens and HTML clicks will be tracked.
string title optional - an internal name to use for this campaign.  By default, the campaign subject will be used.
boolean authenticate optional - set to true to enable SenderID, DomainKeys, and DKIM authentication, defaults to false.
array analytics optional - if provided, use a struct with "service type" as a key and the "service tag" as a value. For Google, this should be "google"=>"your_google_analytics_key_here". Note that only "google" is currently supported - a Google Analytics tags will be added to all links in the campaign with this string attached. Others may be added in the future
boolean auto_footer optional Whether or not we should auto-generate the footer for your content. Mostly useful for content from URLs or Imports
boolean inline_css optional Whether or not css should be automatically inlined when this campaign is sent, defaults to false.
boolean generate_text optional Whether of not to auto-generate your Text content from the HTML content. Note that this will be ignored if the Text part of the content passed is not empty, defaults to false.</td>
</tr>
<tr>
  <td class="paramNameCol">$content</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">the content for this campaign - use a struct with the following keys: 
"html" for pasted HTML content
"text" for the plain-text version
"url" to have us pull in content from a URL. Note, this will override any other content options - for lists with Email Format options, you'll need to turn on generate_text as well
"archive" to send a Base64 encoded archive file for us to import all media from. Note, this will override any other content options - for lists with Email Format options, you'll need to turn on generate_text as well
"archive_type" optional - only necessary for the "archive" option. Supported formats are: zip, tar.gz, tar.bz2, tar, tgz, tbz . If not included, we will default to zip
If you chose a template instead of pasting in your HTML content, then use "html_" followed by the template sections as keys - for example, use a key of "html_MAIN" to fill in the "MAIN" section of a template. Supported template sections include: "html_HEADER", "html_MAIN", "html_SIDECOLUMN", and "html_FOOTER"</td>
</tr>
<tr>
  <td class="paramNameCol">$segment_opts</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">optional - if you wish to do Segmentation with this campaign this array should contain: see campaignSegmentTest(). It's suggested that you test your options against campaignSegmentTest(). Also, "trans" campaigns <strong>do not</strong> support segmentation.</td>
</tr>
<tr>
  <td class="paramNameCol">$type_opts</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">optional - 
For RSS Campaigns this, array should contain:
string url the URL to pull RSS content from - it will be verified and must exist
For A/B Split campaigns, this array should contain:
string split_test The values to segment based on. Currently, one of: "subject", "from_name", "schedule". NOTE, for "schedule", you will need to call campaignSchedule() separately!
string pick_winner How the winner will be picked, one of: "opens" (by the open_rate), "clicks" (by the click rate), "manual" (you pick manually)
integer wait_units optional the default time unit to wait before auto-selecting a winner - use "3600" for hours, "86400" for days. Defaults to 86400.
integer wait_time optional the number of units to wait before auto-selecting a winner - defaults to 1, so if not set, a winner will be selected after 1 Day.
integer split_size optional this is a percentage of what size the Campaign's List plus any segmentation options results in. "schedule" type forces 50%, all others default to 10%
string from_name_a optional sort of, required when split_test is "from_name"
string from_name_b optional sort of, required when split_test is "from_name"
string from_email_a optional sort of, required when split_test is "from_name"
string from_email_b optional sort of, required when split_test is "from_name"
string subject_a optional sort of, required when split_test is "subject"
string subject_b optional sort of, required when split_test is "subject"
For AutoResponder campaigns, this array should contain:
string offset-units one of "day", "week", "month", "year" - required
string offset-time the number of units, must be a number greater than 0 - required
string offset-dir either "before" or "after"
string event optional "signup" (default) to base this on double-optin signup, "date" or "annual" to base this on merge field in the list
string event-datemerge optional sort of, this is required if the event is "date" or "annual"</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the ID for the created campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L298">dressing\components\YdMailChimpAPI.php#L298</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignCreate</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$segment_opts</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$type_opts</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"type"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"options"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"content"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"segment_opts"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$segment_opts</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"type_opts"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$type_opts</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignCreate"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Create a new draft campaign to send</p>


<div class="detailHeader" id="campaignDelete-detail">
campaignDelete()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignDelete</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the Campaign Id to delete</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the delete succeeds, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L358">dressing\components\YdMailChimpAPI.php#L358</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignDelete</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignDelete"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Delete a campaign. Seriously, "poof, gone!" - be careful!</p>


<div class="detailHeader" id="campaignEcommAddOrder-detail">
campaignEcommAddOrder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>campaignEcommAddOrder</b>(array $order)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$order</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">an array of information pertaining to the order that has completed. Use the following keys:
string id the Order Id
string campaign_id the Campaign Id to track this order with (see the "mc_cid" query string variable a campaign passes)
string email_id the Email Id of the subscriber we should attach this order to (see the "mc_eid" query string variable a campaign passes)
double total The Order Total (ie, the full amount the customer ends up paying)
double shipping optional the total paid for Shipping Fees
double tax optional the total tax paid
string store_id a unique id for the store sending the order in
string store_name optional a "nice" name for the store - typically the base web address (ie, "store.mailchimp.com"). We will automatically update this if it changes (based on store_id)
string plugin_id the MailChimp assigned Plugin Id. Get yours by <a href="/api/register.php">registering here</a>
array items the individual line items for an order using these keys:
<div style="padding-left:30px"><table><tr><td colspan=*>
integer line_num optional the line number of the item on the order. We will generate these if they are not passed
integer product_id the store's internal Id for the product. Lines that do no contain this will be skipped 
string product_name the product name for the product_id associated with this item. We will auto update these as they change (based on product_id)
integer category_id the store's internal Id for the (main) category associated with this product. Our testing has found this to be a "best guess" scenario
string category_name the category name for the category_id this product is in. Our testing has found this to be a "best guess" scenario. Our plugins walk the category heirarchy up and send "Root - SubCat1 - SubCat4", etc.
double qty the quantity of the item ordered
double cost the cost of a single item (ie, not the extended cost of the line)
</td></tr></table></div></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if the data is saved, otherwise an error is thrown.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L840">dressing\components\YdMailChimpAPI.php#L840</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignEcommAddOrder</span><span style="color: #007700">(</span><span style="color: #0000BB">$order</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"order"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$order</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignEcommAddOrder"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Attach Ecommerce Order Information to a Campaign. This will generall be used by ecommerce package plugins 
<a href="/plugins/ecomm360.phtml">that we provide</a> or by 3rd part system developers.</p>


<div class="detailHeader" id="campaignEcommOrders-detail">
campaignEcommOrders()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignEcommOrders</b>(string $cid, integer $start=0, integer $limit=100, string $since=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull bounces for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 100, upper limit set at 500</td>
</tr>
<tr>
  <td class="paramNameCol">$since</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional pull only messages since this time - use YYYY-MM-DD HH:II:SS format in <strong>GMT</strong></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">orders the orders and their details that we've collected for this campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L684">dressing\components\YdMailChimpAPI.php#L684</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignEcommOrders</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">100</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"since"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignEcommOrders"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve the Ecommerce Orders tracked by campaignEcommAddOrder()</p>


<div class="detailHeader" id="campaignEmailDomainPerformance-detail">
campaignEmailDomainPerformance()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignEmailDomainPerformance</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull email domain performance for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">domains email domains and their associated stats</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L506">dressing\components\YdMailChimpAPI.php#L506</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignEmailDomainPerformance</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignEmailDomainPerformance"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get the top 5 performing email domains for this campaign. Users want more than 5 should use campaign campaignEmailStatsAIM()
or campaignEmailStatsAIMAll() and generate any additional stats they require.</p>


<div class="detailHeader" id="campaignEmailStatsAIM-detail">
campaignEmailStatsAIM()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignEmailStatsAIM</b>(string $cid, $email_address)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to get stats for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$email_address</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Array of structs containing the actions (opens and clicks) that the email took, with timestamps</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L783">dressing\components\YdMailChimpAPI.php#L783</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignEmailStatsAIM</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"email_address"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignEmailStatsAIM"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Given a campaign and email address, return the entire click and open history with timestamps, ordered by time</p>


<div class="detailHeader" id="campaignEmailStatsAIMAll-detail">
campaignEmailStatsAIMAll()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignEmailStatsAIMAll</b>(string $cid, integer $start=0, integer $limit=100)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to get stats for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 100, upper limit set at 1000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Array of structs containing actions  (opens and clicks) for each email, with timestamps</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L805">dressing\components\YdMailChimpAPI.php#L805</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignEmailStatsAIMAll</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignEmailStatsAIMAll"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Given a campaign and correct paging limits, return the entire click and open history with timestamps, ordered by time, 
for every user a campaign was delivered to.</p>


<div class="detailHeader" id="campaignFolders-detail">
campaignFolders()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignFolders</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Array of folder structs (see Returned Fields for details)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L426">dressing\components\YdMailChimpAPI.php#L426</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignFolders</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignFolders"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>List all the folders for a user account</p>


<div class="detailHeader" id="campaignHardBounces-detail">
campaignHardBounces()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignHardBounces</b>(string $cid, integer $start=0, integer $limit=1000)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull bounces for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 1000, upper limit set at 15000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Arrays of email addresses with Hard Bounces</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L522">dressing\components\YdMailChimpAPI.php#L522</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignHardBounces</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignHardBounces"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get all email addresses with Hard Bounces for a given campaign</p>


<div class="detailHeader" id="campaignNotOpenedAIM-detail">
campaignNotOpenedAIM()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignNotOpenedAIM</b>(string $cid, integer $start=0, integer $limit=1000)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to get no opens for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 1000, upper limit set at 15000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of email addresses that did not open a campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L742">dressing\components\YdMailChimpAPI.php#L742</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignNotOpenedAIM</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignNotOpenedAIM"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve the list of email addresses that did not open a given campaign</p>


<div class="detailHeader" id="campaignOpenedAIM-detail">
campaignOpenedAIM()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignOpenedAIM</b>(string $cid, integer $start=0, integer $limit=1000)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to get opens for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 1000, upper limit set at 15000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Array of structs containing email addresses and open counts</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L724">dressing\components\YdMailChimpAPI.php#L724</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignOpenedAIM</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignOpenedAIM"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve the list of email addresses that opened a given campaign with how many times they opened - note: this AIM function is free and does
not actually require the AIM module to be installed</p>


<div class="detailHeader" id="campaignPause-detail">
campaignPause()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignPause</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the id of the campaign to pause</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L132">dressing\components\YdMailChimpAPI.php#L132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignPause</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignPause"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Pause an AutoResponder orRSS campaign from sending</p>


<div class="detailHeader" id="campaignReplicate-detail">
campaignReplicate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>campaignReplicate</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the Campaign Id to replicate</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the id of the replicated Campaign created, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L343">dressing\components\YdMailChimpAPI.php#L343</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignReplicate</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignReplicate"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Replicate a campaign.</p>


<div class="detailHeader" id="campaignResume-detail">
campaignResume()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignResume</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the id of the campaign to pause</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L118">dressing\components\YdMailChimpAPI.php#L118</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignResume</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignResume"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Resume sending an AutoResponder or RSS campaign</p>


<div class="detailHeader" id="campaignSchedule-detail">
campaignSchedule()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignSchedule</b>(string $cid, string $schedule_time, string $schedule_time_b=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the id of the campaign to schedule</td>
</tr>
<tr>
  <td class="paramNameCol">$schedule_time</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the time to schedule the campaign. For A/B Split "schedule" campaigns, the time for Group A - in YYYY-MM-DD HH:II:SS format in <strong>GMT</strong></td>
</tr>
<tr>
  <td class="paramNameCol">$schedule_time_b</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional -the time to schedule Group B of an A/B Split "schedule" campaign - in YYYY-MM-DD HH:II:SS format in <strong>GMT</strong></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L102">dressing\components\YdMailChimpAPI.php#L102</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignSchedule</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$schedule_time</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$schedule_time_b</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"schedule_time"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$schedule_time</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"schedule_time_b"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$schedule_time_b</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignSchedule"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Schedule a campaign to be sent in the future</p>


<div class="detailHeader" id="campaignSegmentTest-detail">
campaignSegmentTest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>campaignSegmentTest</b>(string $list_id, array $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$list_id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list to test segmentation on - get lists using lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">with 2 keys:  
string "match" controls whether to use AND or OR when applying your options - expects "<strong>any</strong>" (for OR) or "<strong>all</strong>" (for AND)
array "conditions" - up to 10 different criteria to apply while segmenting. Each criteria row should contain 3 keys - "<strong>field</strong>", "<strong>op</strong>", or "<strong>value</strong>" based on these definitions:
Field = "<strong>date</strong>" : Select based on various dates we track
Valid Op(eration): <strong>eq</strong> (is) / <strong>gt</strong> (after) / <strong>lt</strong> (before)
Valid Values: 
string last_campaign_sent  uses the date of the last campaign sent
string campaign_id - uses the send date of the campaign that carriers the Id submitted - see campaigns()
string YYYY-MM-DD - ny date in the form of YYYY-MM-DD - <em>note:</em> anything that appears to start with YYYY will be treated as a date
Field = "<strong>interests</strong>":
Valid Op(erations): <strong>one</strong> / <strong>none</strong> / <strong>all</strong> 
Valid Values: a comma delimited of interest groups for the list - see listInterestGroups()    
Field = "<strong>aim</strong>"
Valid Op(erations): <strong>open</strong> / <strong>noopen</strong> / <strong>click</strong> / <strong>noclick</strong>
Valid Values: "<strong>any</strong>" or a valid AIM-enabled Campaign that has been sent
Default Field = A Merge Var. Use <strong>Merge0-Merge30</strong> or the <strong>Custom Tag</strong> you've setup for your merge field - see listMergeVars()
Valid Op(erations): 
<strong>eq</strong> (=)/<strong>ne</strong>(!=)/<strong>gt</strong>(>)/<strong>lt</strong>(<)/<strong>like</strong>(like '%blah%')/<strong>nlike</strong>(not like '%blah%')/<strong>starts</strong>(like 'blah%')/<strong>ends</strong>(like '%blah')
Valid Values: any string</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">total The total number of subscribers matching your segmentation options</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L228">dressing\components\YdMailChimpAPI.php#L228</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignSegmentTest</span><span style="color: #007700">(</span><span style="color: #0000BB">$list_id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"list_id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$list_id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"options"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignSegmentTest"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Allows one to test their segmentation rules before creating a campaign using them</p>


<div class="detailHeader" id="campaignSendNow-detail">
campaignSendNow()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignSendNow</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the id of the campaign to resume</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L149">dressing\components\YdMailChimpAPI.php#L149</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignSendNow</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignSendNow"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Send a given campaign immediately</p>


<div class="detailHeader" id="campaignSendTest-detail">
campaignSendTest()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignSendTest</b>(string $cid, array $test_emails=array (
), string $send_type=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the id of the campaign to test</td>
</tr>
<tr>
  <td class="paramNameCol">$test_emails</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">an array of email address to receive the test message</td>
</tr>
<tr>
  <td class="paramNameCol">$send_type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional by default (null) both formats are sent - "html" or "text" send just that format</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L168">dressing\components\YdMailChimpAPI.php#L168</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignSendTest</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$test_emails</span><span style="color: #007700">=array&nbsp;(<br />),&nbsp;</span><span style="color: #0000BB">$send_type</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"test_emails"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$test_emails</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"send_type"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$send_type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignSendTest"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Send a test of this campaign to the provided email address</p>


<div class="detailHeader" id="campaignSoftBounces-detail">
campaignSoftBounces()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignSoftBounces</b>(string $cid, integer $start=0, integer $limit=1000)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull bounces for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 1000, upper limit set at 15000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Arrays of email addresses with Soft Bounces</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L540">dressing\components\YdMailChimpAPI.php#L540</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignSoftBounces</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignSoftBounces"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get all email addresses with Soft Bounces for a given campaign</p>


<div class="detailHeader" id="campaignStats-detail">
campaignStats()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignStats</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull stats for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">struct of the statistics for this campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L457">dressing\components\YdMailChimpAPI.php#L457</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignStats</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignStats"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Given a list and a campaign, get all the relevant campaign statistics (opens, bounces, clicks, etc.)</p>


<div class="detailHeader" id="campaignTemplates-detail">
campaignTemplates()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignTemplates</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">An array of structs, one for each template (see Returned Fields for details)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L190">dressing\components\YdMailChimpAPI.php#L190</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignTemplates</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignTemplates"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve all templates defined for your user account</p>


<div class="detailHeader" id="campaignUnschedule-detail">
campaignUnschedule()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignUnschedule</b>(string $cid)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the id of the campaign to unschedule</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L84">dressing\components\YdMailChimpAPI.php#L84</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignUnschedule</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignUnschedule"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Unschedule a campaign that is scheduled to be sent in the future</p>


<div class="detailHeader" id="campaignUnsubscribes-detail">
campaignUnsubscribes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaignUnsubscribes</b>(string $cid, integer $start=0, integer $limit=1000)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the campaign id to pull bounces for (can be gathered using campaigns())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 1000, upper limit set at 15000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of email addresses that unsubscribed from this campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L558">dressing\components\YdMailChimpAPI.php#L558</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignUnsubscribes</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">1000</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignUnsubscribes"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get all unsubscribed email addresses for a given campaign</p>


<div class="detailHeader" id="campaignUpdate-detail">
campaignUpdate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>campaignUpdate</b>(string $cid, string $name, mixed $value)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$cid</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the Campaign Id to update</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the parameter name ( see campaignCreate() )</td>
</tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">an appropriate value for the parameter ( see campaignCreate() )</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the update succeeds, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L326">dressing\components\YdMailChimpAPI.php#L326</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaignUpdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$cid</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"cid"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$cid</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"name"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"value"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaignUpdate"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Update just about any setting for a campaign that has <em>not</em> been sent. See campaignCreate() for details
<br/><br/>
 Caveats:<br/><ul>
       <li>If you set list_id, all segmentation options will be deleted and must be re-added.</li>
       <li>If you set template_id, you need to follow that up by setting it's 'content'</li>
       <li>If you set segment_opts, you should have tested your options against campaignSegmentTest() as campaignUpdate() will not allow you to set a segment that includes no members.</li></ul></p>


<div class="detailHeader" id="campaigns-detail">
campaigns()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>campaigns</b>(array $filters=array (
), integer $start=0, integer $limit=25)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$filters</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">a hash of filters to apply to this query - all are optional:
string  campaign_id optional - return a single campaign using a know campaign_id
string  list_id optional - the list to send this campaign to- get lists using lists()
integer folder_id optional - only show campaigns from this folder id - get folders using campaignFolders()
string  type optional - return campaigns of a specific type - one of "regular", "plaintext", "absplit", "rss", "trans", "auto"
string  from_name optional - only show campaigns that have this "From Name"
string  from_email optional - only show campaigns that have this "Reply-to Email"
string  title optional - only show campaigns that have this title
string  subject optional - only show campaigns that have this subject
string  sendtime_start optional - only show campaigns that have been sent since this date/time (in GMT) - format is YYYY-MM-DD HH:mm:ss (24hr)
string  sendtime_end optional - only show campaigns that have been sent before this date/time (in GMT) - format is YYYY-MM-DD HH:mm:ss (24hr)
boolean exact optional - flag for whether to filter on exact values when filtering, or search within content for filter values - defaults to true</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional - control paging of campaigns, start results at this campaign #, defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional - control paging of campaigns, number of campaigns to return with each call, defaults to 25 (max=1000)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of campaigns and their associated information (see Returned Fields for description)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L406">dressing\components\YdMailChimpAPI.php#L406</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">campaigns</span><span style="color: #007700">(</span><span style="color: #0000BB">$filters</span><span style="color: #007700">=array&nbsp;(<br />),&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">25</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"filters"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$filters</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"campaigns"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get the list of campaigns and their details matching the specified filters</p>


<div class="detailHeader" id="createFolder-detail">
createFolder()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public integer <b>createFolder</b>(string $name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a unique name for a folder</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">the folder_id of the newly created folder.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1410">dressing\components\YdMailChimpAPI.php#L1410</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">createFolder</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"name"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"createFolder"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Create a new folder to file campaigns in</p>


<div class="detailHeader" id="generateText-detail">
generateText()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>generateText</b>(string $type, mixed $content)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The type of content to parse. Must be one of: "html", "template", "url", "cid" (Campaign Id), or "tid" (Template Id)</td>
</tr>
<tr>
  <td class="paramNameCol">$content</td>
  <td class="paramTypeCol">mixed</td>
  <td class="paramDescCol">The content to use. For "html" expects  a single string value, "template" expects an array like you send to campaignCreate, "url" expects a valid & public URL to pull from, "cid" expects a valid Campaign Id, and "tid" expects a valid Template Id on your account.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the content pass in converted to text.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1376">dressing\components\YdMailChimpAPI.php#L1376</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">generateText</span><span style="color: #007700">(</span><span style="color: #0000BB">$type</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"type"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"content"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$content</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"generateText"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Have HTML content auto-converted to a text-only format. You can send: plain HTML, an array of Template content, an existing Campaign Id, or an existing Template Id. Note that this will <b>not</b> save anything to or update any of your lists, campaigns, or templates.</p>


<div class="detailHeader" id="getAccountDetails-detail">
getAccountDetails()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getAccountDetails</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">containing the details for the account tied to this API Key</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1361">dressing\components\YdMailChimpAPI.php#L1361</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getAccountDetails</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"getAccountDetails"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve lots of account information including payments made, plan info, some account stats, installed modules,
contact info, and more. No private information like Credit Card numbers is available.</p>


<div class="detailHeader" id="getAffiliateInfo-detail">
getAffiliateInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getAffiliateInfo</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">containing your Affilliate Id and full link.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1330">dressing\components\YdMailChimpAPI.php#L1330</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getAffiliateInfo</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"getAffiliateInfo"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p><strong>DEPRECATED:</strong> Retrieve your User Unique Id and your Affiliate link to display/use for 
<a href="/monkeyrewards/" target="_blank">Monkey Rewards</a>. While
we don't use the User Id for any API functions, it can be useful if building up URL strings for things such as the profile editor and sub/unsub links.</p>


<div class="detailHeader" id="getTimeout-detail">
getTimeout()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>getTimeout</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L63">dressing\components\YdMailChimpAPI.php#L63</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getTimeout</span><span style="color: #007700">(){<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeout</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="httpBuildQuery-detail">
httpBuildQuery()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>httpBuildQuery</b>($params, $key=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$key</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1569">dressing\components\YdMailChimpAPI.php#L1569</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">httpBuildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$key</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach((array)&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$val</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$key&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"["&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"]"</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">)&nbsp;||&nbsp;</span><span style="color: #0000BB">is_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">httpBuildQuery</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif(</span><span style="color: #0000BB">$val&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$name&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">"="&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">urlencode</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">"&amp;"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$ret</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Re-implement http_build_query for systems that do not already have it</p>


<div class="detailHeader" id="inlineCss-detail">
inlineCss()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>inlineCss</b>(string $html, bool $strip_css=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$html</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your HTML content</td>
</tr>
<tr>
  <td class="paramNameCol">$strip_css</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">optional Whether you want the CSS &lt;style&gt; tags stripped from the returned document. Defaults to false.</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">Your HTML content with all CSS inlined, just like if we sent it.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1393">dressing\components\YdMailChimpAPI.php#L1393</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">inlineCss</span><span style="color: #007700">(</span><span style="color: #0000BB">$html</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$strip_css</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"html"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$html</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"strip_css"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$strip_css</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"inlineCss"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Send your HTML content to have the CSS inlined and optionally remove the original styles.</p>


<div class="detailHeader" id="listAbuseReports-detail">
listAbuseReports()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>listAbuseReports</b>(string $id, integer $start=0, integer $limit=500, string $since=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to pull abuse reports for (can be gathered using lists())</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data  (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 500, upper limit set at 1000</td>
</tr>
<tr>
  <td class="paramNameCol">$since</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional pull only messages since this time - use YYYY-MM-DD HH:II:SS format in <strong>GMT</strong></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">reports the abuse reports for this campaign</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1285">dressing\components\YdMailChimpAPI.php#L1285</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listAbuseReports</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">500</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"since"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listAbuseReports"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get all email addresses that complained about a given campaign</p>


<div class="detailHeader" id="listBatchSubscribe-detail">
listBatchSubscribe()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public struct <b>listBatchSubscribe</b>(string $id, array $batch, boolean $double_optin=true, boolean $update_existing=false, boolean $replace_interests=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$batch</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">an array of structs for each address to import with two special keys: "EMAIL" for the email address, and "EMAIL_TYPE" for the email type option (html or text)</td>
</tr>
<tr>
  <td class="paramNameCol">$double_optin</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to control whether to send an opt-in confirmation email - defaults to true</td>
</tr>
<tr>
  <td class="paramNameCol">$update_existing</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to control whether to update members that are already subscribed to the list or to return an error, defaults to false (return error)</td>
</tr>
<tr>
  <td class="paramNameCol">$replace_interests</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to determine whether we replace the interest groups with the updated groups provided, or we add the provided groups to the member's interest groups (optional, defaults to true)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">struct</td>
  <td class="paramDescCol">Array of result counts and any errors that occurred</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1181">dressing\components\YdMailChimpAPI.php#L1181</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listBatchSubscribe</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$batch</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$double_optin</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$update_existing</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$replace_interests</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"batch"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$batch</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"double_optin"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$double_optin</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"update_existing"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$update_existing</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"replace_interests"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$replace_interests</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listBatchSubscribe"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Subscribe a batch of email addresses to a list at once</p>


<div class="detailHeader" id="listBatchUnsubscribe-detail">
listBatchUnsubscribe()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public struct <b>listBatchUnsubscribe</b>(string $id, array $emails, boolean $delete_member=false, boolean $send_goodbye=true, boolean $send_notify=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$emails</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">array of email addresses to unsubscribe</td>
</tr>
<tr>
  <td class="paramNameCol">$delete_member</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to completely delete the member from your list instead of just unsubscribing, default to false</td>
</tr>
<tr>
  <td class="paramNameCol">$send_goodbye</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to send the goodbye email to the email addresses, defaults to true</td>
</tr>
<tr>
  <td class="paramNameCol">$send_notify</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to send the unsubscribe notification email to the address defined in the list email notification settings, defaults to false</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">struct</td>
  <td class="paramDescCol">Array of result counts and any errors that occurred</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1207">dressing\components\YdMailChimpAPI.php#L1207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listBatchUnsubscribe</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$emails</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delete_member</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$send_goodbye</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$send_notify</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"emails"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$emails</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"delete_member"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$delete_member</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"send_goodbye"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$send_goodbye</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"send_notify"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$send_notify</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listBatchUnsubscribe"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Unsubscribe a batch of email addresses to a list</p>


<div class="detailHeader" id="listGrowthHistory-detail">
listGrowthHistory()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>listGrowthHistory</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">array of months and growth</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1308">dressing\components\YdMailChimpAPI.php#L1308</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listGrowthHistory</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listGrowthHistory"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Access the Growth History by Month for a given list.</p>


<div class="detailHeader" id="listInterestGroupAdd-detail">
listInterestGroupAdd()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>listInterestGroupAdd</b>(string $id, string $group_name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$group_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the interest group to add</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if the request succeeds, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L983">dressing\components\YdMailChimpAPI.php#L983</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listInterestGroupAdd</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$group_name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"group_name"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$group_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listInterestGroupAdd"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Add a single Interest Group - if interest groups for the List are not yet enabled, adding the first
 group will automatically turn them on.</p>


<div class="detailHeader" id="listInterestGroupDel-detail">
listInterestGroupDel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>listInterestGroupDel</b>(string $id, string $group_name)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$group_name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the interest group to delete</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if the request succeeds, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L999">dressing\components\YdMailChimpAPI.php#L999</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listInterestGroupDel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$group_name</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"group_name"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$group_name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listInterestGroupDel"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Delete a single Interest Group - if the last group for a list is deleted, this will also turn groups for the list off.</p>


<div class="detailHeader" id="listInterestGroups-detail">
listInterestGroups()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public struct <b>listInterestGroups</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">struct</td>
  <td class="paramDescCol">list of interest groups for the list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L967">dressing\components\YdMailChimpAPI.php#L967</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listInterestGroups</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listInterestGroups"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get the list of interest groups for a given list, including the label and form information</p>


<div class="detailHeader" id="listMemberInfo-detail">
listMemberInfo()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>listMemberInfo</b>(string $id, string $email_address)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$email_address</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the member email address to get information for</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">array of list member info (see Returned Fields for details)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1261">dressing\components\YdMailChimpAPI.php#L1261</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listMemberInfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"email_address"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listMemberInfo"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get all the information for a particular member of a list</p>


<div class="detailHeader" id="listMembers-detail">
listMembers()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>listMembers</b>(string $id, string $status='subscribed', string $since=NULL, integer $start=0, integer $limit=100)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$status</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the status to get members for - one of(subscribed, unsubscribed, cleaned, updated), defaults to subscribed</td>
</tr>
<tr>
  <td class="paramNameCol">$since</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional pull all members whose status (subscribed/unsubscribed/cleaned) has changed or whose profile (updated) has changed since this date/time (in GMT) - format is YYYY-MM-DD HH:mm:ss (24hr)</td>
</tr>
<tr>
  <td class="paramNameCol">$start</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the page number to start at - defaults to 1st page of data (page 0)</td>
</tr>
<tr>
  <td class="paramNameCol">$limit</td>
  <td class="paramTypeCol">integer</td>
  <td class="paramDescCol">optional for large data sets, the number of results to return - defaults to 100, upper limit set at 15000</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">Array of list member structs (see Returned Fields for details)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1232">dressing\components\YdMailChimpAPI.php#L1232</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listMembers</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$status</span><span style="color: #007700">=</span><span style="color: #DD0000">'subscribed'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">=</span><span style="color: #0000BB">NULL</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">=</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">=</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"status"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$status</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"since"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$since</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"start"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$start</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"limit"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$limit</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listMembers"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get all of the list members for a list that are of a particular status</p>


<div class="detailHeader" id="listMergeVarAdd-detail">
listMergeVarAdd()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>listMergeVarAdd</b>(string $id, string $tag, string $name, array $req=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The merge tag to add, e.g. FNAME</td>
</tr>
<tr>
  <td class="paramNameCol">$name</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The long description of the tag being added, used for user displays</td>
</tr>
<tr>
  <td class="paramNameCol">$req</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">optional Various options for this merge var. <em>note:</em> for historical purposes this can also take a "boolean"
string field_type optional one of: text, number, radio, dropdownn, date, address, phone, url, imageurl - defaults to text
boolean req optional indicates whether the field is required - defaults to false
boolean public optional indicates whether the field is displayed in public - defaults to true
boolean show optional indicates whether the field is displayed in the app's list member view - defaults to true
string default_value optional the default value for the field. See listSubscribe() for formatting info. Defaults to blank
array choices optional kind of - an array of strings to use as the choices for radio and dropdown type fields</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if the request succeeds, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L909">dressing\components\YdMailChimpAPI.php#L909</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listMergeVarAdd</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$req</span><span style="color: #007700">=array&nbsp;(<br />))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"tag"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"name"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"req"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$req</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listMergeVarAdd"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Add a new merge tag to a given list</p>


<div class="detailHeader" id="listMergeVarDel-detail">
listMergeVarDel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>listMergeVarDel</b>(string $id, string $tag)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The merge tag to delete</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if the request succeeds, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L948">dressing\components\YdMailChimpAPI.php#L948</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listMergeVarDel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"tag"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listMergeVarDel"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Delete a merge tag from a given list and all its members. Seriously - the data is removed from all members as well! 
Note that on large lists this method may seem a bit slower than calls you typically make.</p>


<div class="detailHeader" id="listMergeVarUpdate-detail">
listMergeVarUpdate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>listMergeVarUpdate</b>(string $id, string $tag, array $options)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$tag</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">The merge tag to update</td>
</tr>
<tr>
  <td class="paramNameCol">$options</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">The options to change for a merge var. See listMergeVarAdd() for valid options</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if the request succeeds, otherwise an error will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L929">dressing\components\YdMailChimpAPI.php#L929</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listMergeVarUpdate</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"tag"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$tag</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"options"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$options</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listMergeVarUpdate"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Update most parameters for a merge tag on a given list. You cannot currently change the merge type</p>


<div class="detailHeader" id="listMergeVars-detail">
listMergeVars()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>listMergeVars</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of merge tags for the list</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L884">dressing\components\YdMailChimpAPI.php#L884</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listMergeVars</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listMergeVars"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Get the list of merge tags for a given list, including their name, tag, and required setting</p>


<div class="detailHeader" id="listSubscribe-detail">
listSubscribe()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>listSubscribe</b>(string $id, string $email_address, array $merge_vars, string $email_type='html', boolean $double_optin=true, boolean $update_existing=false, boolean $replace_interests=true, boolean $send_welcome=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$email_address</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the email address to subscribe</td>
</tr>
<tr>
  <td class="paramNameCol">$merge_vars</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">array of merges for the email (FNAME, LNAME, etc.) (see examples below for handling "blank" arrays). Note that a merge field can only hold up to 255 characters. Also, there are 2 "special" keys:
string INTERESTS Set Interest Groups by passing a field named "INTERESTS" that contains a comma delimited list of Interest Groups to add. Commas in Interest Group names should be escaped with a backslash. ie, "," =&gt; "\,"
string OPTINIP Set the Opt-in IP fields. <em>Abusing this may cause your account to be suspended.</em> We do validate this and it must not be a private IP address.
<strong>Handling Field Data Types</strong> - most fields you can just pass a string and all is well. For some, though, that is not the case...
Field values should be formatted as follows:
string address For the string version of an Address, the fields should be delimited by <strong>2</strong> spaces. Address 2 can be skipped. The Country should be a 2 character ISO-3166-1 code and will default to your default country if not set
array address For the array version of an Address, the requirements for Address 2 and Country are the same as with the string version. Then simply pass us an array with the keys <strong>addr1</strong>, <strong>addr2</strong>, <strong>city</strong>, <strong>state</strong>, <strong>zip</strong>, <strong>country</strong> and appropriate values for each
string date use YYYY-MM-DD to be safe. Generally, though, anything strtotime() understands we'll understand - <a href="http://us2.php.net/strtotime" target="_blank">http://us2.php.net/strtotime</a>
string dropdown can be a normal string - we <em>will</em> validate that the value is a valid option
string image must be a valid, existing url. we <em>will</em> check its existence
string multi_choice can be a normal string - we <em>will</em> validate that the value is a valid option
double number pass in a valid number - anything else will turn in to zero (0). Note, this will be rounded to 2 decimal places
string phone If your account has the US Phone numbers option set, this <em>must</em> be in the form of NPA-NXX-LINE (404-555-1212). If not, we assume an International number and will simply set the field with what ever number is passed in.
string website This is a standard string, but we <em>will</em> verify that it looks like a valid URL</td>
</tr>
<tr>
  <td class="paramNameCol">$email_type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">optional - email type preference for the email (html or text, defaults to html)</td>
</tr>
<tr>
  <td class="paramNameCol">$double_optin</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">optional - flag to control whether a double opt-in confirmation message is sent, defaults to true. <em>Abusing this may cause your account to be suspended.</em></td>
</tr>
<tr>
  <td class="paramNameCol">$update_existing</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">optional - flag to control whether a existing subscribers should be updated instead of throwing and error</td>
</tr>
<tr>
  <td class="paramNameCol">$replace_interests</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">- flag to determine whether we replace the interest groups with the groups provided, or we add the provided groups to the member's interest groups (optional, defaults to true)</td>
</tr>
<tr>
  <td class="paramNameCol">$send_welcome</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">- if your double_optin is false and this is true, we will send your lists Welcome Email if this subscribe succeeds - this will *not* fire if we end up updating an existing subscriber. defaults to false</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success, false on failure. When using MCAPI.class.php, the value can be tested and error messages pulled from the MCAPI object (see below)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1103">dressing\components\YdMailChimpAPI.php#L1103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listSubscribe</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$merge_vars</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$email_type</span><span style="color: #007700">=</span><span style="color: #DD0000">'html'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$double_optin</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$update_existing</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$replace_interests</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$send_welcome</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"email_address"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"merge_vars"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$merge_vars</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"email_type"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$email_type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"double_optin"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$double_optin</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"update_existing"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$update_existing</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"replace_interests"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$replace_interests</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"send_welcome"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$send_welcome</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listSubscribe"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Subscribe the provided email to a list. By default this sends a confirmation email - you will not see new members until the link contained in it is clicked!</p>


<div class="detailHeader" id="listUnsubscribe-detail">
listUnsubscribe()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>listUnsubscribe</b>(string $id, string $email_address, boolean $delete_member=false, boolean $send_goodbye=true, boolean $send_notify=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$email_address</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the email address to unsubscribe</td>
</tr>
<tr>
  <td class="paramNameCol">$delete_member</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to completely delete the member from your list instead of just unsubscribing, default to false</td>
</tr>
<tr>
  <td class="paramNameCol">$send_goodbye</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to send the goodbye email to the email address, defaults to true</td>
</tr>
<tr>
  <td class="paramNameCol">$send_notify</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to send the unsubscribe notification email to the address defined in the list email notification settings, defaults to true</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success, false on failure. When using MCAPI.class.php, the value can be tested and error messages pulled from the MCAPI object (see below)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1130">dressing\components\YdMailChimpAPI.php#L1130</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listUnsubscribe</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$delete_member</span><span style="color: #007700">=</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$send_goodbye</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$send_notify</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"email_address"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"delete_member"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$delete_member</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"send_goodbye"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$send_goodbye</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"send_notify"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$send_notify</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listUnsubscribe"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Unsubscribe the given email address from the list</p>


<div class="detailHeader" id="listUpdateMember-detail">
listUpdateMember()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>listUpdateMember</b>(string $id, string $email_address, array $merge_vars, string $email_type='', boolean $replace_interests=true)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$email_address</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the current email address of the member to update</td>
</tr>
<tr>
  <td class="paramNameCol">$merge_vars</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">array of new field values to update the member with.  Use "EMAIL" to update the email address and "INTERESTS" to update the interest groups</td>
</tr>
<tr>
  <td class="paramNameCol">$email_type</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">change the email type preference for the member ("html" or "text").  Leave blank to keep the existing preference (optional)</td>
</tr>
<tr>
  <td class="paramNameCol">$replace_interests</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">flag to determine whether we replace the interest groups with the updated groups provided, or we add the provided groups to the member's interest groups (optional, defaults to true)</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true on success, false on failure. When using MCAPI.class.php, the value can be tested and error messages pulled from the MCAPI object</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1153">dressing\components\YdMailChimpAPI.php#L1153</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listUpdateMember</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$merge_vars</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$email_type</span><span style="color: #007700">=</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$replace_interests</span><span style="color: #007700">=</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"email_address"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$email_address</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"merge_vars"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$merge_vars</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"email_type"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$email_type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"replace_interests"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$replace_interests</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listUpdateMember"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Edit the email address, merge fields, and interest groups for a list member</p>


<div class="detailHeader" id="listWebhookAdd-detail">
listWebhookAdd()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>listWebhookAdd</b>(string $id, string $url, array $actions=array (
), array $sources=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">a valid URL for the Webhook - it will be validated. note that a url may only exist on a list once.</td>
</tr>
<tr>
  <td class="paramNameCol">$actions</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">optional a hash of actions to fire this Webhook for
boolean subscribe optional as subscribes occur, defaults to true
boolean unsubscribe optional as subscribes occur, defaults to true
boolean profile optional as profile updates occur, defaults to true
boolean cleaned optional as emails are cleaned from the list, defaults to true
boolean upemail optional when  subscribers change their email address, defaults to true</td>
</tr>
<tr>
  <td class="paramNameCol">$sources</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">optional a hash of sources to fire this Webhook for
boolean user optional user/subscriber initiated actions, defaults to true
boolean admin optional admin actions in our web app, defaults to true
boolean api optional actions that happen via API calls, defaults to false</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol">true if the call succeeds, otherwise an exception will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1040">dressing\components\YdMailChimpAPI.php#L1040</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listWebhookAdd</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$actions</span><span style="color: #007700">=array&nbsp;(<br />),&nbsp;</span><span style="color: #0000BB">$sources</span><span style="color: #007700">=array&nbsp;(<br />))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"url"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"actions"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$actions</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"sources"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$sources</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listWebhookAdd"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Add a new Webhook URL for the given list</p>


<div class="detailHeader" id="listWebhookDel-detail">
listWebhookDel()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public boolean <b>listWebhookDel</b>(string $id, string $url)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the URL of a Webhook on this list</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">boolean</td>
  <td class="paramDescCol">true if the call succeeds, otherwise an exception will be thrown</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1059">dressing\components\YdMailChimpAPI.php#L1059</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listWebhookDel</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"url"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listWebhookDel"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Delete an existing Webhook URL from a given list</p>


<div class="detailHeader" id="listWebhooks-detail">
listWebhooks()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>listWebhooks</b>(string $id)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the list id to connect to. Get by calling lists()</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of webhooks</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1016">dressing\components\YdMailChimpAPI.php#L1016</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">listWebhooks</span><span style="color: #007700">(</span><span style="color: #0000BB">$id</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #DD0000">"id"</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"listWebhooks"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Return the Webhooks configured for the given list</p>


<div class="detailHeader" id="lists-detail">
lists()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>lists</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">list of your Lists and their associated information (see Returned Fields for description)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L867">dressing\components\YdMailChimpAPI.php#L867</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">lists</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"lists"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Retrieve all of the lists defined for your user account</p>


<div class="detailHeader" id="ping-detail">
ping()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>ping</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">returns "Everything's Chimpy!" if everything is chimpy, otherwise returns an error message</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L1487">dressing\components\YdMailChimpAPI.php#L1487</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">ping</span><span style="color: #007700">()&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">callServer</span><span style="color: #007700">(</span><span style="color: #DD0000">"ping"</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>"Ping" the MailChimp API - a simple method you can call that will return a constant value as long as everything is good. Note
than unlike most all of our methods, we don't throw an Exception if we are having issues. You will simply receive a different
string back that will explain our view on what is going on.</p>


<div class="detailHeader" id="setTimeout-detail">
setTimeout()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setTimeout</b>($seconds)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$seconds</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L57">dressing\components\YdMailChimpAPI.php#L57</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">setTimeout</span><span style="color: #007700">(</span><span style="color: #0000BB">$seconds</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$seconds</span><span style="color: #007700">)){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">timeout&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$seconds</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="useSecure-detail">
useSecure()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>useSecure</b>($val)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$val</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob//master/yii-dressing\components\YdMailChimpAPI.php#L66">dressing\components\YdMailChimpAPI.php#L66</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">useSecure</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$val</span><span style="color: #007700">===</span><span style="color: #0000BB">true</span><span style="color: #007700">){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">secure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">secure&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>
<p></p>


