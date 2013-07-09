<?php
$this->breadcrumbs=array(
	'Cilentpayments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cilentpayment','url'=>array('index')),
	array('label'=>'Create Cilentpayment','url'=>array('create')),
	array('label'=>'Update Cilentpayment','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Cilentpayment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cilentpayment','url'=>array('admin')),
);
?>

<h1>View Cilentpayment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'clientId',
		'caregiverId',
		'amountDebit',
		'amountCredit',
		'invoiceDue',
		'invoiceCreationDate',
		'invoiceType',
		'invoiceNotes',
	),
)); ?>
