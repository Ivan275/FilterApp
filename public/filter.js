jQuery(function($){
	var name = $('#name');
	$('#send').click(function(){
		if(!name.val()){
			alert("Please enter a value !");
			return;
		}

		jQuery.ajax({
			url: 'includes/database.php',
			dataType: "json",
			type: 'GET',
			data: 'name_value=' + name.val(),
			success: function(data){
				$("#msg").empty();
				if(data == 'norecord') {
					$("#msg").html('No such record!');

				} else {
					// console.log(data);
					var event_data = '';
					event_data += '<tr>';
			        $.each(data, function(index, value){
			             event_data += '<td>'+ value +'</td>';
			        });
			        event_data += '<tr>';
			        $("#my_table").html(event_data);
				}

			},
			error: function (request, status, error) {
		        alert(request.responseText);
		    }
		})
	})
});