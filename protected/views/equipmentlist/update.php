<?php
$this->breadcrumbs=array(
	'Equipmentlists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equipmentlist','url'=>array('index')),
	array('label'=>'Create Equipmentlist','url'=>array('create')),
	array('label'=>'View Equipmentlist','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Equipmentlist','url'=>array('admin')),
);
?>

<h1>Update Equipmentlist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>