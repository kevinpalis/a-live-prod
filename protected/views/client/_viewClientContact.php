<div>
	<small><a class="pull-right" style="color:#FF6600;" href="../clientcontactperson/create?clientId=<?php echo $model->id;?>">ADD CONTACT PERSON</a></small>
</div>

<?php 

	

	$clientContacts = $model->clientcontactpeople(array('condition'=>$model->id));
	
	if(!empty($clientContacts[0]->id)){

		$i=1;	
		foreach($clientContacts as $clientContact)
			{ ?>
				
		<!--Client Contact information Details-->
		<div class="row-fluid">
			<div class="page-header">
			<h2><small>Client's Contact Person - <b> <?php echo $clientContact->contactTypePrint;?> </b></small></h2>
			</div>
			
					
			
		</div>
				
		<div class="row-fluid">
			<div class="span6">
			<label class="muted"><h6>Relationship to Client:</h6></label>			
				<span class="HL"><?php echo $clientContact->relationshipTypePrint; ?></span>
			</div>
			<div>
				<small><a class="pull-right" href="../clientcontactperson/update/<?php echo $clientContact->id;?>">EDIT</a></small>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<label class="muted"><h6>Full Name:</h6></label>			
					<span class="HL"><?php $this->beginWidget('CHtmlPurifier'); echo $clientContact->fullName; $this->endWidget(); ?></span>
			</div>
		</div>
		<div class="row-fluid">
		<div class="span6">
			<label class="muted"><h6>Address:</h6></label>		
				<span class="HL"><?php $this->beginWidget('CHtmlPurifier'); echo $clientContact->address.", ".$clientContact->zip->fullZipDetails; $this->endWidget();?></span>
			</div>	
		</div>
		
		<div class="row-fluid">
			<div class="span4"><label class="muted"><h6>Primary Num:</h6></label><span class="HL"><?php $this->beginWidget('CHtmlPurifier'); echo $clientContact->primaryNum; $this->endWidget();?></span></div>
			<div class="span4"><label class="muted"><h6>Secondary Num:</h6></label><span class="HL"><?php $this->beginWidget('CHtmlPurifier'); echo $clientContact->secondaryNum; $this->endWidget();?></span></div>
			<div class="span4"><label class="muted"><h6>Email:</h6></label><span class="HL"><?php $this->beginWidget('CHtmlPurifier'); echo $clientContact->email; $this->endWidget();?></span></div>
		</div>	

		<br/>
		<br/>
		<?php
			$i++;
			}
	}else{ echo "<div>Data does not exist</div>";} 
	

	?>	
	<br/>
	<hr/>