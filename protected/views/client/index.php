<?php
$this->breadcrumbs=array(
	'Clients',
);

$this->menu=array(
	array('label'=>'Create Client','url'=>array('create')),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>Clients</h1>
	
<?php /* $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_list',
)); */

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=> array(
    	'id',
		'fname',
		'lname',
		'address',
		array(
			'name'=>'zip',
			'header'=>"City, Zip State",
			'value'=>'$data->zip->fullZipDetails'
		),
		'primaryNum',
		'clientcontactperson.contactPerson',
		'clientcontactperson.primaryNum',
		array(
			'name'=>"employee",
			'header'=>"HCS Assigned",
			'value'=>'$data->employee->fullName'
		),
		'clientStatus'
    )
));



?>



<!--<?php// echo $this->renderPartial('_list', array('model'=>$dataProvider)); ?>-->