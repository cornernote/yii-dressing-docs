<?php
echo "<?php\n";
echo "\$this->pageTitle = \$this->pageHeading = Yii::t('app', 'Class Documentation');\n";
echo "\$this->breadcrumbs = array();\n";
echo "\$this->breadcrumbs[] = Yii::t('app', 'Documentation');\n";
echo "?>\n";

$packages = $this->packages;
?>

<div class="spacer"></div>

<h2>YiiDressing</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
<?php
foreach($packages as $package=>$classes){
	if (!$package || ($package!='dressing' && strpos($package,'dressing.')===false)) continue;
	unset($packages[$package]);
	foreach($classes as $i=>$class){
	?>
	<tr>
	<?php if(!$i): ?>
	  <td rowspan="<?php echo count($classes); ?>"><?php echo '<a name="'.$package.'"></a>' . $package; ?></td>
	<?php endif; ?>
	  <td><?php echo '{{'.$class.'|'.$class.'}}'; ?></td>
	  <td><?php
		if (isset($this->classes[$class])) {
			echo $this->classes[$class]->introduction;
		}
		else {
			echo $this->views[$class]->introduction;
		}
	  
	  ?></td>
	</tr>
	<?php 
	}
}
?>
</table>

<?php
// no more packages
return;
?>
<h2>YiiBooster</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
<?php 
foreach($packages as $package=>$classes){
	if (!$package || ($package!='booster' && strpos($package,'booster.')===false)) continue;
	unset($packages[$package]);
	foreach($classes as $i=>$class){
	?>
	<tr>
	<?php if(!$i): ?>
	  <td rowspan="<?php echo count($classes); ?>"><?php echo '<a name="'.$package.'"></a>' . $package; ?></td>
	<?php endif; ?>
	  <td><?php echo '{{'.$class.'|'.$class.'}}'; ?></td>
	  <td><?php
		if (isset($this->classes[$class])) {
			echo $this->classes[$class]->introduction;
		}
		else {
			echo $this->views[$class]->introduction;
		}
	  
	  ?></td>
	</tr>
	<?php 
	}
}
?>
</table>

<h2>Yii</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
<?php 
foreach($packages as $package=>$classes){
	if (!$package || ($package!='system' && strpos($package,'system.')===false && $package!='zii' && strpos($package,'zii.')===false)) continue;
	unset($packages[$package]);
	foreach($classes as $i=>$class){
	?>
	<tr>
	<?php if(!$i): ?>
	  <td rowspan="<?php echo count($classes); ?>"><?php echo '<a name="'.$package.'"></a>' . $package; ?></td>
	<?php endif; ?>
	  <td><?php echo '{{'.$class.'|'.$class.'}}'; ?></td>
	  <td><?php
		if (isset($this->classes[$class])) {
			echo $this->classes[$class]->introduction;
		}
		else {
			echo $this->views[$class]->introduction;
		}
	  
	  ?></td>
	</tr>
	<?php 
	}
}
?>
</table>

<h2>Other</h2>
<table class="table table-condensed">
<colgroup>
	<col class="col-package" />
	<col class="col-class" />
	<col class="col-description" />
</colgroup>
<tr>
  <th>Package</th><th>Class</th><th>Description</th>
</tr>
<?php 
foreach($packages as $package=>$classes){
	foreach($classes as $i=>$class){
	?>
	<tr>
	<?php if(!$i): ?>
	  <td rowspan="<?php echo count($classes); ?>"><?php echo '<a name="'.$package.'"></a>' . $package; ?></td>
	<?php endif; ?>
	  <td><?php echo '{{'.$class.'|'.$class.'}}'; ?></td>
	  <td><?php
		if (isset($this->classes[$class])) {
			echo $this->classes[$class]->introduction;
		}
		else {
			echo $this->views[$class]->introduction;
		}
	  
	  ?></td>
	</tr>
	<?php 
	}
}
?>
</table>
