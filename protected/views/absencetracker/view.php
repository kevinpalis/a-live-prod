<?php
$this->breadcrumbs=array(
	'Absencetrackers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Absencetracker','url'=>array('index')),
	array('label'=>'Create Absencetracker','url'=>array('create')),
	array('label'=>'Update Absencetracker','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Absencetracker','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Absencetracker','url'=>array('admin')),
);
?>

<h1>View Absencetracker #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'caregiverId',
		'clientId',
		'dateStart',
		'dateEnd',
		'timeStart',
		'timeEnd',
		'absenceType',
		'absenceReason',
		'dateCreated',
		'isDeducted',
	),
)); ?>
