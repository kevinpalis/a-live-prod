<?php
$this->breadcrumbs=array(
	'Facilitycontacts',
);

$this->menu=array(
	array('label'=>'Create Facilitycontact','url'=>array('create')),
	array('label'=>'Manage Facilitycontact','url'=>array('admin')),
);
?>

<h1>Facilitycontacts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
