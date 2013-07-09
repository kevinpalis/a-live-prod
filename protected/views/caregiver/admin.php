<?php
$this->breadcrumbs=array(
	'Caregivers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Caregiver','url'=>array('index')),
	array('label'=>'Create Caregiver','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('caregiver-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Caregivers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<br />
<br />
<?php echo CHtml::link('Caregiver-ClientIntake Search','#',array('class'=>'search-button btn')); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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

