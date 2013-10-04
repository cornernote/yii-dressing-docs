<?php
echo "<?php\n";
echo "\$this->pageTitle = \$this->pageHeading = '".$class->name."';\n";
echo "\$this->breadcrumbs = array();\n";
echo "\$this->breadcrumbs[Yii::t('app', 'Documentation')] = array('/site/doc');\n";
echo "\$this->breadcrumbs[] = '".$class->name."';\n";
echo "?>\n";
?>
<div id="nav">
<?php 
$links= array();
if($class->properties){
	$links[] = '<a href="#properties">Properties</a>';
}
if($class->methods){
	$links[] = '<a href="#methods">Methods</a>';
}
if($class->events){
	$links[] = '<a href="#events">Events</a>';
}
echo implode(' | ', $links);
?>
</div>

<?php $this->renderPartial('classSummary',array('class'=>$class)); ?>

<a name="properties"></a>
<?php $this->renderPartial('propertySummary',array('class'=>$class,'protected'=>false)); ?>
<?php $this->renderPartial('propertySummary',array('class'=>$class,'protected'=>true)); ?>

<a name="methods"></a>
<?php $this->renderPartial('methodSummary',array('class'=>$class,'protected'=>false)); ?>
<?php $this->renderPartial('methodSummary',array('class'=>$class,'protected'=>true)); ?>

<a name="events"></a>
<?php $this->renderPartial('eventSummary',array('class'=>$class)); ?>

<?php $this->renderPartial('propertyDetails',array('class'=>$class)); ?>
<?php $this->renderPartial('methodDetails',array('class'=>$class)); ?>
