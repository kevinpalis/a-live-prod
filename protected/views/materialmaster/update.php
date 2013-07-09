<?php
$this->breadcrumbs=array(
	'Materialmasters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materialmaster','url'=>array('index')),
	array('label'=>'Create Materialmaster','url'=>array('create')),
	array('label'=>'View Materialmaster','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Materialmaster','url'=>array('admin')),
);
?>

<h1>Update Materialmaster <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>