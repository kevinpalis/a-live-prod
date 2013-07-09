<?php
$this->breadcrumbs=array(
	'Zips'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Zip','url'=>array('index')),
	array('label'=>'Create Zip','url'=>array('create')),
	array('label'=>'Update Zip','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Zip','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zip','url'=>array('admin')),
);
?>

<h1>View Zip #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'zipCode',
		'mainCity',
		'acceptableCity',
		'county',
		'state',
	),
)); ?>
