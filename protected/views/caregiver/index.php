<?php
$this->breadcrumbs=array(
	'Caregivers',
);

$this->menu=array(
	array('label'=>'Create Caregiver','url'=>array('create')),
	array('label'=>'Manage Caregiver','url'=>array('admin')),
);
?>

<h1>Caregivers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<h1>Clientintakes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$ciDataProvider,
	'itemView'=>'_ciView',
)); ?>



<div class="search-form-ci" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
Kevin
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'caregiver-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fname',
		'lname',
		'photo',
		'address',
		'zipId',
		/*
		'sex',
		'birthDate',
		'driving',
		'pcExpList',
		'equipmentExpList',
		'applicationDate',
		'signedDocs',
		'englishLevel',
		'languagesSpoken',
		'rating',
		'height',
		'weight',
		'livingCondition',
		'primaryContactNum',
		'secondaryContactNum',
		'email',
		'paymentType',
		'withCar',
		'preferredDays',
		'preferredTimeStart',
		'preferredTimeEnd',
		'totalMonthsExperience',
		'educationalAttainment',
		'driversLicense',
		'driversLicenseType',
		'driversLicensePlaceofIssue',
		'driversLicenseExpirationDate',
		'accidentsPastYears',
		'accidentDetails',
		'movingViolations',
		'movingViolationsCount',
		'fingerPrint',
		'fingerPrintResults',
		'tbTested',
		'tbTestResults',
		'convictedCrime',
		'convictedCrimeDetails',
		'characterTraits',
		'references',
		'notes',
		'certifciations',
		'followUpCall',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
