<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipmentName')); ?>:</b>
	<?php echo CHtml::encode($data->equipmentName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipmentType')); ?>:</b>
	<?php echo CHtml::encode($data->equipmentType); ?>
	<br />


</div>