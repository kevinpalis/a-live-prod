<?php
$this->breadcrumbs=array(
	'Clientcontactpeople'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clientcontactperson','url'=>array('index')),
	array('label'=>'Create Clientcontactperson','url'=>array('create')),
	array('label'=>'View Clientcontactperson','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Clientcontactperson','url'=>array('admin')),
);
?>

<h1>Update Clientcontactperson <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>