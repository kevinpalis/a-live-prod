<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'facility-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'facilityName',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'addres',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="row-fluid">	
		<div class="span4">			
			<?php 
			
			
					
			echo $form->dropDownListRow($model,'zipId',CHtml::listData(Zip::model()->findAll('id>0'),'id', 'fullZipDetails'),array('class'=>'span10',	'empty'=>'Select City or Zip Code'));
			
		
			//use select2 for dropdowns
			$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Facility_zipId',
  				
			  	'options'=>array(
  					'minimumInputLength'=> 2,
  					'width'=>'100%'
  					)
				));
		
			?></div>
		
	</div>

	<?php echo $form->dropDownListRow($model,'facilityStatus',$model->statusOptions,array('class'=>'span3')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
