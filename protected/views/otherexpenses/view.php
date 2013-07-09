<?php
$this->breadcrumbs=array(
	'Otherexpenses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Otherexpenses','url'=>array('index')),
	array('label'=>'Create Otherexpenses','url'=>array('create')),
	array('label'=>'Update Otherexpenses','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Otherexpenses','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Otherexpenses','url'=>array('admin')),
);
?>

<h1>View Otherexpenses #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'clientId',
		'caregiverId',
		'expenseType',
		'expenseAmount',
		'milesDriven',
		'mileRate',
		'startDate',
		'endDate',
		'startTime',
		'endTime',
		'notes',
	),
)); ?>
