<?php
$this->breadcrumbs=array(
	'Payrollcgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Payrollcg','url'=>array('index')),
	array('label'=>'Manage Payrollcg','url'=>array('admin')),
);
?>

<h1>Create Payrollcg</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>