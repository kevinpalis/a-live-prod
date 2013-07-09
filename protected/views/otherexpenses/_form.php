<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'otherexpenses-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'clientId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'caregiverId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'expenseType',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'expenseAmount',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'milesDriven',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'mileRate',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'startDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'endDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'startTime',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'endTime',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
