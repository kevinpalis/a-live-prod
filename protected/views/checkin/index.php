<?php
$this->breadcrumbs=array(
	'Checkins',
);

$this->menu=array(
	array('label'=>'Create Checkin','url'=>array('create')),
	array('label'=>'Manage Checkin','url'=>array('admin')),
);
?>

<h1>Checkins</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
