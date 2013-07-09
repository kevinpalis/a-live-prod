<?php
$this->breadcrumbs=array(
	'Equipmentlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Equipmentlist','url'=>array('index')),
	array('label'=>'Manage Equipmentlist','url'=>array('admin')),
);
?>

<h1>Create Equipmentlist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>