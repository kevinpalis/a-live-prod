<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'materialmaster-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'productName',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'productDesc',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'quantityTotal',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'unitPrice',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'unitOfMeasure',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'createdBy',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'dateCreated',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'countPerUOM',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'parentID',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'materialType',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'bestBefore',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
