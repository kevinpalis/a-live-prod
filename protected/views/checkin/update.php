<?php
$this->breadcrumbs=array(
	'Checkins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Checkin','url'=>array('index')),
	array('label'=>'Create Checkin','url'=>array('create')),
	array('label'=>'View Checkin','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Checkin','url'=>array('admin')),
);
?>

<h1>Update Checkin <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>