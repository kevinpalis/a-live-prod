<?php Yii::app()->clientScript->registerCoreScript('jquery.ui', CClientScript::POS_HEAD); 
 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/cgDayPicker.js');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'caregiver-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo CHtml::hiddenField('formName',
		'Caregiver'
		); 
	?>


	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	
	<div class="row-fluid">
		<div class="row-fluid">
				<div class="page-header">
				<b><small>Basic Information</small></b>
				</div>
			</div>
		<div class="span3">
			<img src="<?php echo Yii::app()->request->baseUrl.'/assets/img/empty-profile.png'; ?>" class="img-polaroid">
		</div>
		<div class="span8">
			<div class="row-fluid">
				<div class="span3">
					<label class="required">
					Rating
					</label>
					<div class="rating">
					<span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
					</div>
				</div>
				<div class="span3 offset6">
					<label class="required">
					Application Date
					</label>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					    'model' => $model,
					    'attribute' => 'applicationDate',
					    'htmlOptions' => array(
					        'size' => '10',         // textField size
					        'maxlength' => '10',
					        'class'=>'span12',
					        'placeholder'=>'MM/DD/YYYY',
					        'value'=> date("m/d/Y"),    // textField maxlength
					    ),
					));
					?>

				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<?php echo $form->textFieldRow($model,'fname',array('class'=>'span12','maxlength'=>10)); ?>
				</div>
				<div class="span6">
					<?php echo $form->textFieldRow($model,'lname',array('class'=>'span12','maxlength'=>10)); ?>
				</div>
			</div>

			
			<div class="row-fluid">
				<div class="span3">
				<label class="required">
					Birthday
				</label>
					<?php
					$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					    'model' => $model,
					    'attribute' => 'birthDate',
					    'htmlOptions' => array(
					        'size' => '10',         // textField size
					        'maxlength' => '10',
					        'class'=>'span12',
					        'placeholder'=>'MM/DD/YYYY'    // textField maxlength
					    ),
					));
					?>
				</div>
				<div class="span3"><?php echo $form->dropDownListRow($model,'sex',array("0"=>"Male", "1"=>"Female"),array('class'=>'span12')); ?></div>
				<div class="span3">
					<label class="required" for="Zip_state">
						Height
					</label>
					<input type="number" id="Caregiver_heightFt" class="span4" name="Caregiver[heightFt]" value="<?php if($model->isNewRecord!='1'){echo floor($model->height/12);} ?>" placeholder="FT"/>
					<input type="number" id="Caregiver_heightIn" class="span4" name="Caregiver[heightIn]" value="<?php if($model->isNewRecord!='1'){echo $model->height-(floor($model->height/12)*12);} ?>" placeholder="IN"/>
				</div>
				<div class="span3">
					<?php echo $form->textFieldRow($model,'weight',array('class'=>'span5','placeholder'=>'LBS')); ?> 
				</div>
				
				
			</div>
			<hr/>
			<div class="row-fluid">
				<div class="span4">
					<label class="required" for="city_id">
					Primary Number
					<span class="required">*</span>
					</label>
					<?php echo $form->numberField($model,'primaryContactNum',array('class'=>'span12','maxlength'=>10)); ?>
				</div>
				<div class="span4">
					<label class="required" for="city_id">
					Alternate Number
					</label>
					<?php echo $form->numberField($model,'secondaryContactNum',array('class'=>'span12','maxlength'=>10)); ?>
				</div>
				<div class="span4">
					<label class="required" for="city_id">
					Email Address
					</label>
					<?php echo $form->emailField($model,'email',array('class'=>'span12','maxlength'=>50)); ?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<?php echo $form->textFieldRow($model,'address',array('class'=>'span12','maxlength'=>10)); ?>
				</div>
			</div>
			<div class="row-fluid">
					<div class="span4">
						<label class="required" for="city_id">Zip<span class="required">*</span>						</label>			
						<?php 
							echo CHtml::dropDownList('Caregiver[zipCode]','',CHtml::listData(Zip::model()->findAll('id>0'),'zipCode', 'zipCode'),
							array(
									'empty'=>'Select Zip Code',
									'ajax'=>array(
									'type'=>'POST',
									'url'=>CController::createUrl('zip/findAllCities'),
									'update'=>'#Caregiver_zipId',

							)));
							//use select2 for dropdowns
							$this->widget('ext.select2.ESelect2',array(
				  				'selector'=>'#Caregiver_zipCode',
				  				
							  	'options'=>array(
				  					'minimumInputLength'=> 0,
				  					'width'=>'100%'
				  					)
								));
						?>
					</div>
					<div class="span4">
						<label class="required" for="city_id">City<span class="required">*</span></label>
						<?php
							echo $form->dropDownList($model, 'zipId',array(), 
									array(
									'empty'=>'Select City',
									'class'=>'span12',
									'ajax'=>array(
									'type'=>'POST',
									'url'=>CController::createUrl('zip/findAllStates'),
									'update'=>'#state_id', 
									))

								);

						?>
					</div>
					<div class="span4">
						<label class="required" for="Zip_state">
						State
						<span class="required">*</span>
						</label>
						<?php
							echo CHtml::dropDownList('state_id','', array(),array('empty'=>'Select State', 'class'=>'span12'));
						?>

					</div>
			</div>
		
			


			

		<!--div for photo and info divide-->
		</div>
	</div>

	
	
	<?php
	/*
	* @property string $characterTraits
	* @property string $references
	* @property string $notes
 	* @property string $certifciations
 	* @property string $followUpCall
 	*/
	?>
	<div class="row-fluid">
		<div class="page-header">
		<b><small>Skills/Experience Set</small></b>
		</div>
	</div>
	<div class="row-fluid">
				<div class="span6">
						<label class="required" for="Zip_state">
							Past Conditions Handled
						</label>
				<?php
					// Optgroup
				$data=array(
				  'ADL'=>CHtml::listData(Patientconditionlist::model()->findAll("conditionType='ADL'"),'id', 'conditionName'),
				  'Mental'=>CHtml::listData(Patientconditionlist::model()->findAll("conditionType='Mental'"),'id', 'conditionName')
				);

	
				// Multiple data
				$this->widget('ext.select2.ESelect2',array(
				  'name'=>'Caregiver[pcExpList]',
				  'id'=>'Caregiver_pcExpList',
				  'data'=>$data,

				  'options'=>array(
				    // 'placeholder'=>'Please enter or choose at least one friend to ask, max 100 friends.',
				    'maximumSelectionSize'=>100,
				    'width'=>'300px',
				  ),

				  'htmlOptions'=>array(
				    'multiple'=>'multiple',
				    'placeholder'=>'Client Conditions Handled',
				   
				  ),
				));

				?>
			</div>
			<div class="span4">
				<label class="required" for="Zip_state">
					Past Equipments Handled
				</label>
				<?php
					// Optgroup

				$data=array(
				  'Mobility'=>CHtml::listData(Equipmentlist::model()->findAll('equipmentType=1'),'id', 'equipmentName'),
				  'Apparatus'=>CHtml::listData(Equipmentlist::model()->findAll('equipmentType=2'),'id', 'equipmentName')
				);

				// Multiple data
				$this->widget('ext.select2.ESelect2',array(
				  'name'=>'Caregiver[equipmentExpList]',
				  'id'=>'Caregiver_equipmentExpList',
				  'data'=>$data,

				  'options'=>array(
				    'maximumSelectionSize'=>100,
				    'width'=>'300px',
				  ),

				  'htmlOptions'=>array(
				    'multiple'=>'multiple',
				    'placeholder'=>'Client Equipments Used',
				   
				  ),
				));

				?>
				
			</div>
	</div>	
	<div class="row-fluid">
				<div class="span6">
						<label class="required">
							Certifications/Licenses
						</label>
	
						<?php
						$data=array(
						  'RN', 'CNNA', 'LVN'
						);

						// Multiple data
						$this->widget('ext.select2.ESelect2',array(
						  'name'=>'Caregiver[certifciations]',
						  'id'=>'Caregiver_certifciations',
						  'data'=>$data,

						  'options'=>array(
						    'maximumSelectionSize'=>100,
						    'width'=>'300px',
						  ),

						  'htmlOptions'=>array(
						    'multiple'=>'multiple',
						    'placeholder'=>'Eg. RN, LVN, etc..',
						   
						  ),
						));

						?>
				</div>

				<div class="span6">
						<label class="required">
							Languages Spoken
						</label>
	
						<?php
						$data=array(
						  'English', 'Filipino', 'Spanish', 'Chinese - Mandarin', 'French', 'German', 'Korean'
						);

						// Multiple data
						$this->widget('ext.select2.ESelect2',array(
						  'name'=>'Caregiver[languagesSpoken]',
						  'id'=>'Caregiver_languagesSpoken',
						  'data'=>$data,

						  'options'=>array(
						    'maximumSelectionSize'=>100,
						    'width'=>'300px',
						  ),

						  'htmlOptions'=>array(
						    'multiple'=>'multiple',
						    'placeholder'=>'Eg English, Filipino, etc..',
						   
						  ),
						));

						?>
				</div>
				
	</div>
				
	

	<div class="row-fluid">
				<div class="span2">
					<label>Mo. as CG</label>
					<?php echo $form->numberField($model,'totalMonthsExperience',array('class'=>'span12','maxlength'=>4, 'placeholder'=>'Months')); ?>
				</div>
				<div class="span4">
					<label class="control-label">English Level</label>
					
					<?php echo $form->dropDownList($model, 'englishLevel', 
						array(1 => 'Poor', 2=>'Basic', 3=>'Good', 4=> 'Excellent'), 
							array(
									'empty'=>'Select Level',
									'class'=>'span12',
									
								)
						); ?>
				
				</div>
				<div class="span4">
					<label class="control-label">Educ. Attainment</label>
					
					<?php echo $form->dropDownList($model, 'educationalAttainment', 
						array(1 => 'HS Degree', 2=>"Bachelor's Degree", 3=>"Master's Degree", 4=> 'Doctorate'), 
							array(
									'empty'=>'Select Level',
									'class'=>'span12',
									
								)
						); ?>
				
				</div>
	</div>

	<div class="row-fluid">
		<div class="page-header">
		<b><small>Driving Information</small></b>
		</div>
	</div>
	<div class="row-fluid">
	<div class="span4"><?php echo $form->dropDownList($model,'driving',array("0"=>"Driving", "1"=>"Non-Driving")); ?></div>
	</div>
	<br/>
	<div class="row-fluid">
		<div class="span2">
			<label>Use CG's car?</label>
			<?php echo $form->dropDownList($model,'withCar',array('1'=>'No','0'=>'Yes'),array('class'=>'span12')); ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
		<label>Driver's License No.</label>
		<?php echo $form->textField($model,'driversLicense',array('class'=>'span12','maxlength'=>30)); ?>
		</div>
		<div class="span2">
		<?php echo $form->dropDownListRow($model,'driversLicenseType',array("0"=>"Class A", "1"=>"Class B", "3"=>'Class C', '4'=>'Class M1', '5'=>'Class M2'),array('options' => array('3'=>array('selected'=>true)),'class'=>'span12')); ?>
		</div>
		<div class="span2">
			<?php echo $form->textFieldRow($model,'driversLicensePlaceofIssue',array('class'=>'span12','maxlength'=>40)); ?>
		</div>
		<div class="span3">
			<label>Expiration Date</label>
			<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
					    'model' => $model,
					    'attribute' => 'driversLicenseExpirationDate',
					    'htmlOptions' => array(
					        'size' => '10',         // textField size
					        'maxlength' => '10',
					        'class'=>'span8',
					        'placeholder'=>'MM/DD/YYYY',
					    ),
					));
			?>
		</div>

	</div>
	
	<div class="row-fluid">
	<script>

		handleNewSelection = function () {

		    switch ($(this).val()) {
		        case '0':
		            $("#accidentDiv").hide('moderate',function(){});
		            //$("Caregiver_accidentDetails").val() = "";
		        break;
		        case '1':
		            $("#accidentDiv").show('moderate',function(){});
		        break;
		       
    	}
		};

		$(document).ready(function() {

	    	$("#Caregiver_accidentsPastYears").change(handleNewSelection);

	    // Run the event handler once now to ensure everything is as it should be
	    handleNewSelection.apply($("#Caregiver_accidentsPastYears"));

		});

			$("#Caregiver_movingViolationsCount").change(function(){
			alert("here");
		    $("#violationsDiv").hide();
		    var myValue = $(this).val();
		    alert(myValue);
		    if(myValue <= 0 ){
				$("#violationsDiv").hide('moderate',function(){});
			}
			else
				$("#violationsDiv").show('moderate',function(){});
		});


	</script>

	<?php echo $form->dropDownListRow($model,'accidentsPastYears',array("0"=>"No Accidents", "1"=>"Had Accidents"),array('class'=>'span3')); ?>
	<div class ="row-fluid" id = "accidentDiv">
	<?php echo $form->textAreaRow($model,'accidentDetails',array('class'=>'span5','maxlength'=>100, 'width'=>'400px', 'height'=>'450px')); ?>
	</div>
	<label>Number of Violations</label>
	<?php echo $form->textField($model,'movingViolationsCount',array('class'=>'span1','maxlength'=>1, 'value'=>'0')); ?>
	<div class="row-fluid" id = "violationsDiv">
	<label>Details of Violations</label>
	<?php echo $form->textArea($model,'movingViolations',array('class'=>'span5','maxlength'=>100, 'width'=>'400px', 'height'=>'450px')); ?>
	</div>


	<div class="row-fluid">
		<div class="page-header">
		<b><small>Work Preference</small></b>
		</div>
	</div>
	
	<div class="row-fluid">
	
	<?php echo $form->dropDownListRow($model,'livingCondition',array("0"=>"Live-In", "1"=>"Live-Out", "3"=>'Any'),array('class'=>'span3')); ?>

	<?php echo $form->dropDownListRow($model,'paymentType',array("0"=>"Direct Deposit", "1"=>"Check by Mail", "3"=>'Any'),array('class'=>'span3')); ?>
	</div>
	
	<?php echo $form->hiddenField($model,'preferredDays[0]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'preferredDays[1]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'preferredDays[2]',
		array( 
		'value'=>'1'
		));
	?>
	<?php echo $form->hiddenField($model,'preferredDays[3]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'preferredDays[4]',
		array( 
		'value'=>'1'
		)); 
	?>
	<?php echo $form->hiddenField($model,'preferredDays[5]',
		array( 
		'value'=>'1'
		));
	?>
	<?php echo $form->hiddenField($model,'preferredDays[6]',
		array( 
		'value'=>'1'
		));
	?>
	<div class="row-fluid">
		<div class="span7">
			<div class="control-group">
				<label class="control-label">Preferred Days</label>
				<div class="controls">
					<div class="btn-group" data-toggle="buttons-checkbox">
					<a id="M" class="btn" onClick="updateDays('Caregiver_preferredDays_0');">Mon</a>
					<a id="T" class="btn" onClick="updateDays('Caregiver_preferredDays_1');">Tue</a>
					<a id="W" class="btn" onClick="updateDays('Caregiver_preferredDays_2');">Wed</a>
					<a id="Th" class="btn" onClick="updateDays('Caregiver_preferredDays_3');">Thu</a>
					<a id="F" class="btn" onClick="updateDays('Caregiver_preferredDays_4');">Fri</a>
					<a id="Sa" class="btn" onClick="updateDays('Caregiver_preferredDays_5');">Sat</a>
					<a id="Su" class="btn" onClick="updateDays('Caregiver_preferredDays_6');">Sun</a>
					</div>
				</div>
			</div>
			

			<div class="control-group">
				<div class="controls">
					<div class="btn-group" data-toggle="buttons-radio">
					<a id="AllDays" class="btn" onClick="updateDaysSelection('seven');">7 Days</a>
					<a id="Weekdays" class="btn" onClick="updateDaysSelection('weekday');">Weekdays</a>
					<a id="Weekends" class="btn" onClick="updateDaysSelection('weekend');">Weekends</a>
					</div>
					<a id="Clear" class="btn" onClick="updateDaysSelection('clear');">Clear</a>
				</div>
			</div>
		</div>

		<?php echo $form->textFieldRow($model,'preferredTimeStart',array('class'=>'span1')); ?>

		<?php echo $form->textFieldRow($model,'preferredTimeEnd',array('class'=>'span1')); ?>
	
	</div>
	<div class="row-fluid">
		<div class="page-header">
		<b><small>Security/Health Checks</small></b>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span3">
		<?php echo $form->dropDownListRow($model,'fingerPrint',array("0"=>"No Fingerprint", "1"=>"With Fingerprint"),array('class'=>'span10')); ?>
		</div>
		<div class="span9" id='fingerDiv'>
		<label>Finger Print Details</label>
		<?php echo $form->textArea($model,'fingerPrintResults',array('class'=>'span5','maxlength'=>100, 'width'=>'400px', 'height'=>'650px')); ?>
		</div>	
	</div>
	<div class="row-fluid">
		<div class="span3">
			<?php echo $form->dropDownListRow($model,'tbTested',array("0"=>"No TB Test", "1"=>"With TB Test"),array('class'=>'span10')); ?>
		</div>
		<div class="span9" id='tbDiv'>
			<label>TB Test Details</label>
			<?php echo $form->textArea($model,'tbTestResults',array('class'=>'span5','maxlength'=>100, 'width'=>'400px', 'height'=>'650px')); ?>
		</div>	
	</div>

	<div class="row-fluid">
		<div class="span3">
			<?php echo $form->dropDownListRow($model,'convictedCrime',array("0"=>"Not Convicted", "1"=>"Convicted"),array('class'=>'span10')); ?>
		</div>
		<div class="span9" id="crimeDiv">
			<label>Crime Details</label>
			<?php echo $form->textArea($model,'convictedCrimeDetails',array('class'=>'span5','maxlength'=>100, 'width'=>'400px', 'height'=>'650px')); ?>
		</div>	
	</div>
	



	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
