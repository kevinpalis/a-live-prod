<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('ciView','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientId')); ?>:</b>
	<?php echo CHtml::encode($data->clientId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgSex')); ?>:</b>
	<?php echo CHtml::encode($data->cgSex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('liveIn')); ?>:</b>
	<?php echo CHtml::encode($data->liveIn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serviceHours')); ?>:</b>
	<?php echo CHtml::encode($data->serviceHours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serviceDays')); ?>:</b>
	<?php echo CHtml::encode($data->serviceDays); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('cgAgeFrom')); ?>:</b>
	<?php echo CHtml::encode($data->cgAgeFrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgAgeTo')); ?>:</b>
	<?php echo CHtml::encode($data->cgAgeTo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgWeightFrom')); ?>:</b>
	<?php echo CHtml::encode($data->cgWeightFrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgWeightTo')); ?>:</b>
	<?php echo CHtml::encode($data->cgWeightTo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgHeightFrom')); ?>:</b>
	<?php echo CHtml::encode($data->cgHeightFrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgHeightTo')); ?>:</b>
	<?php echo CHtml::encode($data->cgHeightTo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgDriving')); ?>:</b>
	<?php echo CHtml::encode($data->cgDriving); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientsCar')); ?>:</b>
	<?php echo CHtml::encode($data->clientsCar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cgEnglishLevel')); ?>:</b>
	<?php echo CHtml::encode($data->cgEnglishLevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcPets')); ?>:</b>
	<?php echo CHtml::encode($data->pcPets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcSmoking')); ?>:</b>
	<?php echo CHtml::encode($data->pcSmoking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcLivingCondition')); ?>:</b>
	<?php echo CHtml::encode($data->pcLivingCondition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcWeightTransfer')); ?>:</b>
	<?php echo CHtml::encode($data->pcWeightTransfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pcConditionList')); ?>:</b>
	<?php echo CHtml::encode($data->pcConditionList); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipmentList')); ?>:</b>
	<?php echo CHtml::encode($data->equipmentList); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<?php echo CHtml::link('Caregiver-ClientIntake Search','#',array('class'=>'search-cc btn')); ?>
	<br />	

	<?php 
		/*Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
			$('.search-form').toggle();
			return false;
		});
		$('.search-form form').submit(function(){
			$.fn.yiiGridView.update('caregiver-grid', {
				data: $(this).serialize()
			});
			return false;
		});
		");*/
		
		Yii::app()->clientScript->registerScript('search-cc', "
		$('.search-cc').click(function(){
			$('.search-form-ci').toggle();
			return false;
		});
		$('.search-form-ci form').submit(function(){
			$.fn.yiiGridView.update('caregiver-grid', {
				data: $(this).serialize()
			});
			return false;
		});
		");
	 ?>

	<!--div class="search-form-ci" style="display:none"-->
	<?php //$this->renderPartial('_ciSearch',array(
		//'model'=>$model,
	//)); ?>
	</div>

</div>