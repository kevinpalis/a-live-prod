<?php
$this->breadcrumbs=array(
	'Caregivers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Caregiver','url'=>array('index')),
	array('label'=>'Create Caregiver','url'=>array('create')),
	array('label'=>'Update Caregiver','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Caregiver','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caregiver','url'=>array('admin')),
);
?>

<h1>View Caregiver <?php echo $model->fullName; ?></h1>



