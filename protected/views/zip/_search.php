<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'zipCode',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'mainCity',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'acceptableCity',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'county',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'state',array('class'=>'span5','maxlength'=>40)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
