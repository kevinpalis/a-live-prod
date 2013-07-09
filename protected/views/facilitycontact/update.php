<?php
$this->breadcrumbs=array(
	'Facilitycontacts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facilitycontact','url'=>array('index')),
	array('label'=>'Create Facilitycontact','url'=>array('create')),
	array('label'=>'View Facilitycontact','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Facilitycontact','url'=>array('admin')),
);
?>

<h1>Update Facilitycontact <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>