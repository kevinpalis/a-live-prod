<?php
$this->breadcrumbs=array(
	'Zips',
);

$this->menu=array(
	array('label'=>'Create Zip','url'=>array('create')),
	array('label'=>'Manage Zip','url'=>array('admin')),
);
?>

<h1>Zips</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
