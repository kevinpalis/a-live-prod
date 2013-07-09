<?php
$this->breadcrumbs=array(
	'Absencetrackers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Absencetracker','url'=>array('index')),
	array('label'=>'Create Absencetracker','url'=>array('create')),
	array('label'=>'View Absencetracker','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Absencetracker','url'=>array('admin')),
);
?>

<h1>Update Absencetracker <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>