<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionName')); ?>:</b>
	<?php echo CHtml::encode($data->conditionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionType')); ?>:</b>
	<?php echo CHtml::encode($data->conditionType); ?>
	<br />


</div>