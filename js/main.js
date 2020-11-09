document.getElementById("city_filter").onkeyup = function() {
	input = document.getElementById("city_filter");
	filter = input.value.toUpperCase();
	table = document.getElementById("table_users");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[3];
	    	if (td) {
			if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
	      		} else {
				tr[i].style.display = "none";
	      		}
	    	}
	}
}

$(document).ready(function(){
	$('#add-user').on('submit', function(e){
		e.preventDefault();
		inputs = $("#add-user")[0].elements;
		for (var i = 0, input; input = inputs[i++];) {
			$('#'.concat(input.id)).removeClass('is-invalid');
		}
		$.ajax({
			type: "POST",
			url: 'create.php',
			data: $('#add-user').serialize(),
			success: function(response){
				$('#add-user')[0].reset();
				$('#success_message').fadeIn();
				$('#table_users').find('tbody').html(response.content);
				setTimeout(function() {
					$('#success_message').fadeOut("slow");
				}, 100 );
			},
			error: function(response){	
				errors = response.responseJSON.errors;
				errors.forEach(function(error){
					$('#'.concat(error.value)).addClass('is-invalid');
					$('#'.concat(error.value)).next().html(error.error);

				})

			}
		});
	});
});

