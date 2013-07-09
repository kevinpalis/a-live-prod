<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'clientId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'cgSex',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'liveIn',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'serviceHours',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'createdBy',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'serviceDays',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'cgAgeFrom',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'cgAgeTo',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'cgWeightFrom',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'cgWeightTo',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'cgHeightFrom',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'cgHeightTo',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'cgDriving',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'clientsCar',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'cgEnglishLevel',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'pcPets',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'pcSmoking',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'pcLivingCondition',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'pcWeightTransfer',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'pcConditionList',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'equipmentList',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
