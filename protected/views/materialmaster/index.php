<?php
$this->breadcrumbs=array(
	'Materialmasters',
);

$this->menu=array(
	array('label'=>'Create Materialmaster','url'=>array('create')),
	array('label'=>'Manage Materialmaster','url'=>array('admin')),
);
?>

<h1>Materialmasters</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
