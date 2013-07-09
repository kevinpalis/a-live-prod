<?php
$this->breadcrumbs=array(
	'Otherexpenses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Otherexpenses','url'=>array('index')),
	array('label'=>'Create Otherexpenses','url'=>array('create')),
	array('label'=>'View Otherexpenses','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Otherexpenses','url'=>array('admin')),
);
?>

<h1>Update Otherexpenses <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>