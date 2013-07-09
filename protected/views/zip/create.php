<?php
$this->breadcrumbs=array(
	'Zips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Zip','url'=>array('index')),
	array('label'=>'Manage Zip','url'=>array('admin')),
);
?>

<h1>Create Zip</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>