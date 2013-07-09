<?php
$this->breadcrumbs=array(
	'Otherexpenses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Otherexpenses','url'=>array('index')),
	array('label'=>'Manage Otherexpenses','url'=>array('admin')),
);
?>

<h1>Create Otherexpenses</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>