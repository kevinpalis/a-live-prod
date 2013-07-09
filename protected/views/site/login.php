<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>





<div class="span4 offset4">
	<div class="well">
<?php 
	/*
	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),*/

	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
		'validateOnSubmit'=>true),
)); ?>


<h4>Login A-Live!</h4>
<hr \>

		<div class="row-fluid" >
			
				<?php echo $form->textField($model,'email', array('placeholder'=>'Email address', 'class'=> 'input-large')); ?>
				<?php echo $form->error($model,'email'); ?>
				<?php echo $form->passwordField($model,'password',array('placeholder'=>'Password', 'class'=> 'input-large')); ?>
				<?php echo $form->error($model,'password'); ?>
			
		<!--p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p-->
			<br \>
			<div class="row-fluid">
				<div class="span12" style"display:inline;">
					<?php echo $form->checkBox($model,'rememberMe'); ?>	<?php echo $form->label($model,'rememberMe'); ?>
					<?php echo $form->error($model,'rememberMe'); ?>
				</div>
			<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
				
			</div>
		</div>
<?php $this->endWidget(); ?>
</div>
</div>
