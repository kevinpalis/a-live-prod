<?php
$this->breadcrumbs=array(
	'Clientintakes',
);

$this->menu=array(
	array('label'=>'Create Clientintake','url'=>array('create')),
	array('label'=>'Manage Clientintake','url'=>array('admin')),
);
?>

<h1>Clientintakes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
