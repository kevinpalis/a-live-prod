<?php 
	if (!empty($model->id)){

?>

	<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Client</h6></label>	
			<span class="HL">
			<?php 
				echo $model->client->fullName;
			?>
			</span>
		</div>
		
		<div>
			<small><a class="pull-right" href="../clientintake/update/<?php echo $model->id;?>">EDIT</a></small>
		</div>
	</div>
	
	<div class="row-fluid">
		
		<div class="span3">
			<label class="muted"><h6>Start Date</h6></label>	
			<span class="HL">
			<?php 
				if(!empty($model->startDate))
					echo $model->startDate;
				else
					echo "-";
			?>
			</span>
		</div>
		
		<div class="span3">
			<label class="muted"><h6>Rate</h6></label>	
			<span class="HL">
			<?php 
				if(!empty($model->rate))
					echo $model->rate;
				else
					echo "-";
			?> /
			<?php
				if(!empty($model->rateType))
					echo $model->rateType;
				else
					echo "-";	
			?>
			</span>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Service Days</h6></label>
			<span class="HL">
			<?php echo $model->daysPrint; ?>
			</span>
		</div>
			
		<div class="span6">
			<label class="muted"><h6>Service Hours</h6></label>
			<span class="HL">
			<?php
			echo $model->serviceHours;
			?>
			</span>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span3">
			<label class="muted"><h6>Client has pets?</h6></label>
			<span class="HL">
			<?php  if($model->pcPets=='1'){echo "None";}else{echo 'Yes';}; ?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Client Smokes?</h6></label>
			<span class="HL">
			<?php  if($model->pcSmoking=='1'){echo "No";}else{echo 'Yes';}; ?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Living Condition</h6></label>
			<span class="HL">
			<?php  echo $model->printLivingCondition; ?>
			</span>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span3">
			<label class="muted"><h6>Actual Weight Transfer</h6></label>
			<span class="HL">
			<?php  $clientWeight =  $model->client->weight;
			       $clientWeight *= ($model->pcWeightTransfer/100);
			       echo $clientWeight.' lbs of '.$model->client->weight.' lbs';?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Percentage Weight Transfer</h6></label>
			<span class="HL">
			<?php  echo $model->pcWeightTransfer.'%'; ?>
			</span>
		</div>
	</div>


<div class="row-fluid">
		<div class="span4">
			<label class="muted"><h6>Client Condition</h6></label>
				<span class="HL">
				<?php
				if(!empty($model->pcConditionList)){
					foreach($model->pcConditionList as $list => $condition){
						$patientCondition =  Patientconditionlist::model()->findByPk($condition);
						if(!empty($patientCondition->conditionType))
							echo $patientCondition->conditionType.' - '.$patientCondition->conditionName.'<br>';
						else
							echo 'GEN - '.$patientCondition->conditionName.'<br>';	
					}
				}else
					echo "-";
				?>
				</span>
		</div>
		<div class="span4">
			<label class="muted"><h6>Client Equipments</h6></label>
				<span class="HL">
				<?php
				if(!empty($model->equipmentList)){
					foreach($model->equipmentList as $list => $equipment){
						$equimpentPC =  Equipmentlist::model()->findByPk($equipment);
						if(!empty($equipmentPC->equipmentType))
							echo $equimpentPC->equipmentType.' - '.$equimpentPC->equipmentName.'<br>';
						else
							echo 'GEN - '.$equimpentPC->equipmentName.'<br>';
					}
				}else
					echo "-";
				?>
				</span>
		</div>
</div>

<div class="row-fluid">
		<div class="span3">
			<label class="muted"><h6>Use Client's Car?</h6></label>
			<span class="HL">
			<?php  if($model->clientsCar=='1'){echo "No";}else{echo 'Yes';}; ?>
			</span>
		</div>
</div>


<div class="row-fluid">
		<div class="page-header">
		<small><b>Caregiver Profile</b></small>
		</div>
	</div>
	<!--Client information Details-->
	
<div class="row-fluid">
		<div class="span3">
			<label class="muted"><h6>CG Gender</h6></label>
			<span class="HL">
			<?php  if($model->cgSex=='0'){echo "Male";}else if($model->cgSex=='1'){echo 'Female';}else{echo 'Any';} ?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Live Status</h6></label>
			<span class="HL">
			<?php  if($model->liveIn=='0'){echo "Live-in";}else if($model->liveIn=='1'){echo 'Live-out';}else{echo 'Any';} ?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Driving</h6></label>
			<span class="HL">
			<?php  if($model->cgDriving=='0'){echo "Driving";}else if($model->cgDriving=='1'){echo 'Non-Driving';}else{echo 'Any';} ?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>English Level</h6></label>
			<span class="HL">
			<?php  if($model->cgEnglishLevel=='1')
						{
							echo "Poor";
						}
					else if($model->cgEnglishLevel=='2'){echo 'Basic';}else if($model->cgEnglishLevel=='3'){echo 'Good';}else if($model->cgEnglishLevel=='4'){echo 'Excellent';}else{echo '-';} ?>
			</span>
		</div>
</div>

<div class="row-fluid">
		<div class="span3">
			<label class="muted"><h6>Age Range</h6></label>
			<span class="HL">
			<?php echo $model->cgAgeFrom." - ".$model->cgAgeTo; ?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Weight Range</h6></label>
			<span class="HL">
			<?php echo $model->cgWeightFrom." - ".$model->cgWeightTo; ?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Height Range</h6></label>
			<span class="HL">
			<?php echo $model->cgHeightFrom." - ".$model->cgHeightTo; ?>
			</span>
		</div>
</div>


<div class="row-fluid">
		<div class="page-header">
		<b><small>Additional Notes</small></b>
		</div>
</div>

<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Pet Details</h6></label>
			<span class="HL">
				<?php $this->beginWidget('CHtmlPurifier'); ?>
				<?php 
					if(!empty($model->petDetails))
						echo $model->petDetails;
					else
						echo "-";
				?>
				<?php $this->endWidget(); ?>
			</span>
		</div>
</div>

<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Add. Condition Details</h6></label>
			<span class="HL">
				<?php $this->beginWidget('CHtmlPurifier'); ?>
					<?php 
						if(!empty($model->condDetails))
							echo $model->condDetails;
						else
							echo "-";
					?>
				<?php $this->endWidget(); ?>
			</span>
		</div>
</div>

<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Add. Notes</h6></label>
			<span class="HL">
				<?php $this->beginWidget('CHtmlPurifier'); ?>
				<?php 
					if(!empty($model->notes))
						echo $model->notes;
					else
						echo "-";
				?>
				<?php $this->endWidget(); ?>
			</span>
		</div>
</div>

<br/>
<br/>

<div class="row-fluid">
		<div class="page-header">
		<b><small>Interview Details</small></b>
		</div>
</div>

<div class="row-fluid">
		<div class="span3">
			<label class="muted"><h6>Date</h6></label>
			<span class="HL">		
			<?php 	
				if(!empty($model->appDate))
					echo $model->appDate;
				else
					echo "-"; 
			?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Time</h6></label>
			<span class="HL">
			<?php 
				if(!empty($model->appTime))
					echo $model->appTime;
				else
					echo "-";
			?>
			</span>
		</div>
		<div class="span3">
			<label class="muted"><h6>Place of Interview</h6></label>
			<span class="HL">
			<?php 
			if(!empty($model->appPlace))
				echo $model->appPlace;
			else
				echo "-";
			?>
			</span>
		</div>
</div>






<?php
}else{

	?>
<script>

function createIntake(){
	var clientId = $('input#clientId').val();	
	window.location = "../clientintake/create?clientId=" + clientId
}

</script>

<div>
	<small><a class="pull-right" onClick="createIntake()" style="cursor:hand; cursor:pointer; color:#FF6600;">ADD CLIENT INTAKE</a></small>
</div>
<?php echo $clientId;?>
<div class="row-fluid">
		<div class="span6">
			
			Data does not exist.
			
		</div>
</div>




<?php

}


?>