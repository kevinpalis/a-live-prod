<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityId')); ?>:</b>
	<?php echo CHtml::encode($data->facilityId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primaryContact')); ?>:</b>
	<?php echo CHtml::encode($data->primaryContact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondaryContactNum')); ?>:</b>
	<?php echo CHtml::encode($data->secondaryContactNum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facilityContactType')); ?>:</b>
	<?php echo CHtml::encode($data->facilityContactType); ?>
	<br />


</div>