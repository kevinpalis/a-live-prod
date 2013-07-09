<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>
	<script>  $(document).ready(function() { $("#Employee_zip").select2(); }); 	</script>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>30)); ?>

	<?php //echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>30)); ?>

	<?php //echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>100)); ?>

	<?php //echo $form->textFieldRow($model,'zip',array('class'=>'span5','maxlength'=>10)); ?>

	<?php //echo $form->textFieldRow($model,'position',array('class'=>'span5','maxlength'=>40)); ?>

	<?php //echo $form->textFieldRow($model,'supervisor',array('class'=>'span5','maxlength'=>50)); ?>

	
	<?php //echo $form->textFieldRow($model,'assigned_facilities',array('class'=>'span5','maxlength'=>100)); ?>

	<?php //echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>50)); ?>

	<?php //echo $form->textFieldRow($model,'department',array('class'=>'span5','maxlength'=>50)); ?>

	<?php //echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50)); ?>


	<?php //echo $form->textFieldRow($model,'date_start',array('class'=>'span5')); ?>
	
	<?php echo CHtml::hiddenField('formName',
		'Employee'
		); 
	?>
	<div class="row-fluid">
		<div class="span6"><?php echo $form->textFieldRow($model,'fname',array('class'=>'span12','maxlength'=>20)); ?></div>
		<div class="span6"><?php echo $form->textFieldRow($model,'lname',array('class'=>'span12','maxlength'=>20)); ?></div>
	</div>
	<div class="row-fluid">
		<div class="span6"><?php echo $form->textFieldRow($model,'email',array('class'=>'span12','maxlength'=>40)); ?></div>
		<div class="span6"><?php echo $form->passwordFieldRow($model,'password',array('class'=>'span12','maxlength'=>20)); ?></div>
	</div>	
	<div class="row-fluid">
		<div class="span12"><?php echo $form->textFieldRow($model,'address',array('class'=>'span12','maxlength'=>40)); ?></div>
	</div>
	<div class="row-fluid">	
		<div class="span4">			
			<?php 
			
			
					
			echo $form->dropDownListRow($model,'zipId',CHtml::listData(Zip::model()->findAll('id>0'),'id', 'fullZipDetails'),array('class'=>'span10',	'empty'=>'Select City or Zip Code'));
			
		
			//use select2 for dropdowns
			$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Employee_zipId',
  				
			  	'options'=>array(
  					'minimumInputLength'=> 2,
  					'width'=>'100%'
  					)
				));
		
			?></div>
		
	</div>
	<div class="row-fluid">
		<div class="span4"><?php echo $form->dropDownListRow($model, 'department', array('Choose Department', 'HCS' => 'Home Care Specialist', 'Staffing'=>'Staffing', 'Finance'=>'Finance', 'Management'=> 'Management', 'Operations'=>'Operations')); ?></div>
		<div class="span4"><?php echo $form->dropDownListRow($model,'position',array('Choose Position', 'Senior' => 'Senior', 'Junior'=>'Junior', 'Temp'=>'Temp')); ?></div>
		<div class="span4"><?php echo $form->dropDownListRow($model,'supervisor',CHtml::listData(Employee::model()->findAll('position=1'),'id', 'fname'),array('empty'=>'Select Supervisor')); ?></div>
	</div>


	<?php echo $form->datepickerRow($model, 'date_start', array('class'=>'span4', 'hint'=>'Click inside to input date value', 'prepend'=>'<i class="icon-calendar"></i>')); ?>

	<?php echo $form->datepickerRow($model, 'birth_date', array('class'=>'span4', 'hint'=>'Click inside to input date value','prepend'=>'<i class="icon-calendar"></i>')); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
