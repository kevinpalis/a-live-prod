<?php
$this->breadcrumbs=array(
	'Materialassignments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Materialassignment','url'=>array('index')),
	array('label'=>'Manage Materialassignment','url'=>array('admin')),
);
?>

<h1>Create Materialassignment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>