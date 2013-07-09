<?php
$this->breadcrumbs=array(
	'Cilentpayments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cilentpayment','url'=>array('index')),
	array('label'=>'Create Cilentpayment','url'=>array('create')),
	array('label'=>'View Cilentpayment','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Cilentpayment','url'=>array('admin')),
);
?>

<h1>Update Cilentpayment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>