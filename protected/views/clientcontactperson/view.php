<?php
$this->breadcrumbs=array(
	'Clientcontactpeople'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Clientcontactperson','url'=>array('index')),
	array('label'=>'Create Clientcontactperson','url'=>array('create')),
	array('label'=>'Update Clientcontactperson','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Clientcontactperson','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clientcontactperson','url'=>array('admin')),
);
?>

<h1>View Clientcontactperson #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'clientId',
		'fname',
		'lname',
		'address',
		'createdBy',
		'zipId',
		'primaryNum',
		'secondaryNum',
		'email',
		'contactType',
		'clientRelationship',
	),
)); ?>
