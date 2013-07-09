<br>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

if (Yii::app()->user->isGuest)
            $this->redirect(Yii::app()->createUrl('site/login'));

?>

<div class="row-fluid">
	<div class="span1" style="margin:0 auto; float:none;">
		
	</div>
</div>
<!--
<div class="row-fluid">
	<div class="span8">
		<div class="span3">
		<a href="" id="iconDash" title="Create Client"><img src="../../assets/img/members.png"  class="img well" width="64px" height="64px" style="width:64px;height:64px;background-color:yellow;" alt="Create Client"></a>

		</div>
		<div class="span3">
		<a href="" id="iconDash" title="Search Client"><img src="../../assets/img/search.png" class="img well" width="64px" height="64px" style="width:64px;height:64px;background-color:yellow;" alt="Search Client"></a>
		</div>
		<div class="span3">
		<a href="" id="iconDash" title="Check Me In!"><img src="../../assets/img/location.png" class="img well" width="64px" height="64px" style="width:64px;height:64px;background-color:yellow;" alt="Check me in!"></a>
		</div>
		<div class="span3">
		<a href="" id="iconDash" title="Show Reports"><img src="../../assets/img/reports.png" class="img well" width="64px" height="64px" style="width:64px;height:64px;background-color:yellow;" alt="Another Option"></a>
		</div>
	</div>
	
</div>
-->
<hr/>
<div class="row-fluid">

	<div class="span8">
		<?php 
       		$this->Widget('ext.highcharts.HighchartsWidget', array(
   			
   			'options'=>array(
   			/*
   			'chart'=>array(
   				'type'=>'bar'
   				),
   			*/
      		'title' => array('text' => 'April-2013 ADM SMRY'),
      		'xAxis' => array(
         	'categories' => array("Week1","Week2","Week3","Week4")
      		),
      
      		'yAxis' => array(
         	'title' => array('text' => 'Client Count')
      		),
      		
      		/*
      		'plotOptions'=>array(
                'series'=> array(
                    'stacking'=> 'normal'
                )
            ),
      		*/
      		'series' => array(
         	array('type'=>'column', 'name' => 'Michael', 'data' => array(5,7,4)),
         	array('type'=>'column', 'name' => 'Bryan', 'data' => array(1, 2, 0)),
         	array('type'=>'column', 'name' => 'Ian', 'data' => array(1, 3, 1)),
         	array('type'=>'line', 'name' => 'Michael', 'data' => array(3,2,1)),
         	array('type'=>'line', 'name' => 'Bryan', 'data' => array(1, 0, 0)),
         	array('type'=>'line', 'name' => 'Ian', 'data' => array(0, 1, 0)),
         	array('type'=>'spline', 'name' => 'Total Admissions', 'data' => array(4, 3, 1))

      		),

      		'credits' => array('enabled' => false),
   )
));
    ?>
			
	</div>
	<div class="span4" style="padding-top:45px;">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>HCS</th>
					<th>Week 1</th>
					<th>Week 2</th>
					<th>Week 3</th>
					<th>Week 4</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Michael</td>
					<td>6</td>
					<td>5</td>
					<td>4</td>
					<td>6</td>
				</tr>
				<tr>
					<td>Bryan</td>
					<td>0</td>
					<td>1</td>
					<td>0</td>
					<td>1</td>
				</tr>
				<tr>
					<td>In House</td>
					<td>4</td>
					<td>3</td>
					<td>5</td>
					<td>3</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<br>
<br>
<br>

<div class="row-fluid">
	
			<div class="span2 boxed">
				<div class="row-fluid" style="float:none;">
					<div class="boxedtext">135</div>
					<div class="row-fluid">
					<div class="muted boxedtextSmall"><small>CURRENT CENSUS</small></div>
					</div>
				</div>
			</div>
			<div class="span2 boxed">
				<div class="row-fluid" style="float:none;">
					<div class="boxedtext">185</div>
					<div class="row-fluid">
					<div class="muted boxedtextSmall"><small>ON-GOING CLIENTS</small></div>
					</div>
				</div>
			</div>
			<div class="span2 boxed">
				<div class="row-fluid" >
					<div class="boxedtext" style="color:#AA4643;">32</div>
					<div class="row-fluid">
					<div class="muted boxedtextSmall"><small>TERMINATIONS</small></div>
					</div>
				</div>
			</div>
			<div class="span2 boxed">
				<div class="row-fluid" >
					<div class="boxedtext" style="color:#FFA500;">15</div>
					<div class="row-fluid">
					<div class="muted boxedtextSmall"><small>REFERRALS - APR</small></div>
					</div>
				</div>
			</div>
			<div class="span2 boxed">
				<div class="row-fluid" >
					<div class="boxedtext" style="color:#FFA500;">8</div>
					<div class="row-fluid">
					<div class="muted boxedtextSmall"><small>ADMISSIONS - APR</small></div>
					</div>
				</div>
			</div>
			<div class="span2 boxed">
				<div class="row-fluid" >
					<div class="boxedtext" style="color:#FFA500;">53<small>%</small></div>
					<div class="row-fluid">
					<div class="muted boxedtextSmall"><small>SUCCESS RATE - APR</small></div>
					</div>
				</div>
			</div>
	
</div>


<hr/>
<div class="row-fluid">

	<div class="span12">
		<?php 
       		$this->Widget('ext.highcharts.HighchartsWidget', array(
   			
   			'options'=>array(
   			
   			'chart'=>array(
   				'type'=>'area'
   				),
   			
      		'title' => array('text' => 'Area Visits	 VS Referrals'),
      		'xAxis' => array(
         	'categories' => array("Facility1","Facility2","Facility3","Facility4")
      		),
      
      		'yAxis' => array(
         	'title' => array('text' => 'Client Count')
      		),
      		
      		/*
      		'plotOptions'=>array(
                'series'=> array(
                    'stacking'=> 'normal'
                )
            ),
      		*/
      		'series' => array(
         	array('name' => 'Visits', 'data' => array(5,0,4,5)),
         	array('name' => 'Referrals', 'data' => array(1,0,0,2))
         	),

      		'credits' => array('enabled' => false),
   )
));
    ?>
			
	</div>
</div>			

