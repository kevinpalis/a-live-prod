<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cilentpayment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'clientId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'caregiverId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'amountDebit',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'amountCredit',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'invoiceDue',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'invoiceCreationDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'invoiceType',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'invoiceNotes',array('class'=>'span5','maxlength'=>10)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
