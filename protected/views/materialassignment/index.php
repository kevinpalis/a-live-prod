<?php
$this->breadcrumbs=array(
	'Materialassignments',
);

$this->menu=array(
	array('label'=>'Create Materialassignment','url'=>array('create')),
	array('label'=>'Manage Materialassignment','url'=>array('admin')),
);
?>

<h1>Materialassignments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
