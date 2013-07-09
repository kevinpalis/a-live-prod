<?php
$this->breadcrumbs=array(
	'Clientcontactpeople',
);

$this->menu=array(
	array('label'=>'Create Clientcontactperson','url'=>array('create')),
	array('label'=>'Manage Clientcontactperson','url'=>array('admin')),
);
?>

<h1>Clientcontactpeople</h1>

<?php /*$this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ 

$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=> array(
    	'id',
		'fname',
		'lname',
		'zip.zipCode',
		'client.fullName'

    )
));

?>
