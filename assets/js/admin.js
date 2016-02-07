$(document).ready(function() {
	$('#submit').click(function (event) {
		event.preventDefault();
		
		if($('#category').val()===''){
			alert('Please enter a category name.')
		}
		else{
			var category = $('#category').val();
			var subcategory = $('#subcategory').val();

			alert(category);
			alert(subcategory);

			$.ajax({
	        	type: "POST",
				url: "Admin_controller/insertCategory",
				data:{ category:category, subcategory:subcategory },
				success: function(data) {
					alert('You can now add items.');
				}
	        });
		}
    });
});

