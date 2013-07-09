
	<div class="row-fluid">
		<div class="span6">
			<label class="muted">
			<h6>Created By:</h6>
			</label>	
			<span class="HL"><?php echo Employee::model()->findByPk($model->createdBy)->email; ?> </span>
		</div>
		<div class="span3">	
			<label class="muted">
			<h6>Created On:</h6>
			</label>
				<span class="HL"><?php echo $model->dateEntered; ?></span>
		</div>
	</div>
	<div class="row-fluid">
	<div class="span3">	

		<label class="muted">
		<h6>Assigned To:</h6>
		</label>			
			
			<span class="HL"><?php echo $model->employee->fullName; ?></span>
	</div>
	<div class="span3">
	
		<label class="muted">
		<h6>Facility Name:</h6>
		</label>			
			
			<span class="HL"><?php echo $model->facility->facilityName; ?></span>

	</div>
	<div class="span3">
		<label class="muted">
		<h6>Referred By:</h6>
		</label>			
			
			<span class="HL"><?php echo $model->facilityContact->fullName; ?></span>

	</div>
	
	</div>