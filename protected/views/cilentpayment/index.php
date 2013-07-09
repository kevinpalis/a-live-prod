<?php
$this->breadcrumbs=array(
	'Cilentpayments',
);

$this->menu=array(
	array('label'=>'Create Cilentpayment','url'=>array('create')),
	array('label'=>'Manage Cilentpayment','url'=>array('admin')),
);
?>

<h1>Cilentpayments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
