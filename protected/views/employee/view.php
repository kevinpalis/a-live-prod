<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Employee','url'=>array('index')),
	array('label'=>'Create Employee','url'=>array('create')),
	array('label'=>'Update Employee','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Employee','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee','url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'lname',
		'address',
		'zipId',
		'position',
		'supervisor',
		'date_start',
		'birth_date',
		'assigned_facilities',
		'department',
		'email',
	),
)); ?>
