$(document).ready(function(){
	$('.modal').on('hidden.bs.modal', function(){
		$('input:checkbox').iCheck("uncheck");
		$('form').trigger("reset");
	});
});