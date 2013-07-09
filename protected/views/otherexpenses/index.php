<?php
$this->breadcrumbs=array(
	'Otherexpenses',
);

$this->menu=array(
	array('label'=>'Create Otherexpenses','url'=>array('create')),
	array('label'=>'Manage Otherexpenses','url'=>array('admin')),
);
?>

<h1>Otherexpenses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
