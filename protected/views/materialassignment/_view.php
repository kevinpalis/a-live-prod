<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materialmasterId')); ?>:</b>
	<?php echo CHtml::encode($data->materialmasterId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeId')); ?>:</b>
	<?php echo CHtml::encode($data->employeeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assignedBy')); ?>:</b>
	<?php echo CHtml::encode($data->assignedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantityAssigned')); ?>:</b>
	<?php echo CHtml::encode($data->quantityAssigned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />


</div>