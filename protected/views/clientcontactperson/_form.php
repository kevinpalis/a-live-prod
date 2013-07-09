<?php
	if(isset($_GET['success'])){
		$getName = Client::model()->findByPk($_GET['clientId']);
?>

	<div class="alert alert-success">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>Well Done!</strong> 
	  <div>You have successfully created a new Client <b><?php echo $getName->fullName;?></b>.
	  You may now create a Contact Person for this Client.</div>
	</div>

<?php
}
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'clientcontactperson-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo CHtml::hiddenField('formName',
		'Clientcontactperson'
		); 
	?>

	<?php echo $form->hiddenField($model,'createdBy',
		array( 
		'value'=>Yii::app()->user->getId()
		)); 
	?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-fluid">
		<div class="span3">	
			<?php 

				if(isset($_GET['clientId'])){
					echo $form->dropDownListRow($model,'clientId',CHtml::listData(Client::model()->findAll('id='.$_GET['clientId']),'id', 'fullName'),
						array(
							'class'=>'span12',
													
						)
					); 
				}
				else
					{
					echo $form->dropDownListRow($model,'clientId',CHtml::listData(Client::model()->findAll('id>0'),'id', 'fullName'),
					array(
							'empty'=>'Select Client',
							'class'=>'span12',
							
						)
					); 
				
			//use select2 for dropdowns
				$this->widget('ext.select2.ESelect2',array(
	  				'selector'=>'#Clientcontactperson_clientId',
	  				'options'=>array(
	  					'minimumInputLength'=> 3,
	  					'width'=>'100%'
	  					)
					));
				}
			?>
		</div>
		<div class='span3'>
			<?php echo $form->dropDownListRow($model,'contactType',array("0"=>"All Concerns", "1"=>"Billing Concerns","2"=>"General/Non-billing Concerns", "3"=>"Emergency Contact AM", "4"=>"Emergency Contact PM"),array('class'=>'span12')); ?>
		</div>
		<div class='span3'>
				<?php echo $form->dropDownListRow($model,'clientRelationship',array("0"=>"Son/Daughter", "1"=>"Sibling","2"=>"Parents", "3"=>"Other Relatives", "4"=>"Conservator", "5"=>"Neighbor", "6"=>"Non-Relative"),array('class'=>'span12')); ?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6"><?php echo $form->textFieldRow($model,'fname',array('class'=>'span12','maxlength'=>20)); ?></div>
		<div class="span6"><?php echo $form->textFieldRow($model,'lname',array('class'=>'span12','maxlength'=>20)); ?></div>
	</div>
	
	<div class="row-fluid">
		<div class="span12"><?php echo $form->textFieldRow($model,'address',array('class'=>'span12','maxlength'=>40)); ?></div>
	</div>
	<div class="row-fluid">	
		<div class="span4">			
			<?php 
			
			
					
			echo $form->dropDownListRow($model,'zipId',CHtml::listData(Zip::model()->findAll('id>0'),'id', 'fullZipDetails'),array('class'=>'span10',	'empty'=>'Select City or Zip Code'));
			
		
			//use select2 for dropdowns
			$this->widget('ext.select2.ESelect2',array(
  				'selector'=>'#Clientcontactperson_zipId',
  				
			  	'options'=>array(
  					'minimumInputLength'=> 2,
  					'width'=>'100%'
  					)
				));
		
			?></div>
		
	</div>

	<div class="row-fluid">
		<div class="span4">
			<label class="required" for="city_id">
			Primary Number
			<span class="required">*</span>
			</label>
			<?php echo $form->numberField($model,'primaryNum',array('class'=>'span12','maxlength'=>10)); ?>
		</div>
		<div class="span4">
			<label class="required" for="city_id">
			Alternate Number
			</label>
			<?php echo $form->numberField($model,'secondaryNum',array('class'=>'span12','maxlength'=>10)); ?>
		</div>
		<div class="span4">
			<label class="required" for="city_id">
			Email Address
			</label>
			<?php echo $form->emailField($model,'email',array('class'=>'span12','maxlength'=>50)); ?>
		</div>
	</div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>

		<?php 
		if(isset($_GET['clientId'])){ 
		?>
		<div class="pull-right">
		<a id="Clear" class="btn" href="<?PHP echo "../clientintake/create?clientId=".$_GET['clientId'];?>" >Skip</a>
		
		<?php
		}
		?>
		</div>
	</div>

<?php $this->endWidget(); ?>
