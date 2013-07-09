<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" style="height:100%">
<head>

	<?PHP
	 $baseUrl = Yii::app()->baseUrl; 
  	 $cs = Yii::app()->getClientScript();
  	 $cs->registerCssFile($baseUrl.'/css/custom.css');
	?>

	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />-->

	<!-- blueprint CSS framework -->
	<!--
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<!--
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	-->
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/a-live.ico"> 
	
</head>

<body style="height:100%">
<div id="wrap" style="height: auto !important;margin: 0 auto -60px;min-height: 100%;">

		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				
				array('label'=>'Rights', 'url'=>array('/rights'), 'visible'=>!Yii::app()->user->isGuest),
				//temp while there is no page handling this
				array('label'=>'Employee', 'url'=>array('/employee'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Zip', 'url'=>array('/zip'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Facility', 'url'=>array('/facility'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'FacilityContact', 'url'=>array('/facilitycontact'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Client', 'url'=>array('/client'), 'visible'=>!Yii::app()->user->isGuest),

				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),

		        
		        //array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
		        //array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
		        //array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
		        //array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
					),
		));*/ ?>

		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'brand' => 'A-live',
	'collapse' => true,
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
				array('label'=>'Dashboard', 'url'=>array('/site/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Admin', 'url'=>array('/employee'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->actionCheckVisibility('admin')),
										'items'=>array(
												//Employee
												array('label'=>'Employee'),
												array('label'=>'Employee Create', 'url'=>array('/employee/create', 'tag'=>'new')),
												array('label'=>'Employee Search', 'url'=>array('/employee/admin', 'tag'=>'popular')),
												//Zip Code
												array('label'=>'Zip'),
												array('label'=>'Zip Code Create', 'url'=>array('/zip/create', 'tag'=>'new')),
												array('label'=>'Zip Code Search', 'url'=>array('/zip/admin', 'tag'=>'popular')),
										)	
									),
				array('label'=>'Client', 'url'=>array('/site/page', 'view'=>'client_menu'),'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->actionCheckVisibility('client')),
								
								/*
								'items'=>array(

												//Client
												array('label'=>'Client'),
												array('label'=>'Client Create', 'url'=>array('/client/create', 'tag'=>'new')),
												array('label'=>'Client Search', 'url'=>array('/client/admin', 'tag'=>'popular')),
												
												array('label'=>'Client Contacts'),
												array('label'=>'Client Contact Create', 'url'=>array('/clientcontactperson/create', 'tag'=>'new')),

												array('label'=>'Client Intake'),
												array('label'=>'Client Intake Create', 'url'=>array('/clientintake/create', 'tag'=>'new')),
												
								)
								*/
							),

							array('label'=>'Facility', 'url'=>array('/facility'),'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->actionCheckVisibility('facility')),
								'items'=>array(


												//Facility
												array('label'=>'Facility'),
												array('label'=>'Facility Create', 'url'=>array('/facility/create', 'tag'=>'new')),
												array('label'=>'Facility Search', 'url'=>array('/facility/admin', 'tag'=>'popular')),
												//Facility Contact
												array('label'=>'Facility Contact'),
												array('label'=>'Facility Contact Create', 'url'=>array('/facilitycontact/create', 'tag'=>'new')),
												array('label'=>'Facility Contact Search', 'url'=>array('/facilitycontact/admin', 'tag'=>'popular')),
												
										)	


							),

							array('label'=>'Caregiver', 'url'=>array('/site/caregiver_menu'),'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->actionCheckVisibility('caregiver')),
								'items'=>array(


												//Facility
												array('label'=>'Caregiver'),
												array('label'=>'Caregiver Create', 'url'=>array('/caregiver/create', 'tag'=>'new')),
												array('label'=>'Caregiver Search', 'url'=>array('/caregiver/admin', 'tag'=>'popular')),
												
												
										)	


							),

							array('label'=>'Rights', 'url'=>array('/rights'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->actionCheckVisibility('rights'))),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'class'=>"pull-right")

							
			)
		)
	)
));
?>



	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<div class="container">
	<?php echo $content; ?>
	</div>




	<br>
	<br>
	<br>
	<br>	
    <div class="container">	
    	<!--
    	<div class="row-fluid">
    		<div class="span12">
    			<hr/>
    			<div class="span2" style="width: 15%;">
				    <ul class="unstyled">
				    <li>A-live<li>
				    <li><a href="#">About us</a></li>
				    <li><a href="#">Blog</a></li>
				    <li><a href="#">Contact & support</a></li>
				    <li><a href="#">Enterprise</a></li>
				    <li><a href="#">Site status</a></li>
				    </ul>  
				</div>
			</div>
		</div>
		-->
		<hr>
		<div class="row-fluid">
		    <div class="span12">
			    <div class="span8">
				    <a href="#">Terms of Service</a>
				    <a href="#">Privacy</a>
				    <a href="#">Security</a>
    			</div>
	   			<div class="span4">
	    			<p class="muted pull-right"> &#169; 2013 Altruist Home Care Services. All rights reserved</p>
	   		 	</div>
			</div>
   		</div>
	</div>
</body>
</html>
