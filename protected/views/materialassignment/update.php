<?php
$this->breadcrumbs=array(
	'Materialassignments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materialassignment','url'=>array('index')),
	array('label'=>'Create Materialassignment','url'=>array('create')),
	array('label'=>'View Materialassignment','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Materialassignment','url'=>array('admin')),
);
?>

<h1>Update Materialassignment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>