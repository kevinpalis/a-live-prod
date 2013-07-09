<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>
<!--Client information Details-->
<div class="row-fluid">
	<div class="span4">	
		<?php echo $form->dropDownListRow($model, 'status', 
			array(1 => 'New Referral', 2=>'For follow-up', 3=>'For Interview', 4=> 'Closed Case',
					5 => 'Admission', 6=>'On-hold', 7=>'Termination'), 
				array('options' => array('1'=>array('selected'=>true)))); ?>
	</div>
</div>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>$model->isNewRecord ? 'Create' : 'Save',
	)); ?>
</div>

<?php $this->endWidget(); ?>