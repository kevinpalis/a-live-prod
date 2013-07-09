<?php
$this->breadcrumbs=array(
	'Equipmentlists',
);

$this->menu=array(
	array('label'=>'Create Equipmentlist','url'=>array('create')),
	array('label'=>'Manage Equipmentlist','url'=>array('admin')),
);
?>

<h1>Equipmentlists</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
