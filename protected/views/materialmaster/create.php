<?php
$this->breadcrumbs=array(
	'Materialmasters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Materialmaster','url'=>array('index')),
	array('label'=>'Manage Materialmaster','url'=>array('admin')),
);
?>

<h1>Create Materialmaster</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>