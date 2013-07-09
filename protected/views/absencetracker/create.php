<?php
$this->breadcrumbs=array(
	'Absencetrackers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Absencetracker','url'=>array('index')),
	array('label'=>'Manage Absencetracker','url'=>array('admin')),
);
?>

<h1>Create Absencetracker</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>