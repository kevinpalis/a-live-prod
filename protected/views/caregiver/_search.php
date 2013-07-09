<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'fname',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'lname',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'photo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'zipId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'sex',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'birthDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'driving',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'pcExpList',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'equipmentExpList',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'applicationDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'signedDocs',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'englishLevel',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'languagesSpoken',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'rating',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'height',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'weight',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'livingCondition',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'primaryContactNum',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'secondaryContactNum',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'paymentType',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'withCar',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'preferredDays',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'preferredTimeStart',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'preferredTimeEnd',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'totalMonthsExperience',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'educationalAttainment',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'driversLicense',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'driversLicenseType',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'driversLicensePlaceofIssue',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'driversLicenseExpirationDate',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'accidentsPastYears',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'accidentDetails',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'movingViolations',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'movingViolationsCount',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'fingerPrint',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'fingerPrintResults',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'tbTested',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'tbTestResults',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'convictedCrime',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'convictedCrimeDetails',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'characterTraits',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'references',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'certifciations',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'followUpCall',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
