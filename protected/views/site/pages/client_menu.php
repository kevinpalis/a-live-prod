<br/>
<br/>
<br/>
<br/>
<?php
/* @var $this SiteController */
if (Yii::app()->user->isGuest)
            $this->redirect(Yii::app()->createUrl('site/login'));
?>


<div class="row-fluid pagination-centered">
		
		<h4>CLIENT MENU</h4>
		<div class="row-fluid">
				<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
				'id'=>'searchForm',
				'method'=>'get',
				'action'=>Yii::app()->createUrl('/client/simpleSearch'),
				'htmlOptions'=>array(),
				)); ?>
				
				<?php	
				
					$getDept = Employee::model()->findByPk(Yii::app()->user->getId());

						//no filter if Admin or Staffing
						if($getDept->department == "Admin" || $getDept->department == "Staffing")
							$data=CHtml::listData(Client::model()->findAll("id>0"),'id', 'fullName');
					 	else
							$data=CHtml::listData(Client::model()->findAll("employeeId=".Yii::app()->user->getId()),'id', 'fullName');

					// Multiple data
					$this->widget('ext.select2.ESelect2',array(
					  'name'=>'clientID',
					  'id'=>'clientID',
					  'data'=>$data,

					  'options'=>array(
					    'maximumSelectionSize'=>100,
					    'width'=>'300px',
					  	'minimumInputLength'=> 2,
					  ),

					  'htmlOptions'=>array(
					   
					    'placeholder'=>'Search Client',

					  ),
					));
				?>
				
				<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>

				<?php $this->endWidget(); ?>		
				
		</div>
		
		<div class="btn-group">
			<button class="btn btn-large" onclick="window.location.href='../client/create'">Create Client</button>
				<button class="btn btn-large" onclick="window.location.href='../clientcontactperson/create'">Create Client's Contact</button>
			<button class="btn btn-large" onclick="window.location.href='../clientintake/create'">Create Intake</button>
		
		</div>
</div>

<br/>
<br/>
<div class="row-fluid">
	<div class="span4">
		<?php $this->widget('application.components.ClientStatus', array(
			  'statuses' => array(1=>'1', 2=>'2') , 'label'=>'New Referrals/Follow-up'
			  )); ?>
	</div>
	<div class="span4">
		<?php $this->widget('application.components.ClientStatus', array(
			'statuses' => array(1=>'3') , 'label'=>'For Interview'
			)); ?>
	</div>
	<div class="span4">
		<?php $this->widget('application.components.ClientStatus', array(
				  'statuses' => array(1=>'5', 2=>'6') , 'label'=>'Admission'
			)); ?>
	</div>
</div>

<div class="row-fluid">
	<div class="span4 offset4">
		<?php $this->widget('application.components.ClientStatus', array(
			'statuses' => array(1=>'4', 2=>'7') , 'label'=>'Closed Case/Termination'
			)); ?>
	</div>
</div>


