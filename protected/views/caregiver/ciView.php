<?php
$this->breadcrumbs=array(
	'Clientintakes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Clientintake','url'=>array('index')),
	array('label'=>'Create Clientintake','url'=>array('create')),
	array('label'=>'Update Clientintake','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Clientintake','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clientintake','url'=>array('admin')),
);
?>

<h1>View Clientintake #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'clientId',
		'cgSex',
		'liveIn',
		'serviceHours',
		'createdBy',
		'serviceDays',
		'cgAgeFrom',
		'cgAgeTo',
		'cgWeightFrom',
		'cgWeightTo',
		'cgHeightFrom',
		'cgHeightTo',
		'cgDriving',
		'clientsCar',
		'cgEnglishLevel',
		'pcPets',
		'pcSmoking',
		'pcLivingCondition',
		'pcWeightTransfer',
		'pcConditionList',
		'equipmentList',
		'notes',
	),
)); ?>
