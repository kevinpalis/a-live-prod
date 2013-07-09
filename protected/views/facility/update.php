<?php
$this->breadcrumbs=array(
	'Facilities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facility','url'=>array('index')),
	array('label'=>'Create Facility','url'=>array('create')),
	array('label'=>'View Facility','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Facility','url'=>array('admin')),
);
?>

<h1>Update Facility <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>