<?php
$this->breadcrumbs=array(
	'Payrollcgs',
);

$this->menu=array(
	array('label'=>'Create Payrollcg','url'=>array('create')),
	array('label'=>'Manage Payrollcg','url'=>array('admin')),
);
?>

<h1>Payrollcgs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
