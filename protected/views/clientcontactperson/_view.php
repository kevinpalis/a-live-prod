<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientId')); ?>:</b>
	<?php echo CHtml::encode($data->clientId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipId')); ?>:</b>
	<?php echo CHtml::encode($data->zipId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('primaryNum')); ?>:</b>
	<?php echo CHtml::encode($data->primaryNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondaryNum')); ?>:</b>
	<?php echo CHtml::encode($data->secondaryNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactType')); ?>:</b>
	<?php echo CHtml::encode($data->contactType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientRelationship')); ?>:</b>
	<?php echo CHtml::encode($data->clientRelationship); ?>
	<br />

	*/ ?>

</div>