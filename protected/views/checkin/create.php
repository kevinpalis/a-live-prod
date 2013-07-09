<?php
$this->breadcrumbs=array(
	'Checkins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Checkin','url'=>array('index')),
	array('label'=>'Manage Checkin','url'=>array('admin')),
);
?>

<h1>Create Checkin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>