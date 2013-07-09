<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityName')); ?>:</b>
	<?php echo CHtml::encode($data->facilityName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addres')); ?>:</b>
	<?php echo CHtml::encode($data->addres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipId')); ?>:</b>
	<?php echo CHtml::encode($data->zipId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityStatus')); ?>:</b>
	<?php echo CHtml::encode($data->facilityStatus); ?>
	<br />


</div>