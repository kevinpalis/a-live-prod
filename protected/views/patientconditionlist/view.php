<?php
$this->breadcrumbs=array(
	'Patientconditionlists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Patientconditionlist','url'=>array('index')),
	array('label'=>'Create Patientconditionlist','url'=>array('create')),
	array('label'=>'Update Patientconditionlist','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Patientconditionlist','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientconditionlist','url'=>array('admin')),
);
?>

<h1>View Patientconditionlist #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'conditionName',
		'conditionType',
	),
)); ?>
