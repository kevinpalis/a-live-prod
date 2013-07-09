<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caregiverId')); ?>:</b>
	<?php echo CHtml::encode($data->caregiverId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientId')); ?>:</b>
	<?php echo CHtml::encode($data->clientId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateStart')); ?>:</b>
	<?php echo CHtml::encode($data->dateStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateEnd')); ?>:</b>
	<?php echo CHtml::encode($data->dateEnd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amountPaid')); ?>:</b>
	<?php echo CHtml::encode($data->amountPaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payType')); ?>:</b>
	<?php echo CHtml::encode($data->payType); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	*/ ?>

</div>