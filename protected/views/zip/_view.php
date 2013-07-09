<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipCode')); ?>:</b>
	<?php echo CHtml::encode($data->zipCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mainCity')); ?>:</b>
	<?php echo CHtml::encode($data->mainCity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acceptableCity')); ?>:</b>
	<?php echo CHtml::encode($data->acceptableCity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('county')); ?>:</b>
	<?php echo CHtml::encode($data->county); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />


</div>