<?php
$this->breadcrumbs=array(
	'Zips'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Zip','url'=>array('index')),
	array('label'=>'Create Zip','url'=>array('create')),
	array('label'=>'View Zip','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Zip','url'=>array('admin')),
);
?>

<h1>Update Zip <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>