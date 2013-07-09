<?php /* @var $this Controller */ ?>
<?php $this->beginContent('application.views.layouts.main'); ?>


<div class="container-fluid">
	<!-- body -->
	<div class="row-fluid">
		<!--start content-->
		<div class="span9">
			<?php echo $content; ?>
		</div><!-- content -->
	
		<!--start sidebar-->
		<div class="span3" style="padding-top:60px">
			<div class="well" >


				<?php
					//change this to update to bootstrap look
					$this->beginWidget('zii.widgets.CPortlet', array(
						'title'=>'Operations',
					));
					/*
					$this->widget('zii.widgets.CMenu', array(
						'items'=>$this->menu,
						'htmlOptions'=>array('class'=>'operations'),
					));

					$this->endWidget();
						*/
					//$array1 => array('label'=>'List header', 'itemOptions'=>array('class'=>'nav-header'));
					//$array2 => $this->menu;
					//$merged => array_merge($array1, $array2);


					$this->widget('bootstrap.widgets.TbMenu', array(
						'type'=>'list',
						'items'=>$this->menu,
					));
					$this->endWidget();
				
				?>
			</div>
		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>