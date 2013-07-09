<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'zipId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'age',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'primaryNum',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'secondaryNum',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'createdBy',array('class'=>'span5','maxlength'=>70)); ?>

	<?php echo $form->textFieldRow($model,'dateStart',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dateEnd',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'holidayWork',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'sex',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'height',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'weight',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'employeeId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'facilityId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'facilityContactId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'tagforUpdate',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'depositAmount',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dateEntered',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'creditLimit',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
