<?php
$this->breadcrumbs=array(
	'Payrollcgs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Payrollcg','url'=>array('index')),
	array('label'=>'Create Payrollcg','url'=>array('create')),
	array('label'=>'Update Payrollcg','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Payrollcg','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Payrollcg','url'=>array('admin')),
);
?>

<h1>View Payrollcg #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'caregiverId',
		'clientId',
		'dateStart',
		'dateEnd',
		'amountPaid',
		'payType',
		'dateCreated',
	),
)); ?>
