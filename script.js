function SetFunctionName(){
	var val = $('#selectOperation').val();
	if(val == null || val == ''){
		alert("Please select proper value");
	}else{
		$('#func').append('<input type="hidden" name="function" value="'+val+'" id="hiddenFuncVal"/>');
		$('#func').show();
	}
}
$( document ).ready(function() {
	$('#func').submit(function( event ) {
		event.preventDefault();
		var inpputVal	= $('#funcInput').val();
		var funcName	= $('#hiddenFuncVal').val();
		var loc 		= window.location.pathname;
		var host		= window.location.origin;
		var url			= host+loc+'function.php'
		$.ajax({
	        url: url,
	        type: 'POST',
	        data: {function: funcName, value: inpputVal},
	        success: function( data ) {
		    	$("#result").html(data);
	        }
	    });
	});
});