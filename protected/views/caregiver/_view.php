<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipId')); ?>:</b>
	<?php echo CHtml::encode($data->zipId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('birthDate')); ?>:</b>
	<?php echo CHtml::encode($data->birthDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driving')); ?>:</b>
	<?php echo CHtml::encode($data->driving); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcExpList')); ?>:</b>
	<?php echo CHtml::encode($data->pcExpList); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipmentExpList')); ?>:</b>
	<?php echo CHtml::encode($data->equipmentExpList); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('applicationDate')); ?>:</b>
	<?php echo CHtml::encode($data->applicationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('signedDocs')); ?>:</b>
	<?php echo CHtml::encode($data->signedDocs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('englishLevel')); ?>:</b>
	<?php echo CHtml::encode($data->englishLevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('languagesSpoken')); ?>:</b>
	<?php echo CHtml::encode($data->languagesSpoken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('livingCondition')); ?>:</b>
	<?php echo CHtml::encode($data->livingCondition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primaryContactNum')); ?>:</b>
	<?php echo CHtml::encode($data->primaryContactNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondaryContactNum')); ?>:</b>
	<?php echo CHtml::encode($data->secondaryContactNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentType')); ?>:</b>
	<?php echo CHtml::encode($data->paymentType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withCar')); ?>:</b>
	<?php echo CHtml::encode($data->withCar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preferredDays')); ?>:</b>
	<?php echo CHtml::encode($data->preferredDays); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preferredTimeStart')); ?>:</b>
	<?php echo CHtml::encode($data->preferredTimeStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preferredTimeEnd')); ?>:</b>
	<?php echo CHtml::encode($data->preferredTimeEnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalMonthsExperience')); ?>:</b>
	<?php echo CHtml::encode($data->totalMonthsExperience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('educationalAttainment')); ?>:</b>
	<?php echo CHtml::encode($data->educationalAttainment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driversLicense')); ?>:</b>
	<?php echo CHtml::encode($data->driversLicense); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driversLicenseType')); ?>:</b>
	<?php echo CHtml::encode($data->driversLicenseType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driversLicensePlaceofIssue')); ?>:</b>
	<?php echo CHtml::encode($data->driversLicensePlaceofIssue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driversLicenseExpirationDate')); ?>:</b>
	<?php echo CHtml::encode($data->driversLicenseExpirationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accidentsPastYears')); ?>:</b>
	<?php echo CHtml::encode($data->accidentsPastYears); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accidentDetails')); ?>:</b>
	<?php echo CHtml::encode($data->accidentDetails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movingViolations')); ?>:</b>
	<?php echo CHtml::encode($data->movingViolations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movingViolationsCount')); ?>:</b>
	<?php echo CHtml::encode($data->movingViolationsCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fingerPrint')); ?>:</b>
	<?php echo CHtml::encode($data->fingerPrint); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fingerPrintResults')); ?>:</b>
	<?php echo CHtml::encode($data->fingerPrintResults); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tbTested')); ?>:</b>
	<?php echo CHtml::encode($data->tbTested); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tbTestResults')); ?>:</b>
	<?php echo CHtml::encode($data->tbTestResults); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convictedCrime')); ?>:</b>
	<?php echo CHtml::encode($data->convictedCrime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convictedCrimeDetails')); ?>:</b>
	<?php echo CHtml::encode($data->convictedCrimeDetails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('characterTraits')); ?>:</b>
	<?php echo CHtml::encode($data->characterTraits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('references')); ?>:</b>
	<?php echo CHtml::encode($data->references); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('certifciations')); ?>:</b>
	<?php echo CHtml::encode($data->certifciations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('followUpCall')); ?>:</b>
	<?php echo CHtml::encode($data->followUpCall); ?>
	<br />

	*/ ?>

</div>