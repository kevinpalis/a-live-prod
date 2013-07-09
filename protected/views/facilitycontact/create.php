<?php
$this->breadcrumbs=array(
	'Facilitycontacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facilitycontact','url'=>array('index')),
	array('label'=>'Manage Facilitycontact','url'=>array('admin')),
);
?>

<h1>Create Facilitycontact</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>