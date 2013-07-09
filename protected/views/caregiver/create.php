<?php
$this->breadcrumbs=array(
	'Caregivers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caregiver','url'=>array('index')),
	array('label'=>'Manage Caregiver','url'=>array('admin')),
);
?>

<h1>Create Caregiver</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>