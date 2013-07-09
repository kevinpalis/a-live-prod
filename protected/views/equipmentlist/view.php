<?php
$this->breadcrumbs=array(
	'Equipmentlists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Equipmentlist','url'=>array('index')),
	array('label'=>'Create Equipmentlist','url'=>array('create')),
	array('label'=>'Update Equipmentlist','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Equipmentlist','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipmentlist','url'=>array('admin')),
);
?>

<h1>View Equipmentlist #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'equipmentName',
		'equipmentType',
	),
)); ?>
