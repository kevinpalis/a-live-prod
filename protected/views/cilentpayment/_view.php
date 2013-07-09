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

	<b><?php echo CHtml::encode($data->getAttributeLabel('amountDebit')); ?>:</b>
	<?php echo CHtml::encode($data->amountDebit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amountCredit')); ?>:</b>
	<?php echo CHtml::encode($data->amountCredit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceDue')); ?>:</b>
	<?php echo CHtml::encode($data->invoiceDue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceCreationDate')); ?>:</b>
	<?php echo CHtml::encode($data->invoiceCreationDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceType')); ?>:</b>
	<?php echo CHtml::encode($data->invoiceType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceNotes')); ?>:</b>
	<?php echo CHtml::encode($data->invoiceNotes); ?>
	<br />

	*/ ?>

</div>