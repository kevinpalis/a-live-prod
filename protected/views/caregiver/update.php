<?php
$this->breadcrumbs=array(
	'Caregivers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Caregiver','url'=>array('index')),
	array('label'=>'Create Caregiver','url'=>array('create')),
	array('label'=>'View Caregiver','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Caregiver','url'=>array('admin')),
);
?>

<h1>Update Caregiver <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>