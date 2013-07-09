<?php
$this->breadcrumbs=array(
	'Absencetrackers',
);

$this->menu=array(
	array('label'=>'Create Absencetracker','url'=>array('create')),
	array('label'=>'Manage Absencetracker','url'=>array('admin')),
);
?>

<h1>Absencetrackers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
