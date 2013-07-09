<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productName')); ?>:</b>
	<?php echo CHtml::encode($data->productName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productDesc')); ?>:</b>
	<?php echo CHtml::encode($data->productDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantityTotal')); ?>:</b>
	<?php echo CHtml::encode($data->quantityTotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitPrice')); ?>:</b>
	<?php echo CHtml::encode($data->unitPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitOfMeasure')); ?>:</b>
	<?php echo CHtml::encode($data->unitOfMeasure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('countPerUOM')); ?>:</b>
	<?php echo CHtml::encode($data->countPerUOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentID')); ?>:</b>
	<?php echo CHtml::encode($data->parentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materialType')); ?>:</b>
	<?php echo CHtml::encode($data->materialType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bestBefore')); ?>:</b>
	<?php echo CHtml::encode($data->bestBefore); ?>
	<br />

	*/ ?>

</div>