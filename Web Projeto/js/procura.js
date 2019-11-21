$(document).ready(function(){
	$("#procurar").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#listagem tr").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
});