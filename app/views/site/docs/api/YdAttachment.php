<?php
$this->pageTitle = $this->pageHeading = 'YdAttachment';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdAttachment';
?>
<div id="nav">
<a href="#properties">Properties</a> | <a href="#methods">Methods</a> | <a href="#events">Events</a></div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>Package</th>
  <td><?php echo CHtml::link('dressing.models', array('/site/doc', '#' => 'dressing.models')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdAttachment &raquo;
<?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?> &raquo;
<?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> &raquo;
<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>ArrayAccess, Traversable, IteratorAggregate</td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php">dressing/models/YdAttachment.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdAttachment
<br/><br/>
--- BEGIN GenerateProperties ---
<br/><br/>
This is the model class for table 'attachment'</div>
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
<tr id="attachmentFile">
  <td><?php echo CHtml::link('attachmentFile', array('/site/doc', 'view' => 'YdAttachment', '#' => 'attachmentFile-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="attachmentPath">
  <td><?php echo CHtml::link('attachmentPath', array('/site/doc', 'view' => 'YdAttachment', '#' => 'attachmentPath-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="attributes">
  <td><?php echo CHtml::link('attributes', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'attributes-detail')); ?></td>
  <td>array</td>
  <td>Returns all column attribute values.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="commandBuilder">
  <td><?php echo CHtml::link('commandBuilder', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'commandBuilder-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCommandBuilder', array('/site/doc', 'view' => 'CDbCommandBuilder')); ?></td>
  <td>Returns the command builder used by this AR.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="controllerName">
  <td><?php echo CHtml::link('controllerName', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'controllerName-detail')); ?></td>
  <td>string</td>
  <td>The name of this model to be used in links</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr id="created">
  <td><?php echo CHtml::link('created', array('/site/doc', 'view' => 'YdAttachment', '#' => 'created-detail')); ?></td>
  <td>datetime</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="db">
  <td><?php echo CHtml::link('db', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'db-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the default database connection for all active record classes.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="dbAttributes">
  <td><?php echo CHtml::link('dbAttributes', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'dbAttributes-detail')); ?></td>
  <td>array</td>
  <td>The attributes that are currently in the database</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="dbConnection">
  <td><?php echo CHtml::link('dbConnection', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbConnection-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>Returns the database connection used by active record.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="dbCriteria">
  <td><?php echo CHtml::link('dbCriteria', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'dbCriteria-detail')); ?></td>
  <td><?php echo CHtml::link('CDbCriteria', array('/site/doc', 'view' => 'CDbCriteria')); ?></td>
  <td>Returns the query criteria associated with this model.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="deleted">
  <td><?php echo CHtml::link('deleted', array('/site/doc', 'view' => 'YdAttachment', '#' => 'deleted-detail')); ?></td>
  <td>datetime</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="errorString">
  <td><?php echo CHtml::link('errorString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'errorString-detail')); ?></td>
  <td>string</td>
  <td>Returns error array as a string</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="errors">
  <td><?php echo CHtml::link('errors', array('/site/doc', 'view' => 'CModel', '#' => 'errors-detail')); ?></td>
  <td>array</td>
  <td>Returns the errors for all attribute or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="extension">
  <td><?php echo CHtml::link('extension', array('/site/doc', 'view' => 'YdAttachment', '#' => 'extension-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="filename">
  <td><?php echo CHtml::link('filename', array('/site/doc', 'view' => 'YdAttachment', '#' => 'filename-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="filesize">
  <td><?php echo CHtml::link('filesize', array('/site/doc', 'view' => 'YdAttachment', '#' => 'filesize-detail')); ?></td>
  <td>integer</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="filetype">
  <td><?php echo CHtml::link('filetype', array('/site/doc', 'view' => 'YdAttachment', '#' => 'filetype-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="handleFileUpload">
  <td><?php echo CHtml::link('handleFileUpload', array('/site/doc', 'view' => 'YdAttachment', '#' => 'handleFileUpload-detail')); ?></td>
  <td>bool</td>
  <td>true if we are expecting a user upload</td>
  <td>YdAttachment</td>
</tr>
<tr id="id">
  <td><?php echo CHtml::link('id', array('/site/doc', 'view' => 'YdAttachment', '#' => 'id-detail')); ?></td>
  <td>integer</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="idString">
  <td><?php echo CHtml::link('idString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'idString-detail')); ?></td>
  <td>string</td>
  <td>The name and id of the model</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr id="imageExtensions">
  <td><?php echo CHtml::link('imageExtensions', array('/site/doc', 'view' => 'YdAttachment', '#' => 'imageExtensions-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="isNewRecord">
  <td><?php echo CHtml::link('isNewRecord', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'isNewRecord-detail')); ?></td>
  <td>boolean</td>
  <td>Returns if the current record is new.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="iterator">
  <td><?php echo CHtml::link('iterator', array('/site/doc', 'view' => 'CModel', '#' => 'iterator-detail')); ?></td>
  <td><?php echo CHtml::link('CMapIterator', array('/site/doc', 'view' => 'CMapIterator')); ?></td>
  <td>Returns an iterator for traversing the attributes in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="link">
  <td><?php echo CHtml::link('link', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'link-detail')); ?></td>
  <td>string</td>
  <td>Returns a Link to this model</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="menuLinks">
  <td><?php echo CHtml::link('menuLinks', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'menuLinks-detail')); ?></td>
  <td>array</td>
  <td>Returns a list of links to be used in grids and menus.</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="metaData">
  <td><?php echo CHtml::link('metaData', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'metaData-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecordMetaData', array('/site/doc', 'view' => 'CActiveRecordMetaData')); ?></td>
  <td>Returns the meta-data for this AR</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="model">
  <td><?php echo CHtml::link('model', array('/site/doc', 'view' => 'YdAttachment', '#' => 'model-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="model_id">
  <td><?php echo CHtml::link('model_id', array('/site/doc', 'view' => 'YdAttachment', '#' => 'model_id-detail')); ?></td>
  <td>integer</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>The name of this model to be used in titles</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr id="notes">
  <td><?php echo CHtml::link('notes', array('/site/doc', 'view' => 'YdAttachment', '#' => 'notes-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="oldPrimaryKey">
  <td><?php echo CHtml::link('oldPrimaryKey', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'oldPrimaryKey-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the old primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="pdfExtensions">
  <td><?php echo CHtml::link('pdfExtensions', array('/site/doc', 'view' => 'YdAttachment', '#' => 'pdfExtensions-detail')); ?></td>
  <td>array</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="primaryKey">
  <td><?php echo CHtml::link('primaryKey', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'primaryKey-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="primaryKeySchemaString">
  <td><?php echo CHtml::link('primaryKeySchemaString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'primaryKeySchemaString-detail')); ?></td>
  <td>string</td>
  <td>Returns Primary Key Schema as a string</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="primaryKeyString">
  <td><?php echo CHtml::link('primaryKeyString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'primaryKeyString-detail')); ?></td>
  <td>string</td>
  <td>Returns Primary Key as a string</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="safeAttributeNames">
  <td><?php echo CHtml::link('safeAttributeNames', array('/site/doc', 'view' => 'CModel', '#' => 'safeAttributeNames-detail')); ?></td>
  <td>array</td>
  <td>Returns the attribute names that are safe to be massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="scenario">
  <td><?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'CModel', '#' => 'scenario-detail')); ?></td>
  <td>string</td>
  <td>Returns the scenario that this model is used in.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="sort_order">
  <td><?php echo CHtml::link('sort_order', array('/site/doc', 'view' => 'YdAttachment', '#' => 'sort_order-detail')); ?></td>
  <td>integer</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="tableAlias">
  <td><?php echo CHtml::link('tableAlias', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'tableAlias-detail')); ?></td>
  <td>string</td>
  <td>Returns the table alias to be used by the find methods.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="tableSchema">
  <td><?php echo CHtml::link('tableSchema', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'tableSchema-detail')); ?></td>
  <td><?php echo CHtml::link('CDbTableSchema', array('/site/doc', 'view' => 'CDbTableSchema')); ?></td>
  <td>Returns the metadata of the table that this AR belongs to</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="thumb">
  <td><?php echo CHtml::link('thumb', array('/site/doc', 'view' => 'YdAttachment', '#' => 'thumb-detail')); ?></td>
  <td>string</td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'YdAttachment', '#' => 'url-detail')); ?></td>
  <td>string</td>
  <td>Returns a URL to this model</td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="validatorList">
  <td><?php echo CHtml::link('validatorList', array('/site/doc', 'view' => 'CModel', '#' => 'validatorList-detail')); ?></td>
  <td><?php echo CHtml::link('CList', array('/site/doc', 'view' => 'CList')); ?></td>
  <td>Returns all the validators declared in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="validators">
  <td><?php echo CHtml::link('validators', array('/site/doc', 'view' => 'CModel', '#' => 'validators-detail')); ?></td>
  <td>array</td>
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'YdAttachment', '#' => 'scenario')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
  <td><?php echo CHtml::link('__call()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__call-detail')); ?></td>
  <td>Calls the named method which is not a class method.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="__construct">
  <td><?php echo CHtml::link('__construct()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__construct-detail')); ?></td>
  <td>Constructor.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="__get">
  <td><?php echo CHtml::link('__get()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__get-detail')); ?></td>
  <td>PHP getter magic method.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="__isset">
  <td><?php echo CHtml::link('__isset()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__isset-detail')); ?></td>
  <td>Checks if a property value is null.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="__set">
  <td><?php echo CHtml::link('__set()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__set-detail')); ?></td>
  <td>PHP setter magic method.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="__sleep">
  <td><?php echo CHtml::link('__sleep()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__sleep-detail')); ?></td>
  <td>PHP sleep magic method.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="__unset">
  <td><?php echo CHtml::link('__unset()', array('/site/doc', 'view' => 'CActiveRecord', '#' => '__unset-detail')); ?></td>
  <td>Sets a component property to be null.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="addError">
  <td><?php echo CHtml::link('addError()', array('/site/doc', 'view' => 'CModel', '#' => 'addError-detail')); ?></td>
  <td>Adds a new error to the specified attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="addErrors">
  <td><?php echo CHtml::link('addErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'addErrors-detail')); ?></td>
  <td>Adds a list of errors.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="addRelatedRecord">
  <td><?php echo CHtml::link('addRelatedRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'addRelatedRecord-detail')); ?></td>
  <td>Do not call this method. This method is used internally by <?php echo CHtml::link('CActiveFinder', array('/site/doc', 'view' => 'CActiveFinder')); ?> to populate</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="afterFindInternal">
  <td><?php echo CHtml::link('afterFindInternal()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterFindInternal-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('afterFind', array('/site/doc', 'view' => 'YdAttachment', '#' => 'afterFind')); ?>.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="applyScopes">
  <td><?php echo CHtml::link('applyScopes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'applyScopes-detail')); ?></td>
  <td>Applies the query scopes to the given criteria.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
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
<tr id="attributeLabels">
  <td><?php echo CHtml::link('attributeLabels()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'attributeLabels-detail')); ?></td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="attributeNames">
  <td><?php echo CHtml::link('attributeNames()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'attributeNames-detail')); ?></td>
  <td>Returns the list of all attribute names of the model.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="beforeFindInternal">
  <td><?php echo CHtml::link('beforeFindInternal()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFindInternal-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('beforeFind', array('/site/doc', 'view' => 'YdAttachment', '#' => 'beforeFind')); ?>.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="behaviors">
  <td><?php echo CHtml::link('behaviors()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'behaviors-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="cache">
  <td><?php echo CHtml::link('cache()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'cache-detail')); ?></td>
  <td>Sets the parameters about query caching.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
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
<tr class="inherited" id="changed">
  <td><?php echo CHtml::link('changed()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'changed-detail')); ?></td>
  <td>Check if any fields have changed</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="clearErrors">
  <td><?php echo CHtml::link('clearErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'clearErrors-detail')); ?></td>
  <td>Removes errors for all attributes or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="count">
  <td><?php echo CHtml::link('count()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'count-detail')); ?></td>
  <td>Finds the number of rows satisfying the specified query condition.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="countByAttributes">
  <td><?php echo CHtml::link('countByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'countByAttributes-detail')); ?></td>
  <td>Finds the number of rows that have the specified attribute values.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="countBySql">
  <td><?php echo CHtml::link('countBySql()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'countBySql-detail')); ?></td>
  <td>Finds the number of rows using the given SQL statement.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="createValidators">
  <td><?php echo CHtml::link('createValidators()', array('/site/doc', 'view' => 'CModel', '#' => 'createValidators-detail')); ?></td>
  <td>Creates validator objects based on the specification in <?php echo CHtml::link('rules', array('/site/doc', 'view' => 'YdAttachment', '#' => 'rules')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="defaultScope">
  <td><?php echo CHtml::link('defaultScope()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'defaultScope-detail')); ?></td>
  <td>Returns the default named scope that should be implicitly applied to all queries for this model.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="delete">
  <td><?php echo CHtml::link('delete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'delete-detail')); ?></td>
  <td>Deletes the row corresponding to this active record.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="deleteAll">
  <td><?php echo CHtml::link('deleteAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'deleteAll-detail')); ?></td>
  <td>Deletes rows with the specified condition.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="deleteAllByAttributes">
  <td><?php echo CHtml::link('deleteAllByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'deleteAllByAttributes-detail')); ?></td>
  <td>Deletes rows which match the specified attribute values.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="deleteByPk">
  <td><?php echo CHtml::link('deleteByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'deleteByPk-detail')); ?></td>
  <td>Deletes rows with the specified primary key.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
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
<tr class="inherited" id="equals">
  <td><?php echo CHtml::link('equals()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'equals-detail')); ?></td>
  <td>Compares current active record with another one.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="evaluateExpression">
  <td><?php echo CHtml::link('evaluateExpression()', array('/site/doc', 'view' => 'CComponent', '#' => 'evaluateExpression-detail')); ?></td>
  <td>Evaluates a PHP expression or callback under the context of this component.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="exists">
  <td><?php echo CHtml::link('exists()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'exists-detail')); ?></td>
  <td>Checks whether there is row satisfying the specified condition.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="find">
  <td><?php echo CHtml::link('find()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'find-detail')); ?></td>
  <td>Finds a single active record with the specified condition.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="findAll">
  <td><?php echo CHtml::link('findAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAll-detail')); ?></td>
  <td>Finds all active records satisfying the specified condition.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="findAllByAttributes">
  <td><?php echo CHtml::link('findAllByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByAttributes-detail')); ?></td>
  <td>Finds all active records that have the specified attribute values.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="findAllByPk">
  <td><?php echo CHtml::link('findAllByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllByPk-detail')); ?></td>
  <td>Finds all active records with the specified primary keys.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="findAllBySql">
  <td><?php echo CHtml::link('findAllBySql()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findAllBySql-detail')); ?></td>
  <td>Finds all active records using the specified SQL statement.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="findByAttributes">
  <td><?php echo CHtml::link('findByAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByAttributes-detail')); ?></td>
  <td>Finds a single active record that has the specified attribute values.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="findByPk">
  <td><?php echo CHtml::link('findByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findByPk-detail')); ?></td>
  <td>Finds a single active record with the specified primary key.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="findBySql">
  <td><?php echo CHtml::link('findBySql()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'findBySql-detail')); ?></td>
  <td>Finds a single active record with the specified SQL statement.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="generateAttributeLabel">
  <td><?php echo CHtml::link('generateAttributeLabel()', array('/site/doc', 'view' => 'CModel', '#' => 'generateAttributeLabel-detail')); ?></td>
  <td>Generates a user friendly attribute label.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getActiveFinder">
  <td><?php echo CHtml::link('getActiveFinder()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getActiveFinder-detail')); ?></td>
  <td>Given 'with' options returns a new active finder instance.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getActiveRelation">
  <td><?php echo CHtml::link('getActiveRelation()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getActiveRelation-detail')); ?></td>
  <td>Returns the named relation declared for this AR class.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="getAttachmentFile">
  <td><?php echo CHtml::link('getAttachmentFile()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getAttachmentFile-detail')); ?></td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="getAttachmentPath">
  <td><?php echo CHtml::link('getAttachmentPath()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getAttachmentPath-detail')); ?></td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="getAttribute">
  <td><?php echo CHtml::link('getAttribute()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttribute-detail')); ?></td>
  <td>Returns the named attribute value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getAttributeLabel">
  <td><?php echo CHtml::link('getAttributeLabel()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttributeLabel-detail')); ?></td>
  <td>Returns the text label for the specified attribute.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getAttributes">
  <td><?php echo CHtml::link('getAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getAttributes-detail')); ?></td>
  <td>Returns all column attribute values.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getCommandBuilder">
  <td><?php echo CHtml::link('getCommandBuilder()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getCommandBuilder-detail')); ?></td>
  <td>Returns the command builder used by this AR.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getControllerName">
  <td><?php echo CHtml::link('getControllerName()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getControllerName-detail')); ?></td>
  <td>The name of this model to be used in links</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getDbAttribute">
  <td><?php echo CHtml::link('getDbAttribute()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getDbAttribute-detail')); ?></td>
  <td>Gets an attribute, as it is in the database</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getDbConnection">
  <td><?php echo CHtml::link('getDbConnection()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbConnection-detail')); ?></td>
  <td>Returns the database connection used by active record.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getDbCriteria">
  <td><?php echo CHtml::link('getDbCriteria()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getDbCriteria-detail')); ?></td>
  <td>Returns the query criteria associated with this model.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getError">
  <td><?php echo CHtml::link('getError()', array('/site/doc', 'view' => 'CModel', '#' => 'getError-detail')); ?></td>
  <td>Returns the first error of the specified attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getErrorString">
  <td><?php echo CHtml::link('getErrorString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getErrorString-detail')); ?></td>
  <td>Returns error array as a string</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getErrors">
  <td><?php echo CHtml::link('getErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'getErrors-detail')); ?></td>
  <td>Returns the errors for all attribute or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getEventHandlers">
  <td><?php echo CHtml::link('getEventHandlers()', array('/site/doc', 'view' => 'CComponent', '#' => 'getEventHandlers-detail')); ?></td>
  <td>Returns the list of attached event handlers for an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="getIdString">
  <td><?php echo CHtml::link('getIdString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getIdString-detail')); ?></td>
  <td>The name and id of the model</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getIsNewRecord">
  <td><?php echo CHtml::link('getIsNewRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getIsNewRecord-detail')); ?></td>
  <td>Returns if the current record is new.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getIterator">
  <td><?php echo CHtml::link('getIterator()', array('/site/doc', 'view' => 'CModel', '#' => 'getIterator-detail')); ?></td>
  <td>Returns an iterator for traversing the attributes in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getLink">
  <td><?php echo CHtml::link('getLink()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getLink-detail')); ?></td>
  <td>Returns a Link to this model</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getMenuLinks">
  <td><?php echo CHtml::link('getMenuLinks()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getMenuLinks-detail')); ?></td>
  <td>Returns a list of links to be used in grids and menus.</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getMetaData">
  <td><?php echo CHtml::link('getMetaData()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getMetaData-detail')); ?></td>
  <td>Returns the meta-data for this AR</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getName-detail')); ?></td>
  <td>The name of this model to be used in titles</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getOldPrimaryKey">
  <td><?php echo CHtml::link('getOldPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getOldPrimaryKey-detail')); ?></td>
  <td>Returns the old primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="getPopup">
  <td><?php echo CHtml::link('getPopup()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getPopup-detail')); ?></td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="getPrimaryKey">
  <td><?php echo CHtml::link('getPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getPrimaryKey-detail')); ?></td>
  <td>Returns the primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getPrimaryKeySchemaString">
  <td><?php echo CHtml::link('getPrimaryKeySchemaString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getPrimaryKeySchemaString-detail')); ?></td>
  <td>Returns Primary Key Schema as a string</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getPrimaryKeyString">
  <td><?php echo CHtml::link('getPrimaryKeyString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getPrimaryKeyString-detail')); ?></td>
  <td>Returns Primary Key as a string</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getRelated">
  <td><?php echo CHtml::link('getRelated()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getRelated-detail')); ?></td>
  <td>Returns the related record(s).</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getSafeAttributeNames">
  <td><?php echo CHtml::link('getSafeAttributeNames()', array('/site/doc', 'view' => 'CModel', '#' => 'getSafeAttributeNames-detail')); ?></td>
  <td>Returns the attribute names that are safe to be massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getScenario">
  <td><?php echo CHtml::link('getScenario()', array('/site/doc', 'view' => 'CModel', '#' => 'getScenario-detail')); ?></td>
  <td>Returns the scenario that this model is used in.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="getStaticThumb">
  <td><?php echo CHtml::link('getStaticThumb()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getStaticThumb-detail')); ?></td>
  <td>Static method to get a thumb</td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="getTableAlias">
  <td><?php echo CHtml::link('getTableAlias()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableAlias-detail')); ?></td>
  <td>Returns the table alias to be used by the find methods.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getTableSchema">
  <td><?php echo CHtml::link('getTableSchema()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getTableSchema-detail')); ?></td>
  <td>Returns the metadata of the table that this AR belongs to</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="getThumb">
  <td><?php echo CHtml::link('getThumb()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getThumb-detail')); ?></td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr id="getUrl">
  <td><?php echo CHtml::link('getUrl()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getUrl-detail')); ?></td>
  <td>Returns a URL to this model</td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="getValidatorList">
  <td><?php echo CHtml::link('getValidatorList()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidatorList-detail')); ?></td>
  <td>Returns all the validators declared in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getValidators">
  <td><?php echo CHtml::link('getValidators()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidators-detail')); ?></td>
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'YdAttachment', '#' => 'scenario')); ?>.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="hasAttribute">
  <td><?php echo CHtml::link('hasAttribute()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'hasAttribute-detail')); ?></td>
  <td>Checks whether this AR has the named attribute</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="hasErrors">
  <td><?php echo CHtml::link('hasErrors()', array('/site/doc', 'view' => 'CModel', '#' => 'hasErrors-detail')); ?></td>
  <td>Returns a value indicating whether there is any validation error.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr class="inherited" id="hasRelated">
  <td><?php echo CHtml::link('hasRelated()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'hasRelated-detail')); ?></td>
  <td>Returns a value indicating whether the named related object(s) has been loaded.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="init">
  <td><?php echo CHtml::link('init()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'init-detail')); ?></td>
  <td>Initializes this model.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="insert">
  <td><?php echo CHtml::link('insert()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'insert-detail')); ?></td>
  <td>Inserts a row into the table based on this active record attributes.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="isAttributeRequired">
  <td><?php echo CHtml::link('isAttributeRequired()', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeRequired-detail')); ?></td>
  <td>Returns a value indicating whether the attribute is required.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="isAttributeSafe">
  <td><?php echo CHtml::link('isAttributeSafe()', array('/site/doc', 'view' => 'CModel', '#' => 'isAttributeSafe-detail')); ?></td>
  <td>Returns a value indicating whether the attribute is safe for massive assignments.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="model()">
  <td><?php echo CHtml::link('model()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'model()-detail')); ?></td>
  <td>Returns the static model of the specified AR class.</td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="offsetExists">
  <td><?php echo CHtml::link('offsetExists()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'offsetExists-detail')); ?></td>
  <td>Returns whether there is an element at the specified offset.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="offsetGet">
  <td><?php echo CHtml::link('offsetGet()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetGet-detail')); ?></td>
  <td>Returns the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="offsetSet">
  <td><?php echo CHtml::link('offsetSet()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetSet-detail')); ?></td>
  <td>Sets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="offsetUnset">
  <td><?php echo CHtml::link('offsetUnset()', array('/site/doc', 'view' => 'CModel', '#' => 'offsetUnset-detail')); ?></td>
  <td>Unsets the element at the specified offset.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterConstruct">
  <td><?php echo CHtml::link('onAfterConstruct()', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterConstruct-detail')); ?></td>
  <td>This event is raised after the model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterDelete">
  <td><?php echo CHtml::link('onAfterDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterDelete-detail')); ?></td>
  <td>This event is raised after the record is deleted.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onAfterFind">
  <td><?php echo CHtml::link('onAfterFind()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterFind-detail')); ?></td>
  <td>This event is raised after the record is instantiated by a find method.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onAfterSave">
  <td><?php echo CHtml::link('onAfterSave()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterSave-detail')); ?></td>
  <td>This event is raised after the record is saved.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onAfterValidate">
  <td><?php echo CHtml::link('onAfterValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterValidate-detail')); ?></td>
  <td>This event is raised after the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onBeforeCount">
  <td><?php echo CHtml::link('onBeforeCount()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeCount-detail')); ?></td>
  <td>This event is raised before an AR finder performs a count call.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onBeforeDelete">
  <td><?php echo CHtml::link('onBeforeDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeDelete-detail')); ?></td>
  <td>This event is raised before the record is deleted.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onBeforeFind">
  <td><?php echo CHtml::link('onBeforeFind()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeFind-detail')); ?></td>
  <td>This event is raised before an AR finder performs a find call.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onBeforeSave">
  <td><?php echo CHtml::link('onBeforeSave()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeSave-detail')); ?></td>
  <td>This event is raised before the record is saved.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onBeforeValidate">
  <td><?php echo CHtml::link('onBeforeValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate-detail')); ?></td>
  <td>This event is raised before the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onUnsafeAttribute">
  <td><?php echo CHtml::link('onUnsafeAttribute()', array('/site/doc', 'view' => 'CModel', '#' => 'onUnsafeAttribute-detail')); ?></td>
  <td>This method is invoked when an unsafe attribute is being massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="populateRecord">
  <td><?php echo CHtml::link('populateRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'populateRecord-detail')); ?></td>
  <td>Creates an active record with the given attributes.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="populateRecords">
  <td><?php echo CHtml::link('populateRecords()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'populateRecords-detail')); ?></td>
  <td>Creates a list of active records based on the input data.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="primaryKey()">
  <td><?php echo CHtml::link('primaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'primaryKey()-detail')); ?></td>
  <td>Returns the primary key of the associated database table.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="raiseEvent">
  <td><?php echo CHtml::link('raiseEvent()', array('/site/doc', 'view' => 'CComponent', '#' => 'raiseEvent-detail')); ?></td>
  <td>Raises an event.</td>
  <td><?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr class="inherited" id="refresh">
  <td><?php echo CHtml::link('refresh()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'refresh-detail')); ?></td>
  <td>Repopulates this active record with the latest data.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="refreshMetaData">
  <td><?php echo CHtml::link('refreshMetaData()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'refreshMetaData-detail')); ?></td>
  <td>Refreshes the meta data for this AR class.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="relations">
  <td><?php echo CHtml::link('relations()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'relations-detail')); ?></td>
  <td></td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="resetScope">
  <td><?php echo CHtml::link('resetScope()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'resetScope-detail')); ?></td>
  <td>Resets all scopes and criterias applied.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="rules">
  <td><?php echo CHtml::link('rules()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'rules-detail')); ?></td>
  <td></td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="save">
  <td><?php echo CHtml::link('save()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'save-detail')); ?></td>
  <td>Saves the current record.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="saveAttributes">
  <td><?php echo CHtml::link('saveAttributes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'saveAttributes-detail')); ?></td>
  <td>Saves a selected list of attributes.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="saveCounters">
  <td><?php echo CHtml::link('saveCounters()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'saveCounters-detail')); ?></td>
  <td>Saves one or several counter columns for the current AR object.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="scopes">
  <td><?php echo CHtml::link('scopes()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'scopes-detail')); ?></td>
  <td>Returns the declaration of named scopes.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="setAttribute">
  <td><?php echo CHtml::link('setAttribute()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setAttribute-detail')); ?></td>
  <td>Sets the named attribute value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="setAttributes">
  <td><?php echo CHtml::link('setAttributes()', array('/site/doc', 'view' => 'CModel', '#' => 'setAttributes-detail')); ?></td>
  <td>Sets the attribute values in a massive way.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="setDbCriteria">
  <td><?php echo CHtml::link('setDbCriteria()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setDbCriteria-detail')); ?></td>
  <td>Sets the query criteria for the current model.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="setDefaultAttributes">
  <td><?php echo CHtml::link('setDefaultAttributes()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'setDefaultAttributes-detail')); ?></td>
  <td>Allows setting attributes</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="setIsNewRecord">
  <td><?php echo CHtml::link('setIsNewRecord()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setIsNewRecord-detail')); ?></td>
  <td>Sets if the record is new.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="setOldPrimaryKey">
  <td><?php echo CHtml::link('setOldPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setOldPrimaryKey-detail')); ?></td>
  <td>Sets the old primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="setPrimaryKey">
  <td><?php echo CHtml::link('setPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setPrimaryKey-detail')); ?></td>
  <td>Sets the primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="setScenario">
  <td><?php echo CHtml::link('setScenario()', array('/site/doc', 'view' => 'CModel', '#' => 'setScenario-detail')); ?></td>
  <td>Sets the scenario for the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="setTableAlias">
  <td><?php echo CHtml::link('setTableAlias()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'setTableAlias-detail')); ?></td>
  <td>Sets the table alias to be used in queries.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="tableName">
  <td><?php echo CHtml::link('tableName()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'tableName-detail')); ?></td>
  <td>Guess the table name based on the class</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr id="thumb()">
  <td><?php echo CHtml::link('thumb()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'thumb()-detail')); ?></td>
  <td>Generate a thumbnail of an attachment</td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="together">
  <td><?php echo CHtml::link('together()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'together-detail')); ?></td>
  <td>Sets <?php echo CHtml::link('CDbCriteria::together', array('/site/doc', 'view' => 'CDbCriteria', '#' => 'together')); ?> property to be true.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="unsetAttributes">
  <td><?php echo CHtml::link('unsetAttributes()', array('/site/doc', 'view' => 'CModel', '#' => 'unsetAttributes-detail')); ?></td>
  <td>Sets the attributes to be null.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="update">
  <td><?php echo CHtml::link('update()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'update-detail')); ?></td>
  <td>Updates the row represented by this active record.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="updateAll">
  <td><?php echo CHtml::link('updateAll()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateAll-detail')); ?></td>
  <td>Updates records with the specified condition.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="updateByPk">
  <td><?php echo CHtml::link('updateByPk()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateByPk-detail')); ?></td>
  <td>Updates records with the specified primary key(s).</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="updateCounters">
  <td><?php echo CHtml::link('updateCounters()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'updateCounters-detail')); ?></td>
  <td>Updates one or several counter columns.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="validate">
  <td><?php echo CHtml::link('validate()', array('/site/doc', 'view' => 'CModel', '#' => 'validate-detail')); ?></td>
  <td>Performs the validation.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="with">
  <td><?php echo CHtml::link('with()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'with-detail')); ?></td>
  <td>Specifies which related objects should be eagerly loaded.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
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
<tr class="inherited" id="afterConstruct">
  <td><?php echo CHtml::link('afterConstruct()', array('/site/doc', 'view' => 'CModel', '#' => 'afterConstruct-detail')); ?></td>
  <td>This method is invoked after a model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="afterDelete">
  <td><?php echo CHtml::link('afterDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'afterDelete-detail')); ?></td>
  <td>This method is invoked after deleting a record.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'afterFind-detail')); ?></td>
  <td>Actions to be performed after the model is loaded</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr id="afterSave">
  <td><?php echo CHtml::link('afterSave()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'afterSave-detail')); ?></td>
  <td>Actions to be performed after the model is saved</td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="afterValidate">
  <td><?php echo CHtml::link('afterValidate()', array('/site/doc', 'view' => 'CModel', '#' => 'afterValidate-detail')); ?></td>
  <td>This method is invoked after validation ends.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="beforeCount">
  <td><?php echo CHtml::link('beforeCount()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeCount-detail')); ?></td>
  <td>This method is invoked before an AR finder executes a count call.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="beforeDelete">
  <td><?php echo CHtml::link('beforeDelete()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeDelete-detail')); ?></td>
  <td>This method is invoked before deleting a record.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="beforeFind">
  <td><?php echo CHtml::link('beforeFind()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFind-detail')); ?></td>
  <td>This method is invoked before an AR finder executes a find call.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="beforeSave">
  <td><?php echo CHtml::link('beforeSave()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'beforeSave-detail')); ?></td>
  <td>Actions to be performed before the model is saved</td>
  <td><?php echo CHtml::link('YdActiveRecord', array('/site/doc', 'view' => 'YdActiveRecord')); ?></td>
</tr>
<tr id="beforeValidate">
  <td><?php echo CHtml::link('beforeValidate()', array('/site/doc', 'view' => 'YdAttachment', '#' => 'beforeValidate-detail')); ?></td>
  <td>Actions to be performed before the model is validated</td>
  <td>YdAttachment</td>
</tr>
<tr class="inherited" id="instantiate">
  <td><?php echo CHtml::link('instantiate()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'instantiate-detail')); ?></td>
  <td>Creates an active record instance.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="query">
  <td><?php echo CHtml::link('query()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'query-detail')); ?></td>
  <td>Performs the actual DB query and populates the AR objects with the query result.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
</table>
</div>
<a name="events"></a>

<div class="summary docEvent">
<h2>Events</h2>

<p><a href="#" class="toggle">Hide inherited events</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-event" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>Event</th><th>Description</th><th>Defined By</th>
</tr>
<tr class="inherited" id="onBeforeSave">
  <td><?php echo CHtml::link('onBeforeSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeSave-detail')); ?></td>
  <td>This event is raised before the record is saved.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onAfterSave">
  <td><?php echo CHtml::link('onAfterSave', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterSave-detail')); ?></td>
  <td>This event is raised after the record is saved.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onBeforeDelete">
  <td><?php echo CHtml::link('onBeforeDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeDelete-detail')); ?></td>
  <td>This event is raised before the record is deleted.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onAfterDelete">
  <td><?php echo CHtml::link('onAfterDelete', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterDelete-detail')); ?></td>
  <td>This event is raised after the record is deleted.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onBeforeFind">
  <td><?php echo CHtml::link('onBeforeFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeFind-detail')); ?></td>
  <td>This event is raised before an AR finder performs a find call.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onAfterFind">
  <td><?php echo CHtml::link('onAfterFind', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onAfterFind-detail')); ?></td>
  <td>This event is raised after the record is instantiated by a find method.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onBeforeCount">
  <td><?php echo CHtml::link('onBeforeCount', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'onBeforeCount-detail')); ?></td>
  <td>This event is raised before an AR finder performs a count call.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="onAfterConstruct">
  <td><?php echo CHtml::link('onAfterConstruct', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterConstruct-detail')); ?></td>
  <td>This event is raised after the model instance is created by new operator.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onBeforeValidate">
  <td><?php echo CHtml::link('onBeforeValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onBeforeValidate-detail')); ?></td>
  <td>This event is raised before the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onAfterValidate">
  <td><?php echo CHtml::link('onAfterValidate', array('/site/doc', 'view' => 'CModel', '#' => 'onAfterValidate-detail')); ?></td>
  <td>This event is raised after the validation is performed.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="onUnsafeAttribute">
  <td><?php echo CHtml::link('onUnsafeAttribute', array('/site/doc', 'view' => 'CModel', '#' => 'onUnsafeAttribute-detail')); ?></td>
  <td>This method is invoked when an unsafe attribute is being massively assigned.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
</table>
</div>
<h2>Property Details</h2>
<div class="detailHeader" id="attachmentFile-detail">
attachmentFile<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getAttachmentFile</b>', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getAttachmentFile')); ?>()</div>

<p></p>


<div class="detailHeader" id="attachmentPath-detail">
attachmentPath<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getAttachmentPath</b>', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getAttachmentPath')); ?>()</div>

<p></p>


<div class="detailHeader" id="created-detail">
created<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
datetime <b>created</b>;</div>

<p></p>


<div class="detailHeader" id="deleted-detail">
deleted<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
datetime <b>deleted</b>;</div>

<p></p>


<div class="detailHeader" id="extension-detail">
extension<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
string <b>extension</b>;</div>

<p></p>


<div class="detailHeader" id="filename-detail">
filename<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
string <b>filename</b>;</div>

<p></p>


<div class="detailHeader" id="filesize-detail">
filesize<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
integer <b>filesize</b>;</div>

<p></p>


<div class="detailHeader" id="filetype-detail">
filetype<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
string <b>filetype</b>;</div>

<p></p>


<div class="detailHeader" id="handleFileUpload-detail">
handleFileUpload<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public bool <b>$handleFileUpload</b>;</div>

<p>true if we are expecting a user upload</p>


<div class="detailHeader" id="id-detail">
id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
integer <b>id</b>;</div>

<p></p>


<div class="detailHeader" id="imageExtensions-detail">
imageExtensions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$imageExtensions</b>;</div>

<p></p>


<div class="detailHeader" id="model-detail">
model<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
string <b>model</b>;</div>

<p></p>


<div class="detailHeader" id="model_id-detail">
model_id<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
integer <b>model_id</b>;</div>

<p></p>


<div class="detailHeader" id="notes-detail">
notes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
string <b>notes</b>;</div>

<p></p>


<div class="detailHeader" id="pdfExtensions-detail">
pdfExtensions<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public static array <b>$pdfExtensions</b>;</div>

<p></p>


<div class="detailHeader" id="sort_order-detail">
sort_order<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
integer <b>sort_order</b>;</div>

<p></p>


<div class="detailHeader" id="thumb-detail">
thumb<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getThumb</b>', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getThumb')); ?>(string $size='60x60', null $url=NULL)</div>

<p></p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getUrl</b>', array('/site/doc', 'view' => 'YdAttachment', '#' => 'getUrl')); ?>(string $action='view', array $params=array (
))</div>

<p>Returns a URL to this model</p>


<h2>Method Details</h2>

<div class="detailHeader" id="afterSave-detail">
afterSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>afterSave</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L154">dressing/models/YdAttachment.php#L154</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">();<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;handle&nbsp;the&nbsp;file&nbsp;upload<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isNewRecord&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleFileUpload</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileInfo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">pathinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttachmentPath</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$fileInfo</span><span style="color: #007700">[</span><span style="color: #DD0000">'extension'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">0777</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveAs</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;clear&nbsp;cache&nbsp;for&nbsp;jobs&nbsp;and&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'Job'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Item'</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ActiveRecord</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">findByPk</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model_id</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$model</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$model</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">clearCache</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleFileUpload&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Actions to be performed after the model is saved</p>


<div class="detailHeader" id="attributeLabels-detail">
attributeLabels()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>attributeLabels</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">customized attribute labels (name=>label)</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L103">dressing/models/YdAttachment.php#L103</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">attributeLabels</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'ID'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'filename'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'File'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'notes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">t</span><span style="color: #007700">(</span><span style="color: #DD0000">'dressing'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Notes'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="beforeValidate-detail">
beforeValidate()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>beforeValidate</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L132">dressing/models/YdAttachment.php#L132</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeValidate</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">beforeValidate</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;handle&nbsp;the&nbsp;file&nbsp;upload<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isNewRecord&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">handleFileUpload</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CUploadedFile</span><span style="color: #007700">::</span><span style="color: #0000BB">getInstance</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'filename'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileInfo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">pathinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extension&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$fileInfo</span><span style="color: #007700">[</span><span style="color: #DD0000">'extension'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filetype&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filesize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_file</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tempName</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Actions to be performed before the model is validated</p>


<div class="detailHeader" id="getAttachmentFile-detail">
getAttachmentFile()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getAttachmentFile</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L198">dressing/models/YdAttachment.php#L198</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getAttachmentFile</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttachmentPath</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extension</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$dir&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;||&nbsp;!</span><span style="color: #0000BB">filesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$file</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getAttachmentPath-detail">
getAttachmentPath()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getAttachmentPath</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L182">dressing/models/YdAttachment.php#L182</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getAttachmentPath</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$folder&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">basePath</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'attachment'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">model_id</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//$path&nbsp;=&nbsp;$folder&nbsp;.&nbsp;DIRECTORY_SEPARATOR&nbsp;.&nbsp;$this-&gt;filename;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$folder</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$success&nbsp;</span><span style="color: #007700">=&nbsp;@</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">$folder</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0777</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$success</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">"could&nbsp;not&nbsp;mkdir&nbsp;[</span><span style="color: #0000BB">$folder</span><span style="color: #DD0000">]"</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$folder</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getPopup-detail">
getPopup()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool|string <b>getPopup</b>($size $size)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$size</td>
  <td class="paramTypeCol">$size</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L252">dressing/models/YdAttachment.php#L252</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPopup</span><span style="color: #007700">(</span><span style="color: #0000BB">$size</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$link&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">user</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setState</span><span style="color: #007700">(</span><span style="color: #DD0000">'attachmentViewKey.'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extension</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'jpg'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'gif'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'png'</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$img&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/attachment/view/id/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/thumb/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/attachment/view/id/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/thumb/800x800/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$link&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'data-toggle'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'modal'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extension</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'pdf'</span><span style="color: #007700">)))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$img&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/attachment/view/id/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/thumb/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;array(</span><span style="color: #DD0000">'/attachment/view'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dl'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$link&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$img</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$link</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getStaticThumb-detail">
getStaticThumb()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>getStaticThumb</b>($size $size, $created $created, $id $id, $filename $filename, $url $url)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$size</td>
  <td class="paramTypeCol">$size</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$created</td>
  <td class="paramTypeCol">$created</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$id</td>
  <td class="paramTypeCol">$id</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$filename</td>
  <td class="paramTypeCol">$filename</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">$url</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L231">dressing/models/YdAttachment.php#L231</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">static&nbsp;function&nbsp;</span><span style="color: #0000BB">getStaticThumb</span><span style="color: #007700">(</span><span style="color: #0000BB">$size</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$created</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$wh&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">'x'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$cache&nbsp;</span><span style="color: #007700">=&nbsp;(</span><span style="color: #0000BB">$wh</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">100&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$wh</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;&lt;=&nbsp;</span><span style="color: #0000BB">100</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #DD0000">'/cache/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">params</span><span style="color: #007700">[</span><span style="color: #DD0000">'hashKey'</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$created</span><span style="color: #007700">)&nbsp;:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$cache</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$thumb&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/attachment/view/id/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/thumb/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$cache</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$thumb&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">request</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">baseUrl&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/attachment/view/id/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/thumb/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/filename/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$filename</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$url</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$thumb&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$thumb</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$thumb</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Static method to get a thumb</p>


<div class="detailHeader" id="getThumb-detail">
getThumb()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getThumb</b>(string $size='60x60', null $url=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$size</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$url</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L216">dressing/models/YdAttachment.php#L216</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">function&nbsp;</span><span style="color: #0000BB">getThumb</span><span style="color: #007700">(</span><span style="color: #0000BB">$size&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'60x60'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">getStaticThumb</span><span style="color: #007700">(</span><span style="color: #0000BB">$size</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strtotime</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">created</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="getUrl-detail">
getUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getUrl</b>(string $action='view', array $params=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$action</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$params</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L119">dressing/models/YdAttachment.php#L119</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'view'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/attachment/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$action</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">id</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'file'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">filename</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;(array)</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a URL to this model</p>


<div class="detailHeader" id="model()-detail">
model()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static YdAttachment <b>model</b>(string $className='YdAttachment')</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">YdAttachment</td>
  <td class="paramDescCol">the static model class</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L71">dressing/models/YdAttachment.php#L71</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$className&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$className</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns the static model of the specified AR class.</p>


<div class="detailHeader" id="rules-detail">
rules()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>rules</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol">validation rules for model attributes.</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L79">dressing/models/YdAttachment.php#L79</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">rules</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;search&nbsp;fields<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'id,model,model_id,notes,filename'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'safe'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'on'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'search'</span><span style="color: #007700">),<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;model<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'model'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'safe'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'on'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'create'</span><span style="color: #007700">),<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;model_id<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'model_id'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'safe'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'on'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'create'</span><span style="color: #007700">),<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;notes<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'notes'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'string'</span><span style="color: #007700">),<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;filename<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'filename'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'file'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'types'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'jpg,&nbsp;gif,&nbsp;png,&nbsp;pdf,&nbsp;zip'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'on'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'create'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'filename'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'string'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;);<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="thumb()-detail">
thumb()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool <b>thumb</b>($file $file, $size $size)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$file</td>
  <td class="paramTypeCol">$file</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$size</td>
  <td class="paramTypeCol">$size</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/master/yii-dressing/models/YdAttachment.php#L277">dressing/models/YdAttachment.php#L277</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">thumb</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$file</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">file_exists</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">)))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">mkdir</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">0777</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;find&nbsp;the&nbsp;image<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$image&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getAttachmentFile</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$defaultImage&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">basePath</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/data/attachment/default.jpg'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$image</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">YII_DEBUG</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cannot&nbsp;find&nbsp;source&nbsp;image&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$image&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">').'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$image&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$defaultImage</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$fileInfo&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">pathinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$fileInfo</span><span style="color: #007700">[</span><span style="color: #DD0000">'extension'</span><span style="color: #007700">]&nbsp;!=&nbsp;</span><span style="color: #DD0000">'pdf'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$imageSize&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">getimagesize</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$imageSize</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$imageSize</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$imageSize</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;&lt;&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">])<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$imageSize</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;require_once(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">getPathOfAlias</span><span style="color: #007700">(</span><span style="color: #DD0000">'vendor'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'phpThumb'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">DIRECTORY_SEPARATOR&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'phpThumb.php'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">phpThumb</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setSourceFilename</span><span style="color: #007700">(</span><span style="color: #0000BB">$image</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'config_imagemagick_path'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'convert'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'config_allow_src_above_docroot'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'convert'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'aoe'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'w'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'h'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$size</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'f'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'JPG'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;set&nbsp;the&nbsp;output&nbsp;format<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'far'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'C'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;scale&nbsp;outside<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParameter</span><span style="color: #007700">(</span><span style="color: #DD0000">'bg'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'FFFFFF'</span><span style="color: #007700">);&nbsp;</span><span style="color: #FF8000">//&nbsp;scale&nbsp;outside<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">if&nbsp;(!</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">GenerateThumbnail</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setSourceFilename</span><span style="color: #007700">(</span><span style="color: #0000BB">$defaultImage</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">GenerateThumbnail</span><span style="color: #007700">())&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cannot&nbsp;generate&nbsp;thumbnail&nbsp;from&nbsp;image&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$image&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">').'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">$phpThumb</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">RenderToFile</span><span style="color: #007700">(</span><span style="color: #0000BB">$file</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">CException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Cannot&nbsp;save&nbsp;thumbnail&nbsp;('&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$file&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">').'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Generate a thumbnail of an attachment</p>


