<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'equipmentlist-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<div class="span4">	
			<?php echo $form->dropDownListRow($model, 'equipmentType', 
				array(1 => 'Mobility', 2=>'Apparatus'), 
					array('options' => array('1'=>array('selected'=>true)))); ?>
		</div>
	</div>

	<?php echo $form->textFieldRow($model,'equipmentName',array('class'=>'span5','maxlength'=>100)); ?>

	


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
