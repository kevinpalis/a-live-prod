<?php
$this->breadcrumbs=array(
	'Patientconditionlists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientconditionlist','url'=>array('index')),
	array('label'=>'Create Patientconditionlist','url'=>array('create')),
	array('label'=>'View Patientconditionlist','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Patientconditionlist','url'=>array('admin')),
);
?>

<h1>Update Patientconditionlist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>