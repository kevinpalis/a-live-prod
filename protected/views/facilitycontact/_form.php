<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'facilitycontact-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<div class="row-fluid">
		<div class="span6">
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'facilityId',CHtml::listData(Facility::model()->findAll('id>0'),'id', 'facilityName'),
			array(
					'empty'=>'',

			)); 
			//use select2 for dropdowns
			$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Facilitycontact_facilityId',
			  		'options'=>array(
  					'width'=>'75%',
  					'placeholder'=>'Select Facility'
  					)
			));

	?>
		</div>
		<div class="span6">
			<?php echo $form->dropDownListRow($model, 'facilityContactType', 
				array('Select Job Role',1 => 'Case Manager', 2=>'Social Worker')); ?>
		</div>
	</div>	
	<?php echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'primaryContact',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'secondaryContactNum',array('class'=>'span5','maxlength'=>15)); ?>

	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>