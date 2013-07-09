<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientId')); ?>:</b>
	<?php echo CHtml::encode($data->clientId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caregiverId')); ?>:</b>
	<?php echo CHtml::encode($data->caregiverId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expenseType')); ?>:</b>
	<?php echo CHtml::encode($data->expenseType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expenseAmount')); ?>:</b>
	<?php echo CHtml::encode($data->expenseAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('milesDriven')); ?>:</b>
	<?php echo CHtml::encode($data->milesDriven); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mileRate')); ?>:</b>
	<?php echo CHtml::encode($data->mileRate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startTime')); ?>:</b>
	<?php echo CHtml::encode($data->startTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endTime')); ?>:</b>
	<?php echo CHtml::encode($data->endTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>