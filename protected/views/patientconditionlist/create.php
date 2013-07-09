<?php
$this->breadcrumbs=array(
	'Patientconditionlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Patientconditionlist','url'=>array('index')),
	array('label'=>'Manage Patientconditionlist','url'=>array('admin')),
);
?>

<h1>Create Patientconditionlist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>