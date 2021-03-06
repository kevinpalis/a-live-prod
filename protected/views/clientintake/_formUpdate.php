
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
	
	<?php echo CHtml::hiddenField('formName',
		'ClientIntake'
		); 
	?>

	<div class="row-fluid">
		<div class="page-header">
		<b><small>Intake Details</small></b>
		</div>
	</div>
	<div class="control-group">
		
			

			<?php echo $form->dropDownListRow($model,'clientId',CHtml::listData(CLient::model()->findAll('id>0'),'id', 'fullName'),
					array(
							'empty'=>'Select Client',
							'class'=>'span6',
							'disabled' => 'true',
							
						)
					); ?>
		
	</div>
	<?PHP echo $this->buttonHiddenDays($model->serviceDays); ?>

	

	<div class="control-group">
		<label class="control-label">Service Days</label>
		<div class="controls">
			<div class="btn-group" data-toggle="buttons-checkbox">
			<?php echo $this->buttonPrintDays($model->serviceDays); ?>
			</div>
		</div>
	</div>
<!--
	<div class="control-group">
		<label class="control-label">Service Days</label>
		<div class="controls">
			<div class="btn-group" data-toggle="buttons-checkbox">
			<a id="M" class="btn" onClick="pushDays('Mon');">Mon</a>
			<a id="T" class="btn" onClick="pushDays('Tue');">Tue</a>
			<a id="W" class="btn" onClick="pushDays('Wed');">Wed</a>
			<a id="Th" class="btn" onClick="pushDays('Thu');">Thu</a>
			<a id="F" class="btn" onClick="pushDays('Fri');">Fri</a>
			<a id="Sa" class="btn" onClick="pushDays('Sat');">Sat</a>
			<a id="Su" class="btn" onClick="pushDays('Sun');">Sun</a>
			</div>
		</div>
	</div>

-->

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
			    'value'=>$model->serviceHours,
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
			)); */
			?>
			<input type="text" id="Clientintake_serviceHours" name="Clientintake[serviceHours]" style=" font-weight:bold; width:40px" placeholder="hrs" value="<?php echo $model->serviceHours ?>" maxlength="2"/>
		</div>
</div>

<?php echo $form->datepickerRow($model, 'startDate', array('class'=>'span3', 'hint'=>'Click inside to input date value', 'prepend'=>'<i class="icon-calendar"></i>')); ?>

<div class="control-group">
	<label class="control-label">Client has Pets?</label>
		<div class="controls">
			<?php echo $form->radioButtonList($model,'pcPets',array("0"=>"Yes", "1"=>"No"),array('separator'=>'|','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>
</div>

<?php echo $form->textAreaRow($model,'petDetails',array('class'=>'span4', 'rows'=>3,'cols'=>3, 'maxlength'=>50)); ?>

<div class="control-group">
	<label class="control-label">Client Smokes?</label>
		<div class="controls">
			<?php echo $form->radioButtonList($model,'pcSmoking',array("0"=>"Yes", "1"=>"No"),array('separator'=>'|','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>
</div>
<div class="control-group">
	<label class="control-label">Living Condition</label>
		<div class="controls">
			<?php echo $form->radioButtonList($model,'pcLivingCondition',array("0"=>"Alone", "1"=>"With Spouse", '2'=>'Relatives', '3'=>'Non-Relatives'),array('separator'=>'|','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>
</div>

<div class="control-group">
	<label class="control-label">Weight Transfer (%)</label>
		<div class="controls">
			<?php
			/*$this->widget('zii.widgets.jui.CJuiSlider', array(
			    'value'=>$model->pcWeightTransfer,
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
			<input type="text" id="Clientintake_pcWeightTransfer" name="Clientintake[pcWeightTransfer]" style="font-weight:bold; width:40px" placeholder="%" value="<?php echo $model->pcWeightTransfer; ?>" maxlength="3"/>
		</div>
</div>
<div class="control-group">
	<label class="control-label">Client Condition</label>
		<div class="controls">
				<?php
					// Optgroup
				$data=array(
				  'ADL'=>CHtml::listData(Patientconditionlist::model()->findAll("conditionType='ADL'"),'id', 'conditionName'),
				  'GENERAL'=>CHtml::listData(Patientconditionlist::model()->findAll("conditionType IS NULL"),'id', 'conditionName')
				);

	
				// Multiple data
				$this->widget('ext.select2.ESelect2',array(
				  'name'=>'Clientintake[pcConditionList]',
				  'id'=>'Clientintake_pcConditionList',
				  'data'=>$data,
				  'value'=>$model->pcConditionList,
				  'options'=>array(
				    // 'placeholder'=>'Please enter or choose at least one friend to ask, max 100 friends.',
				    'maximumSelectionSize'=>100,
				    'width'=>'300px',
				    'preload' => array('1')

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
						  'Mobility'=>CHtml::listData(Equipmentlist::model()->findAll("equipmentType='MOB'"),'id', 'equipmentName'),
						  'Medical'=>CHtml::listData(Equipmentlist::model()->findAll("equipmentType='MED'"),'id', 'equipmentName')
						);

				// Multiple data
				$this->widget('ext.select2.ESelect2',array(
				  'name'=>'Clientintake[equipmentList]',
				  'id'=>'Clientintake_equipmentList',
				  'data'=>$data,
				  'value'=>$model->equipmentList,
				  'options'=>array(
				    // 'placeholder'=>'Please enter or choose at least one friend to ask, max 100 friends.',
				    'maximumSelectionSize'=>100,
				    'width'=>'300px',
					'preload' => array('1')
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

	<?php echo $form->textFieldRow($model, 'appTime', array('class'=>'span3', 'prepend'=>'<i class="icon-calendar"></i>', 'value'=>$model->appTime)); ?>

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
