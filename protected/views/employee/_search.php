<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'zipId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'position',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'supervisor',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'date_start',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'birth_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'assigned_facilities',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'department',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
