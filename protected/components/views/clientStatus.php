<div id="clientStatus" class="well well-small row-fluid" style="
  width:230px;
  height: 300px; 
 "> 
  
    <div class="pagination-centered"><h4><?php echo $this->label; ?></h4></div>
<hr/>
	<div class="ContentClient row-fluid" style="height:230px;
	   overflow:auto;
		background-color: #F5F5F5;
	    ">
	<?php 
    foreach($this->statuses as $status) {
        $clients = $this->fetchClients($status);
		?>
		<div class="row-fluid">
		<?php
		foreach($clients as $client){
		?>
		
			<div class ="span8" style="margin-left:0px">
				<a href="../client/<?php echo $client->id; ?>"><?php echo $client->fullName; ?></a>
			</div>
			<div class="pull-right">
				<small><a href="../client/updateStatus/<?php echo $client->id; ?>" style="color:#FF6600; font-size:10px;">UPDATE</a></small>
			</div>
		<?php
		}
		?>
		</div>	
		<?php
    }
    ?>
	</div>
	
</div>