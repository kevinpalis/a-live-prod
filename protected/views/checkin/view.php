<?php
$this->breadcrumbs=array(
	'Checkins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Checkin','url'=>array('index')),
	array('label'=>'Create Checkin','url'=>array('create')),
	array('label'=>'Update Checkin','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Checkin','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Checkin','url'=>array('admin')),
);
?>

<h1>View Checkin #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'facilityId',
		'facilityContactId',
		'employeeId',
		'dateCreated',
		'notes',
		'materialGiven',
		'materialQty',
	),
)); ?>
