<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Client','url'=>array('index')),
	array('label'=>'Create Client','url'=>array('create')),
	array('label'=>'View Client','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>Update Client Status <?php echo $model->fullName; ?></h1>

<?php echo $this->renderPartial('_formUpdateStatus',array('model'=>$model)); ?>