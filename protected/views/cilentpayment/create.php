<?php
$this->breadcrumbs=array(
	'Cilentpayments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cilentpayment','url'=>array('index')),
	array('label'=>'Manage Cilentpayment','url'=>array('admin')),
);
?>

<h1>Create Cilentpayment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>