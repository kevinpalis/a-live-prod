<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityId')); ?>:</b>
	<?php echo CHtml::encode($data->facilityId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityContactId')); ?>:</b>
	<?php echo CHtml::encode($data->facilityContactId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeId')); ?>:</b>
	<?php echo CHtml::encode($data->employeeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materialGiven')); ?>:</b>
	<?php echo CHtml::encode($data->materialGiven); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('materialQty')); ?>:</b>
	<?php echo CHtml::encode($data->materialQty); ?>
	<br />

	*/ ?>

</div>