<?php
$this->breadcrumbs=array(
	'Clientintakes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clientintake','url'=>array('index')),
	array('label'=>'Manage Clientintake','url'=>array('admin')),
);
?>

<h3>Create Client Intake</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>