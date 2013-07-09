<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

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
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
