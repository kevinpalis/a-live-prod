<?php
$this->breadcrumbs=array(
	'Payrollcgs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Payrollcg','url'=>array('index')),
	array('label'=>'Create Payrollcg','url'=>array('create')),
	array('label'=>'View Payrollcg','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Payrollcg','url'=>array('admin')),
);
?>

<h1>Update Payrollcg <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>