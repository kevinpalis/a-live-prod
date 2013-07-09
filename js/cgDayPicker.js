function updateDays(day){

	if(document.getElementById(day).value == '1'){
   		document.getElementById(day).value = '0';
   	}
	else{
		document.getElementById(day).value = '1';
	}

	document.getElementById('AllDays').className = "btn";
	document.getElementById('Weekdays').className = "btn";
	document.getElementById('Weekends').className = "btn";
}



function updateDaysSelection(day){

	
	if(day=='seven'){
			document.getElementById('M').className = "btn active";
			document.getElementById('T').className = "btn active";
			document.getElementById('W').className = "btn active";
			document.getElementById('Th').className = "btn active";
			document.getElementById('F').className = "btn active";
			document.getElementById('Sa').className = "btn active";
			document.getElementById('Su').className = "btn active";

			document.getElementById('Caregiver_preferredDays_0').value = '0';
			document.getElementById('Caregiver_preferredDays_1').value = '0';
			document.getElementById('Caregiver_preferredDays_2').value = '0';
			document.getElementById('Caregiver_preferredDays_3').value = '0';
			document.getElementById('Caregiver_preferredDays_4').value = '0';
			document.getElementById('Caregiver_preferredDays_5').value = '0';
			document.getElementById('Caregiver_preferredDays_6').value = '0';
			

	}else if(day=='weekday'){
			document.getElementById('M').className = "btn active";
			document.getElementById('T').className = "btn active";
			document.getElementById('W').className = "btn active";
			document.getElementById('Th').className = "btn active";
			document.getElementById('F').className = "btn active";
			document.getElementById('Sa').className = "btn";
			document.getElementById('Su').className = "btn";

			document.getElementById('Caregiver_preferredDays_0').value = '0';
			document.getElementById('Caregiver_preferredDays_1').value = '0';
			document.getElementById('Caregiver_preferredDays_2').value = '0';
			document.getElementById('Caregiver_preferredDays_3').value = '0';
			document.getElementById('Caregiver_preferredDays_4').value = '0';
			document.getElementById('Caregiver_preferredDays_5').value = '1';
			document.getElementById('Caregiver_preferredDays_6').value = '1';

		
	}else if(day=='weekend'){

			document.getElementById('M').className = "btn";
			document.getElementById('T').className = "btn";
			document.getElementById('W').className = "btn";
			document.getElementById('Th').className = "btn";
			document.getElementById('F').className = "btn";
			document.getElementById('Sa').className = "btn active";
			document.getElementById('Su').className = "btn active";

			document.getElementById('Caregiver_preferredDays_0').value = '1';
			document.getElementById('Caregiver_preferredDays_1').value = '1';
			document.getElementById('Caregiver_preferredDays_2').value = '1';
			document.getElementById('Caregiver_preferredDays_3').value = '1';
			document.getElementById('Caregiver_preferredDays_4').value = '1';
			document.getElementById('Caregiver_preferredDays_5').value = '0';
			document.getElementById('Caregiver_preferredDays_6').value = '0';

	}else{

			document.getElementById('M').className = "btn";
			document.getElementById('T').className = "btn";
			document.getElementById('W').className = "btn";
			document.getElementById('Th').className = "btn";
			document.getElementById('F').className = "btn";
			document.getElementById('Sa').className = "btn";
			document.getElementById('Su').className = "btn";

			document.getElementById('Caregiver_preferredDays_0').value = '1';
			document.getElementById('Caregiver_preferredDays_1').value = '1';
			document.getElementById('Caregiver_preferredDays_2').value = '1';
			document.getElementById('Caregiver_preferredDays_3').value = '1';
			document.getElementById('Caregiver_preferredDays_4').value = '1';
			document.getElementById('Caregiver_preferredDays_5').value = '1';
			document.getElementById('Caregiver_preferredDays_6').value = '1';



			document.getElementById('AllDays').className = "btn";
			document.getElementById('Weekdays').className = "btn";
			document.getElementById('Weekends').className = "btn";

	}
}


		handleFingerDiv = function () {

		    switch ($(this).val()) {
		        case '0':
		            $("#fingerDiv").hide('moderate',function(){});
		            //$("Caregiver_accidentDetails").val() = "";
		        break;
		        case '1':
		            $("#fingerDiv").show('moderate',function(){});
		        break;
		       
    	}
		};

		$(document).ready(function() {

	    	$("#Caregiver_fingerPrint").change(handleFingerDiv);

	    // Run the event handler once now to ensure everything is as it should be
	    handleFingerDiv.apply($("#Caregiver_fingerPrint"));

		});

		handleTBDiv = function () {

		    switch ($(this).val()) {
		        case '0':
		            $("#tbDiv").hide('moderate',function(){});
		            //$("Caregiver_accidentDetails").val() = "";
		        break;
		        case '1':
		            $("#tbDiv").show('moderate',function(){});
		        break;
		       
    	}
		};

		$(document).ready(function() {

	    	$("#Caregiver_tbTested").change(handleTBDiv);

	    // Run the event handler once now to ensure everything is as it should be
	    handleTBDiv.apply($("#Caregiver_tbTested"));

		});

		handleCrimeDiv = function () {

		    switch ($(this).val()) {
		        case '0':
		            $("#crimeDiv").hide('moderate',function(){});
		            //$("Caregiver_accidentDetails").val() = "";
		        break;
		        case '1':
		            $("#crimeDiv").show('moderate',function(){});
		        break;
		       
    	}
		};

		$(document).ready(function() {

	    	$("#Caregiver_convictedCrime").change(handleCrimeDiv);

	    // Run the event handler once now to ensure everything is as it should be
	    handleCrimeDiv.apply($("#Caregiver_convictedCrime"));

		});




