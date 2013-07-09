<?php
$this->breadcrumbs=array(
	'Materialmasters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Materialmaster','url'=>array('index')),
	array('label'=>'Create Materialmaster','url'=>array('create')),
	array('label'=>'Update Materialmaster','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Materialmaster','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materialmaster','url'=>array('admin')),
);
?>

<h1>View Materialmaster #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'productName',
		'productDesc',
		'quantityTotal',
		'unitPrice',
		'unitOfMeasure',
		'createdBy',
		'dateCreated',
		'countPerUOM',
		'parentID',
		'materialType',
		'bestBefore',
	),
)); ?>
