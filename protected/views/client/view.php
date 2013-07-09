<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->fullName,
);

$this->menu=array(
	array('label'=>'List Client','url'=>array('index')),
	array('label'=>'Create Client','url'=>array('create')),
	array('label'=>'Update Client','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Client','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>View Client <?php echo $model->fullName; ?></h1>

<input type="hidden" id="clientId" name="clientId" value="<?php echo $model->id;?>"/>

<!--<?php/* $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'lname',
		'address',
		'zipId',
		'age',
		'primaryNum',
		'secondaryNum',
		'email',
		'createdBy',
		'dateStart',
		'dateEnd',
		'status',
		'holidayWork',
		'sex',
		'height',
		'weight',
		'employeeId',
		'facilityId',
		'facilityContactId',
		'tagforUpdate',
		'depositAmount',
		'dateEntered',
		'creditLimit',
	),
)); */?>-->



<?php $this->widget("bootstrap.widgets.TbTabs", array(
    "id" => "tabs",
    "type" => "tabs",
    "tabs" => array(
        array("label" => "Client Information", "content" => $this->renderPartial('_viewBasic', array('model'=>$model),true), "active" => true),
        array("label" => "Contact Person", "content" => $this->renderPartial('_viewClientContact', array('model'=>$model),true)),
        array("label" => "Intake Details", "content" => $this->renderPartial('../clientintake/_view', array('model'=>Clientintake::model()->find('clientId='.$model->id)),true)),
        array("label" => "Admin Data", "content" => $this->renderPartial('_viewAdminData', array('model'=>$model),true)),
    ),
 
)); ?>
<?php //echo $this->renderPartial('_view', array('model'=>$model)); ?>