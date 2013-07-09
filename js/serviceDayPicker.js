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

			document.getElementById('Clientintake_serviceDays_0').value = '0';
			document.getElementById('Clientintake_serviceDays_1').value = '0';
			document.getElementById('Clientintake_serviceDays_2').value = '0';
			document.getElementById('Clientintake_serviceDays_3').value = '0';
			document.getElementById('Clientintake_serviceDays_4').value = '0';
			document.getElementById('Clientintake_serviceDays_5').value = '0';
			document.getElementById('Clientintake_serviceDays_6').value = '0';
			

	}else if(day=='weekday'){
			document.getElementById('M').className = "btn active";
			document.getElementById('T').className = "btn active";
			document.getElementById('W').className = "btn active";
			document.getElementById('Th').className = "btn active";
			document.getElementById('F').className = "btn active";
			document.getElementById('Sa').className = "btn";
			document.getElementById('Su').className = "btn";

			document.getElementById('Clientintake_serviceDays_0').value = '0';
			document.getElementById('Clientintake_serviceDays_1').value = '0';
			document.getElementById('Clientintake_serviceDays_2').value = '0';
			document.getElementById('Clientintake_serviceDays_3').value = '0';
			document.getElementById('Clientintake_serviceDays_4').value = '0';
			document.getElementById('Clientintake_serviceDays_5').value = '1';
			document.getElementById('Clientintake_serviceDays_6').value = '1';

		
	}else if(day=='weekend'){

			document.getElementById('M').className = "btn";
			document.getElementById('T').className = "btn";
			document.getElementById('W').className = "btn";
			document.getElementById('Th').className = "btn";
			document.getElementById('F').className = "btn";
			document.getElementById('Sa').className = "btn active";
			document.getElementById('Su').className = "btn active";

			document.getElementById('Clientintake_serviceDays_0').value = '1';
			document.getElementById('Clientintake_serviceDays_1').value = '1';
			document.getElementById('Clientintake_serviceDays_2').value = '1';
			document.getElementById('Clientintake_serviceDays_3').value = '1';
			document.getElementById('Clientintake_serviceDays_4').value = '1';
			document.getElementById('Clientintake_serviceDays_5').value = '0';
			document.getElementById('Clientintake_serviceDays_6').value = '0';

	}else{

			document.getElementById('M').className = "btn";
			document.getElementById('T').className = "btn";
			document.getElementById('W').className = "btn";
			document.getElementById('Th').className = "btn";
			document.getElementById('F').className = "btn";
			document.getElementById('Sa').className = "btn";
			document.getElementById('Su').className = "btn";

			document.getElementById('Clientintake_serviceDays_0').value = '1';
			document.getElementById('Clientintake_serviceDays_1').value = '1';
			document.getElementById('Clientintake_serviceDays_2').value = '1';
			document.getElementById('Clientintake_serviceDays_3').value = '1';
			document.getElementById('Clientintake_serviceDays_4').value = '1';
			document.getElementById('Clientintake_serviceDays_5').value = '1';
			document.getElementById('Clientintake_serviceDays_6').value = '1';



			document.getElementById('AllDays').className = "btn";
			document.getElementById('Weekdays').className = "btn";
			document.getElementById('Weekends').className = "btn";

	}
}

