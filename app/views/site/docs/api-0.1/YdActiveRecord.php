<?php
$this->pageTitle = $this->pageHeading = 'YdActiveRecord';
$this->breadcrumbs = array();
$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');
$this->breadcrumbs[] = 'YdActiveRecord';
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
  <td><?php echo CHtml::link('dressing.components', array('/site/doc', '#' => 'dressing.components')); ?></td>
</tr>
<tr>
  <th>Inheritance</th>
  <td>class YdActiveRecord &raquo;
<?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?> &raquo;
<?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?> &raquo;
<?php echo CHtml::link('CComponent', array('/site/doc', 'view' => 'CComponent')); ?></td>
</tr>
<tr>
  <th>Implements</th>
  <td>IteratorAggregate, Traversable, ArrayAccess</td>
</tr>
<tr>
  <th>Subclasses</th>
  <td><?php echo CHtml::link('YdAttachment', array('/site/doc', 'view' => 'YdAttachment')); ?>, <?php echo CHtml::link('YdAudit', array('/site/doc', 'view' => 'YdAudit')); ?>, <?php echo CHtml::link('YdAuditTrail', array('/site/doc', 'view' => 'YdAuditTrail')); ?>, <?php echo CHtml::link('YdContactUs', array('/site/doc', 'view' => 'YdContactUs')); ?>, <?php echo CHtml::link('YdEmailSpool', array('/site/doc', 'view' => 'YdEmailSpool')); ?>, <?php echo CHtml::link('YdEmailTemplate', array('/site/doc', 'view' => 'YdEmailTemplate')); ?>, <?php echo CHtml::link('YdLookup', array('/site/doc', 'view' => 'YdLookup')); ?>, <?php echo CHtml::link('YdRole', array('/site/doc', 'view' => 'YdRole')); ?>, <?php echo CHtml::link('YdSetting', array('/site/doc', 'view' => 'YdSetting')); ?>, <?php echo CHtml::link('YdSiteMenu', array('/site/doc', 'view' => 'YdSiteMenu')); ?>, <?php echo CHtml::link('YdToken', array('/site/doc', 'view' => 'YdToken')); ?>, <?php echo CHtml::link('YdUser', array('/site/doc', 'view' => 'YdUser')); ?>, <?php echo CHtml::link('YdUserToRole', array('/site/doc', 'view' => 'YdUserToRole')); ?></td>
</tr>
<tr>
  <th>Source Code</th>
  <td><a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php">dressing/components/YdActiveRecord.php</a></td>
</tr>
<tr>
  <th>Authors</th>
  <td>Brett O&#039;Donnell &lt;cornernote@gmail.com&gt;, Zain Ul abidin &lt;zainengineer@gmail.com&gt;</td>
</tr>
</table>

<div id="classDescription">
YdActiveRecord</div>
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
<tr id="controllerName">
  <td><?php echo CHtml::link('controllerName', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'controllerName-detail')); ?></td>
  <td>string</td>
  <td>The name of this model to be used in links</td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="db">
  <td><?php echo CHtml::link('db', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'db-detail')); ?></td>
  <td><?php echo CHtml::link('CDbConnection', array('/site/doc', 'view' => 'CDbConnection')); ?></td>
  <td>the default database connection for all active record classes.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="dbAttributes">
  <td><?php echo CHtml::link('dbAttributes', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'dbAttributes-detail')); ?></td>
  <td>array</td>
  <td>The attributes that are currently in the database</td>
  <td>YdActiveRecord</td>
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
<tr id="errorString">
  <td><?php echo CHtml::link('errorString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'errorString-detail')); ?></td>
  <td>string</td>
  <td>Returns error array as a string</td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="errors">
  <td><?php echo CHtml::link('errors', array('/site/doc', 'view' => 'CModel', '#' => 'errors-detail')); ?></td>
  <td>array</td>
  <td>Returns the errors for all attribute or a single attribute.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr id="idString">
  <td><?php echo CHtml::link('idString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'idString-detail')); ?></td>
  <td>string</td>
  <td>The name and id of the model</td>
  <td>YdActiveRecord</td>
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
<tr id="link">
  <td><?php echo CHtml::link('link', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'link-detail')); ?></td>
  <td>string</td>
  <td>Returns a Link to this model</td>
  <td>YdActiveRecord</td>
</tr>
<tr id="menuLinks">
  <td><?php echo CHtml::link('menuLinks', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'menuLinks-detail')); ?></td>
  <td>array</td>
  <td>Returns a list of links to be used in grids and menus.</td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="metaData">
  <td><?php echo CHtml::link('metaData', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'metaData-detail')); ?></td>
  <td><?php echo CHtml::link('CActiveRecordMetaData', array('/site/doc', 'view' => 'CActiveRecordMetaData')); ?></td>
  <td>Returns the meta-data for this AR</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="name">
  <td><?php echo CHtml::link('name', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'name-detail')); ?></td>
  <td>string</td>
  <td>The name of this model to be used in titles</td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="oldPrimaryKey">
  <td><?php echo CHtml::link('oldPrimaryKey', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'oldPrimaryKey-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the old primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="primaryKey">
  <td><?php echo CHtml::link('primaryKey', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'primaryKey-detail')); ?></td>
  <td>mixed</td>
  <td>Returns the primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="primaryKeySchemaString">
  <td><?php echo CHtml::link('primaryKeySchemaString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'primaryKeySchemaString-detail')); ?></td>
  <td>string</td>
  <td>Returns Primary Key Schema as a string</td>
  <td>YdActiveRecord</td>
</tr>
<tr id="primaryKeyString">
  <td><?php echo CHtml::link('primaryKeyString', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'primaryKeyString-detail')); ?></td>
  <td>string</td>
  <td>Returns Primary Key as a string</td>
  <td>YdActiveRecord</td>
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
<tr id="url">
  <td><?php echo CHtml::link('url', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'url-detail')); ?></td>
  <td>array</td>
  <td>Returns a URL to this model</td>
  <td>YdActiveRecord</td>
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
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'scenario')); ?>.</td>
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
  <td>Calls <?php echo CHtml::link('afterFind', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'afterFind')); ?>.</td>
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
<tr class="inherited" id="attributeLabels">
  <td><?php echo CHtml::link('attributeLabels()', array('/site/doc', 'view' => 'CModel', '#' => 'attributeLabels-detail')); ?></td>
  <td>Returns the attribute labels.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="attributeNames">
  <td><?php echo CHtml::link('attributeNames()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'attributeNames-detail')); ?></td>
  <td>Returns the list of all attribute names of the model.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="beforeFindInternal">
  <td><?php echo CHtml::link('beforeFindInternal()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'beforeFindInternal-detail')); ?></td>
  <td>Calls <?php echo CHtml::link('beforeFind', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'beforeFind')); ?>.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="behaviors">
  <td><?php echo CHtml::link('behaviors()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'behaviors-detail')); ?></td>
  <td></td>
  <td>YdActiveRecord</td>
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
<tr id="changed">
  <td><?php echo CHtml::link('changed()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'changed-detail')); ?></td>
  <td>Check if any fields have changed</td>
  <td>YdActiveRecord</td>
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
  <td>Creates validator objects based on the specification in <?php echo CHtml::link('rules', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'rules')); ?>.</td>
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
<tr id="getControllerName">
  <td><?php echo CHtml::link('getControllerName()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getControllerName-detail')); ?></td>
  <td>The name of this model to be used in links</td>
  <td>YdActiveRecord</td>
</tr>
<tr id="getDbAttribute">
  <td><?php echo CHtml::link('getDbAttribute()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getDbAttribute-detail')); ?></td>
  <td>Gets an attribute, as it is in the database</td>
  <td>YdActiveRecord</td>
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
<tr id="getErrorString">
  <td><?php echo CHtml::link('getErrorString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getErrorString-detail')); ?></td>
  <td>Returns error array as a string</td>
  <td>YdActiveRecord</td>
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
<tr id="getIdString">
  <td><?php echo CHtml::link('getIdString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getIdString-detail')); ?></td>
  <td>The name and id of the model</td>
  <td>YdActiveRecord</td>
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
<tr id="getLink">
  <td><?php echo CHtml::link('getLink()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getLink-detail')); ?></td>
  <td>Returns a Link to this model</td>
  <td>YdActiveRecord</td>
</tr>
<tr id="getMenuLinks">
  <td><?php echo CHtml::link('getMenuLinks()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getMenuLinks-detail')); ?></td>
  <td>Returns a list of links to be used in grids and menus.</td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="getMetaData">
  <td><?php echo CHtml::link('getMetaData()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getMetaData-detail')); ?></td>
  <td>Returns the meta-data for this AR</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="getName">
  <td><?php echo CHtml::link('getName()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getName-detail')); ?></td>
  <td>The name of this model to be used in titles</td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="getOldPrimaryKey">
  <td><?php echo CHtml::link('getOldPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getOldPrimaryKey-detail')); ?></td>
  <td>Returns the old primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="getPrimaryKey">
  <td><?php echo CHtml::link('getPrimaryKey()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'getPrimaryKey-detail')); ?></td>
  <td>Returns the primary key value.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr id="getPrimaryKeySchemaString">
  <td><?php echo CHtml::link('getPrimaryKeySchemaString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getPrimaryKeySchemaString-detail')); ?></td>
  <td>Returns Primary Key Schema as a string</td>
  <td>YdActiveRecord</td>
</tr>
<tr id="getPrimaryKeyString">
  <td><?php echo CHtml::link('getPrimaryKeyString()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getPrimaryKeyString-detail')); ?></td>
  <td>Returns Primary Key as a string</td>
  <td>YdActiveRecord</td>
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
<tr id="getUrl">
  <td><?php echo CHtml::link('getUrl()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getUrl-detail')); ?></td>
  <td>Returns a URL to this model</td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="getValidatorList">
  <td><?php echo CHtml::link('getValidatorList()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidatorList-detail')); ?></td>
  <td>Returns all the validators declared in the model.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
</tr>
<tr class="inherited" id="getValidators">
  <td><?php echo CHtml::link('getValidators()', array('/site/doc', 'view' => 'CModel', '#' => 'getValidators-detail')); ?></td>
  <td>Returns the validators applicable to the current <?php echo CHtml::link('scenario', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'scenario')); ?>.</td>
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
<tr id="model">
  <td><?php echo CHtml::link('model()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'model-detail')); ?></td>
  <td>Returns the static model of the specified AR class.</td>
  <td>YdActiveRecord</td>
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
<tr id="relations">
  <td><?php echo CHtml::link('relations()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'relations-detail')); ?></td>
  <td></td>
  <td>YdActiveRecord</td>
</tr>
<tr class="inherited" id="resetScope">
  <td><?php echo CHtml::link('resetScope()', array('/site/doc', 'view' => 'CActiveRecord', '#' => 'resetScope-detail')); ?></td>
  <td>Resets all scopes and criterias applied.</td>
  <td><?php echo CHtml::link('CActiveRecord', array('/site/doc', 'view' => 'CActiveRecord')); ?></td>
</tr>
<tr class="inherited" id="rules">
  <td><?php echo CHtml::link('rules()', array('/site/doc', 'view' => 'CModel', '#' => 'rules-detail')); ?></td>
  <td>Returns the validation rules for attributes.</td>
  <td><?php echo CHtml::link('CModel', array('/site/doc', 'view' => 'CModel')); ?></td>
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
<tr id="setDefaultAttributes">
  <td><?php echo CHtml::link('setDefaultAttributes()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'setDefaultAttributes-detail')); ?></td>
  <td>Allows setting attributes</td>
  <td>YdActiveRecord</td>
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
<tr id="tableName">
  <td><?php echo CHtml::link('tableName()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'tableName-detail')); ?></td>
  <td>Guess the table name based on the class</td>
  <td>YdActiveRecord</td>
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
<tr id="afterFind">
  <td><?php echo CHtml::link('afterFind()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'afterFind-detail')); ?></td>
  <td>Actions to be performed after the model is loaded</td>
  <td>YdActiveRecord</td>
</tr>
<tr id="afterSave">
  <td><?php echo CHtml::link('afterSave()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'afterSave-detail')); ?></td>
  <td>Actions to be performed after the model is saved</td>
  <td>YdActiveRecord</td>
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
<tr id="beforeSave">
  <td><?php echo CHtml::link('beforeSave()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'beforeSave-detail')); ?></td>
  <td>Actions to be performed before the model is saved</td>
  <td>YdActiveRecord</td>
</tr>
<tr id="beforeValidate">
  <td><?php echo CHtml::link('beforeValidate()', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'beforeValidate-detail')); ?></td>
  <td>Actions to be performed before the model is saved</td>
  <td>YdActiveRecord</td>
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
<div class="detailHeader" id="controllerName-detail">
controllerName<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getControllerName</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getControllerName')); ?>()</div>

<p>The name of this model to be used in links</p>


<div class="detailHeader" id="dbAttributes-detail">
dbAttributes<span class="detailHeaderTag">
property
</span>
</div>

<div class="signature">
public array <b>$dbAttributes</b>;</div>

<p>The attributes that are currently in the database</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>ActiveRecord::getDbAttribute()</li>
</ul>
</div>

<div class="detailHeader" id="errorString-detail">
errorString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getErrorString</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getErrorString')); ?>()</div>

<p>Returns error array as a string</p>


<div class="detailHeader" id="idString-detail">
idString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getIdString</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getIdString')); ?>()</div>

<p>The name and id of the model
eg: activeRecord-123</p>


<div class="detailHeader" id="link-detail">
link<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getLink</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getLink')); ?>(string $title=NULL, string $urlAction='view', array $urlParams=array (
), array $htmlOptions=array (
))</div>

<p>Returns a Link to this model</p>


<div class="detailHeader" id="menuLinks-detail">
menuLinks<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getMenuLinks</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getMenuLinks')); ?>(bool $extra=false)</div>

<p>Returns a list of links to be used in grids and menus.</p>


<div class="detailHeader" id="name-detail">
name<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getName</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getName')); ?>()</div>

<p>The name of this model to be used in titles</p>


<div class="detailHeader" id="primaryKeySchemaString-detail">
primaryKeySchemaString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPrimaryKeySchemaString</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getPrimaryKeySchemaString')); ?>()</div>

<p>Returns Primary Key Schema as a string</p>


<div class="detailHeader" id="primaryKeyString-detail">
primaryKeyString<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public string <?php echo CHtml::link('<b>getPrimaryKeyString</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getPrimaryKeyString')); ?>()</div>

<p>Returns Primary Key as a string</p>


<div class="detailHeader" id="url-detail">
url<span class="detailHeaderTag">
property
 <em>read-only</em> </span>
</div>

<div class="signature">
public array <?php echo CHtml::link('<b>getUrl</b>', array('/site/doc', 'view' => 'YdActiveRecord', '#' => 'getUrl')); ?>(string $action='view', array $params=array (
))</div>

<p>Returns a URL to this model</p>


<h2>Method Details</h2>

<div class="detailHeader" id="afterFind-detail">
afterFind()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected void <b>afterFind</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L80">dressing/components/YdActiveRecord.php#L80</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbAttributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterFind</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Actions to be performed after the model is loaded</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L69">dressing/components/YdActiveRecord.php#L69</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;afterSave&nbsp;needs&nbsp;to&nbsp;be&nbsp;called&nbsp;before&nbsp;resetting&nbsp;dbAttributes&nbsp;in&nbsp;order&nbsp;for&nbsp;behaviours<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;such&nbsp;as&nbsp;AuditTrail&nbsp;to&nbsp;have&nbsp;the&nbsp;correct&nbsp;dbAttributes&nbsp;values<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">afterSave</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbAttributes&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Actions to be performed after the model is saved</p>


<div class="detailHeader" id="beforeSave-detail">
beforeSave()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
protected bool <b>beforeSave</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L60">dressing/components/YdActiveRecord.php#L60</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeSave</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDefaultAttributes</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">beforeSave</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Actions to be performed before the model is saved</p>


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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L49">dressing/components/YdActiveRecord.php#L49</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">protected&nbsp;function&nbsp;</span><span style="color: #0000BB">beforeValidate</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setDefaultAttributes</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">beforeValidate</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Actions to be performed before the model is saved</p>


<div class="detailHeader" id="behaviors-detail">
behaviors()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>behaviors</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L251">dressing/components/YdActiveRecord.php#L251</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dressing</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelMap</span><span style="color: #007700">[</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)][</span><span style="color: #DD0000">'behaviors'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dressing</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelMap</span><span style="color: #007700">[</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)][</span><span style="color: #DD0000">'behaviors'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">behaviors</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="changed-detail">
changed()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public bool|string|array <b>changed</b>(string $field=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$field</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">bool|string|array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L92">dressing/components/YdActiveRecord.php#L92</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">changed</span><span style="color: #007700">(</span><span style="color: #0000BB">$field&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isNewRecord</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$field</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$field</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$field</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes&nbsp;</span><span style="color: #007700">as&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getDbAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Check if any fields have changed</p>


<div class="detailHeader" id="getControllerName-detail">
getControllerName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getControllerName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L131">dressing/components/YdActiveRecord.php#L131</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getControllerName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">lcfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">));<br />}</span>
</span>
</code></div>
</div>
<p>The name of this model to be used in links</p>


<div class="detailHeader" id="getDbAttribute-detail">
getDbAttribute()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public null <b>getDbAttribute</b>($attribute $attribute)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$attribute</td>
  <td class="paramTypeCol">$attribute</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">null</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L110">dressing/components/YdActiveRecord.php#L110</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getDbAttribute</span><span style="color: #007700">(</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;isset(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbAttributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">])&nbsp;?&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dbAttributes</span><span style="color: #007700">[</span><span style="color: #0000BB">$attribute</span><span style="color: #007700">]&nbsp;:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Gets an attribute, as it is in the database</p>


<div class="detailHeader" id="getErrorString-detail">
getErrorString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getErrorString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L193">dressing/components/YdActiveRecord.php#L193</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getErrorString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;foreach&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getErrors</span><span style="color: #007700">()&nbsp;as&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$attribute&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$errors</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'&nbsp;|&nbsp;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns error array as a string</p>


<div class="detailHeader" id="getIdString-detail">
getIdString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getIdString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L142">dressing/components/YdActiveRecord.php#L142</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getIdString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKeyString</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>The name and id of the model
eg: activeRecord-123</p>


<div class="detailHeader" id="getLink-detail">
getLink()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getLink</b>(string $title=NULL, string $urlAction='view', array $urlParams=array (
), array $htmlOptions=array (
))</div>
</td></tr>
<tr>
  <td class="paramNameCol">$title</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$urlAction</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$urlParams</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$htmlOptions</td>
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
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L171">dressing/components/YdActiveRecord.php#L171</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getLink</span><span style="color: #007700">(</span><span style="color: #0000BB">$title&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$urlAction&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'view'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$urlParams&nbsp;</span><span style="color: #007700">=&nbsp;array(),&nbsp;</span><span style="color: #0000BB">$htmlOptions&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$title&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$title&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #0000BB">$title&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getName</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">CHtml</span><span style="color: #007700">::</span><span style="color: #0000BB">link</span><span style="color: #007700">(</span><span style="color: #0000BB">$title</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$urlAction</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$urlParams</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$htmlOptions</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a Link to this model</p>


<div class="detailHeader" id="getMenuLinks-detail">
getMenuLinks()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getMenuLinks</b>(bool $extra=false)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$extra</td>
  <td class="paramTypeCol">bool</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L183">dressing/components/YdActiveRecord.php#L183</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getMenuLinks</span><span style="color: #007700">(</span><span style="color: #0000BB">$extra&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;array();<br />}</span>
</span>
</code></div>
</div>
<p>Returns a list of links to be used in grids and menus.</p>


<div class="detailHeader" id="getName-detail">
getName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L120">dressing/components/YdActiveRecord.php#L120</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getIdString</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>The name of this model to be used in titles</p>


<div class="detailHeader" id="getPrimaryKeySchemaString-detail">
getPrimaryKeySchemaString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPrimaryKeySchemaString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L207">dressing/components/YdActiveRecord.php#L207</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKeySchemaString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">tableSchema</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">primaryKey</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>
<p>Returns Primary Key Schema as a string</p>


<div class="detailHeader" id="getPrimaryKeyString-detail">
getPrimaryKeyString()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>getPrimaryKeyString</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L219">dressing/components/YdActiveRecord.php#L219</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getPrimaryKeyString</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">()))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">());<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKey</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p>Returns Primary Key as a string</p>


<div class="detailHeader" id="getUrl-detail">
getUrl()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>getUrl</b>(string $action='view', array $params=array (
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
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L154">dressing/components/YdActiveRecord.php#L154</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getUrl</span><span style="color: #007700">(</span><span style="color: #0000BB">$action&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'view'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$params&nbsp;</span><span style="color: #007700">=&nbsp;array())<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">array_merge</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getControllerName</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$action</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrimaryKeyString</span><span style="color: #007700">(),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;(array)</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br />}</span>
</span>
</code></div>
</div>
<p>Returns a URL to this model</p>


<div class="detailHeader" id="model-detail">
model()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static <?php echo CHtml::link('YdAttachment', array('/site/doc', 'view' => 'YdAttachment')); ?> <b>model</b>(string $className=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$className</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol"><?php echo CHtml::link('YdAttachment', array('/site/doc', 'view' => 'YdAttachment')); ?></td>
  <td class="paramDescCol">the static model class</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L29">dressing/components/YdActiveRecord.php#L29</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">$className&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">model</span><span style="color: #007700">(</span><span style="color: #0000BB">get_called_class</span><span style="color: #007700">());<br />}</span>
</span>
</code></div>
</div>
<p>Returns the static model of the specified AR class.</p>


<div class="detailHeader" id="relations-detail">
relations()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public array <b>relations</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">array</td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L241">dressing/components/YdActiveRecord.php#L241</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">relations</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dressing</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelMap</span><span style="color: #007700">[</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)][</span><span style="color: #DD0000">'relations'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dressing</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelMap</span><span style="color: #007700">[</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)][</span><span style="color: #DD0000">'relations'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">parent</span><span style="color: #007700">::</span><span style="color: #0000BB">relations</span><span style="color: #007700">();<br />}</span>
</span>
</code></div>
</div>
<p></p>


<div class="detailHeader" id="setDefaultAttributes-detail">
setDefaultAttributes()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>setDefaultAttributes</b>()</div>
</td></tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L40">dressing/components/YdActiveRecord.php#L40</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">setDefaultAttributes</span><span style="color: #007700">()<br />{<br />}</span>
</span>
</code></div>
</div>
<p>Allows setting attributes</p>

<div class="SeeAlso">
<h4>See Also</h4>
<ul>
	<li>ActiveRecord::beforeValidate()</li>
	<li>ActiveRecord::beforeSave()</li>
</ul>
</div>

<div class="detailHeader" id="tableName-detail">
tableName()
<span class="detailHeaderTag">
method
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public string <b>tableName</b>()</div>
</td></tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">the associated database table name</td>
</tr>
</table>

<div class="sourceCode">
<b>Source Code:</b> <a class="sourceLink" href="https://github.com/cornernote/yii-dressing/blob/yii-dressing-0.1.0/yii-dressing/components/YdActiveRecord.php#L230">dressing/components/YdActiveRecord.php#L230</a> (<b><a href="#" class="show">show</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">tableName</span><span style="color: #007700">()<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!empty(</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dressing</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelMap</span><span style="color: #007700">[</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)][</span><span style="color: #DD0000">'tableName'</span><span style="color: #007700">]))<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">Yii</span><span style="color: #007700">::</span><span style="color: #0000BB">app</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">dressing</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">modelMap</span><span style="color: #007700">[</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">)][</span><span style="color: #DD0000">'tableName'</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//throw&nbsp;new&nbsp;CException(Yii::t('dressing',&nbsp;'Table&nbsp;not&nbsp;found&nbsp;in&nbsp;YiiDressing::tableMap&nbsp;for&nbsp;class&nbsp;:class.',&nbsp;array(':class'&nbsp;=&gt;&nbsp;get_class($this))));<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">return&nbsp;</span><span style="color: #0000BB">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'yd_'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strtolower</span><span style="color: #007700">(</span><span style="color: #0000BB">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'/([a-z])([A-Z])/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'$1_$2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">))));<br />}</span>
</span>
</code></div>
</div>
<p>Guess the table name based on the class</p>


