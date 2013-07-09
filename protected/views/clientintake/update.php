<?php
$this->breadcrumbs=array(
	'Clientintakes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clientintake','url'=>array('index')),
	array('label'=>'Create Clientintake','url'=>array('create')),
	array('label'=>'View Clientintake','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Clientintake','url'=>array('admin')),
);
?>

<h3>Update Client Intake for <?php echo $model->client->fullName; ?></h3>

<?php echo $this->renderPartial('_formUpdate',array('model'=>$model)); ?>