<?php
	if(isset($_GET['success'])){
		$getName = Client::model()->findByPk($_GET['clientId']);
?>

	<div class="alert alert-success">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Well Done!</strong> 
	  <div>You have successfully created a Contact Person for <b><?php echo $getName->fullName;?></b>.
	  Please proceed to intake creation.</div>
	</div>

<?php
}
?>


<?php Yii::app()->clientScript->registerCoreScript('jquery.ui', CClientScript::POS_HEAD); 
 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/serviceDayPicker.js');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'clientintake-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal'
)); ?>

	<?php
		//if(isset($_GET['clientId']))		
		if(isset($_GET['clientId']) && $this->checkDuplicate($_GET['clientId'])!= NULL){ 
			
			echo "<br/><br/><div><span class='label label-important'>Error</span> Intake has already been created for this client. To view created Intake please click this <a href='../clientintake/".$this->checkDuplicate($_GET['clientId'])."'>link</a>.</div> ";
		
		}else{

	 ?>



	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<?php echo $form->hiddenField($model,'createdBy',
		array( 
		'value'=>Yii::app()->user->getId()
		)); 
	?>
	
	<?php echo CHtml::hiddenField('formName',
		'ClientIntake'
		); 
	?>

	<?php echo $form->hiddenField($model,'dateEntered',
		array( 
		'value'=> date("Y-m-d H:i:s")
		)); 
	?>

	<div class="row-fluid">
		<div class="page-header">
		<b><small>Intake Details</small></b>
		</div>
	</div>
	<div class="control-group">
		
			<?php 

				if(isset($_GET['clientId'])){
					echo $form->dropDownListRow($model,'clientId',CHtml::listData(Client::model()->findAll('id='.$_GET['clientId']),'id', 'fullName'),
						array(
							'class'=>'span5',
													
						)
					); 
				}
				else
					{
						$sql = "SELECT id, CONCAT(fname,' ',lname) as fullName from client WHERE id NOT IN (SELECT clientId FROM clientintake)";
						$connection = Yii::app()->db; 
						$command = $connection->createCommand($sql);
						
					echo $form->dropDownListRow($model,'clientId',CHtml::listData($command->queryAll(),'id', 'fullName'),
					array(
							'empty'=>'Select Client',
							'class'=>'span5',
							
						)
					); 
				
			//use select2 for dropdowns
				$this->widget('ext.select2.ESelect2',array(
	  				'selector'=>'#Clientintake_clientId',
	  				'options'=>array(
	  					'minimumInputLength'=> 0,
	  					'width'=>'75%'
	  					)
					));
				}
			?>
		
	</div>

	<?php echo $form->hiddenField($model,'serviceDays[0]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'serviceDays[1]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'serviceDays[2]',
		array( 
		'value'=>'1'
		));
	?>
	<?php echo $form->hiddenField($model,'serviceDays[3]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'serviceDays[4]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'serviceDays[5]',
		array( 
		'value'=>'1'
		));
	?>
	<?php echo $form->hiddenField($model,'serviceDays[6]',
		array( 
		'value'=>'1'
		));
	?>
	<div class="control-group">
		<label class="control-label">Service Days</label>
		<div class="controls">
			<div class="btn-group" data-toggle="buttons-checkbox">
			<a id="M" class="btn" onClick="updateDays('Clientintake_serviceDays_0');">Mon</a>
			<a id="T" class="btn" onClick="updateDays('Clientintake_serviceDays_1');">Tue</a>
			<a id="W" class="btn" onClick="updateDays('Clientintake_serviceDays_2');">Wed</a>
			<a id="Th" class="btn" onClick="updateDays('Clientintake_serviceDays_3');">Thu</a>
			<a id="F" class="btn" onClick="updateDays('Clientintake_serviceDays_4');">Fri</a>
			<a id="Sa" class="btn" onClick="updateDays('Clientintake_serviceDays_5');">Sat</a>
			<a id="Su" class="btn" onClick="updateDays('Clientintake_serviceDays_6');">Sun</a>
			</div>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<div class="btn-group" data-toggle="buttons-radio">
			<a id="AllDays" class="btn" onClick="updateDaysSelection('seven');">7 Days</a>
			<a id="Weekdays" class="btn" onClick="updateDaysSelection('weekday');">Weekdays</a>
			<a id="Weekends" class="btn" onClick="updateDaysSelection('weekend');">Weekends</a>
			</div>
			<a id="Clear" class="btn" onClick="updateDaysSelection('clear');">Clear</a>
		</div>
	</div>

<div class="control-group">
	<label class="control-label">Service Hours</label>
		<div class="controls">
			<?php /*
			$this->widget('zii.widgets.jui.CJuiSlider', array(
			    'value'=>1,
			    'id'=>'amtSlider',
			    // additional javascript options for the slider plugin
			    'options'=>array(
			        'min'=>1,
			        'max'=>24,
			       'slide'=>'js:function(event, ui) { $("#Clientintake_serviceHours").val(ui.value);}', 
			    ),
			    'htmlOptions'=>array(
			        'style'=>'height:12px;width:300px'
			    ),
			));*/
			?>
			<input type="number" id="Clientintake_serviceHours" name="Clientintake[serviceHours]"  placeholder="hrs" style="width:40px" maxlength="2"/>
		</div>
</div>

<?php echo $form->datepickerRow($model, 'startDate', array('class'=>'span3', 'hint'=>'Click inside to input date value', 'prepend'=>'<i class="icon-calendar"></i>')); ?>

<div class="control-group">
	<label class="control-label">Client has Pets?</label>
		<div class="controls">
			<?php echo $form->dropDownList($model,'pcPets',array("0"=>"Yes", "1"=>"No"),array('class'=>'span2')); ?>
		</div>
</div>

<?php echo $form->textAreaRow($model,'petDetails',array('class'=>'span4', 'rows'=>3,'cols'=>3, 'maxlength'=>50)); ?>

<div class="control-group">
	<label class="control-label">Client Smokes?</label>
		<div class="controls">
			<?php echo $form->radioButtonList($model,'pcSmoking',array("0"=>"Yes", "1"=>"No","2"=>"Someone Else in Household Smokes"),array('separator'=>'|','labelOptions'=>array('style'=>'display:inline'))); ?>
		
		

		</div>
</div>
<div class="control-group">
	<label class="control-label">Living Condition</label>
		<div class="controls">
			<?php echo $form->radioButtonList($model,'pcLivingCondition',array("0"=>"Alone", "1"=>"With Spouse", "2"=>"With Relatives", "3"=>"With Non-Relatives")); ?>
		</div>
</div>

<div class="control-group">
	<label class="control-label">Weight Transfer (%)</label>
		<div class="controls">
			<?php /*
			$this->widget('zii.widgets.jui.CJuiSlider', array(
			    'value'=>1,
			    'id'=>'amtSlider2',
			    // additional javascript options for the slider plugin
			    'options'=>array(
			        'min'=>0,
			        'max'=>100,
			       'slide'=>'js:function(event, ui) { $("#Clientintake_pcWeightTransfer").val(ui.value);}', 
			    ),
			    'htmlOptions'=>array(
			        'style'=>'height:12px;width:300px'
			    ),
			));*/
			?>
			<input type="text" id="Clientintake_pcWeightTransfer" name="Clientintake[pcWeightTransfer]" style="font-weight:bold; width:40px" placeholder="%" maxlength="3"/>
		</div>
</div>


<div class="control-group">
	<label class="control-label">Client Condition</label>
		<div class="controls">
				<?php
					// Optgroup
				$data=array(
				  'ADL'=>CHtml::listData(Patientconditionlist::model()->findAll(array('order'=>'conditionName', 'condition'=>'conditionType=:type', 'params'=>array(':type'=>'ADL'))),'id', 'conditionName'),
				  'GENERAL'=>CHtml::listData(Patientconditionlist::model()->findAll(array('order'=>'conditionName', 'condition'=>'conditionType is NULL')),'id', 'conditionName')
				);

	
				// Multiple data
				$this->widget('ext.select2.ESelect2',array(
				  'name'=>'Clientintake[pcConditionList]',
				  'id'=>'Clientintake_pcConditionList',
				  'data'=>$data,

				  'options'=>array(
				    // 'placeholder'=>'Please enter or choose at least one friend to ask, max 100 friends.',
				    'maximumSelectionSize'=>100,
				    'width'=>'300px',
				  ),

				  'htmlOptions'=>array(
				    'multiple'=>'multiple',
				    'placeholder'=>'Type Client Conditions',
				   
				  ),
				));

				?>
		</div>
</div>



<div class="control-group">
	<label class="control-label">Client Equipments Used</label>
		<div class="controls">
				<?php
					// Optgroup

				$data=array(
				  'Mobility'=>CHtml::listData(Equipmentlist::model()->findAll(array('order'=>'equipmentName', 'condition'=>'equipmentType=:type', 'params'=>array(':type'=>'MOB'))),'id', 'equipmentName'),
				  'Medical'=>CHtml::listData(Equipmentlist::model()->findAll(array('order'=>'equipmentName', 'condition'=>'equipmentType=:type', 'params'=>array(':type'=>'MED'))),'id', 'equipmentName')
				);

				// Multiple data
				$this->widget('ext.select2.ESelect2',array(
				  'name'=>'Clientintake[equipmentList]',
				  'id'=>'Clientintake_equipmentList',
				  'data'=>$data,

				  'options'=>array(
				    'maximumSelectionSize'=>100,
				    'width'=>'300px',
				  ),

				  'htmlOptions'=>array(
				    'multiple'=>'multiple',
				    'placeholder'=>'Type Client Equipments Used',
				   
				  ),
				));

				?>
		</div>
</div>

<?php echo $form->textAreaRow($model,'condDetails',array('class'=>'span4', 'rows'=>3,'cols'=>4, 'maxlength'=>200)); ?>

<div class="control-group">
	<label class="control-label">Use Client's car</label>
		<div class="controls">
			<?php echo $form->radioButtonList($model,'clientsCar',array("0"=>"Yes", "1"=>"No"),array('separator'=>'|','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>
</div>

	<div class="row-fluid">
		<div class="page-header">
		<small><b>Caregiver Profile</b></small>
		</div>
	</div>
	<!--Client information Details-->
	
	<div class="control-group">
		<label class="control-label">Select CG Gender</label>
		<div class="controls">
		<?php echo $form->radioButtonList($model,'cgSex',array("0"=>"Male", "1"=>"Female", "2"=>'Any'),array('separator'=>'|')); ?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Live Status</label>
		<div class="controls">
		<?php echo $form->radioButtonList($model,'liveIn',array("0"=>"Live-in", "1"=>"Live-out", "2"=>'Any'),array('separator'=>'|','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Age Range</label>
		<div class="controls">
			<?php echo $form->textField($model,'cgAgeFrom',array('class'=>'span2', 'maxlength'=>3)); ?> - 
			<?php echo $form->textField($model,'cgAgeTo',array('class'=>'span2','maxlength'=>3)); ?> 
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Weight Range</label>
		<div class="controls">
			<?php echo $form->numberField($model,'cgWeightFrom',array('class'=>'span2', 'maxlength'=>3)); ?> - 
			<?php echo $form->numberField($model,'cgWeightTo',array('class'=>'span2','maxlength'=>3)); ?> 
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Height Range</label>
		<div class="controls">
			<?php echo $form->numberField($model,'cgHeightFrom',array('class'=>'span2', 'maxlength'=>3)); ?> - 
			<?php echo $form->numberField($model,'cgHeightTo',array('class'=>'span2','maxlength'=>3)); ?> 
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Driving</label>
		<div class="controls">
			<?php echo $form->radioButtonList($model,'cgDriving',array("0"=>"Driving", "1"=>"Non-Driving", "2"=>'Any'),array('separator'=>'|','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">English Level</label>
			<div class="controls">
			<?php echo $form->dropDownList($model, 'cgEnglishLevel', 
				array(1 => 'Poor', 2=>'Basic', 3=>'Good', 4=> 'Excellent'), 
					array(
							'empty'=>'Select Level',
							'class'=>'span3',
							
						)
				); ?>
		</div>
	</div>

<div class="control-group">
	<label class="control-label">Estimated Rate</label>
		<div class="controls">
			<?php echo $form->numberField($model,'rate',array('class'=>'span1', 'maxlength'=>3)); ?> / 
			<?php echo $form->dropDownList($model, 'rateType', 
				array('Day' => 'Day', 'Hr'=>'Hour'), 
					array(
							'class'=>'span2',	
						)
				); ?>
		</div>
</div>

<?php echo $form->textAreaRow($model,'notes',array('class'=>'span4', 'rows'=>3,'cols'=>4, 'maxlength'=>500)); ?>

<div class="row-fluid">
	<div class="page-header">
	<small><b>Interview Details</b></small>
	</div>
</div>

<?php echo $form->datepickerRow($model, 'appDate', array('class'=>'span3', 'hint'=>'Click inside to input date value', 'prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->timepickerRow($model, 'appTime', array('class'=>'span3', 'hint'=>'Click inside to input date value', 'prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model,'appPlace',array('class'=>'span8', 'maxlength'=>100)); ?>





	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php 
}
$this->endWidget(); ?>
