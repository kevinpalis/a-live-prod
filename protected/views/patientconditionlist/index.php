<?php
$this->breadcrumbs=array(
	'Patientconditionlists',
);

$this->menu=array(
	array('label'=>'Create Patientconditionlist','url'=>array('create')),
	array('label'=>'Manage Patientconditionlist','url'=>array('admin')),
);
?>

<h1>Patientconditionlists</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
