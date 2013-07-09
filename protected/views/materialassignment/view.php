<?php
$this->breadcrumbs=array(
	'Materialassignments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Materialassignment','url'=>array('index')),
	array('label'=>'Create Materialassignment','url'=>array('create')),
	array('label'=>'Update Materialassignment','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Materialassignment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materialassignment','url'=>array('admin')),
);
?>

<h1>View Materialassignment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'materialmasterId',
		'employeeId',
		'assignedBy',
		'quantityAssigned',
		'dateCreated',
	),
)); ?>
