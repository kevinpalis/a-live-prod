<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'absencetracker-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'caregiverId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'clientId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'dateStart',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dateEnd',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'timeStart',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'timeEnd',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'absenceType',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'absenceReason',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'dateCreated',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'isDeducted',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
