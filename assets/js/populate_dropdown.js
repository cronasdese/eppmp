$(document).ready(function() {
	$.ajax({
		url: "Supplies_controller/getCategory",
		dataType: 'json',
		success: function(data) {
			//alert(data);
			$(data).each(function(){
                $("#category").append($('<option>', {
                    value: this.id,
                    text: this.category,
                }));
            })
		}
    });

	$('#category').change(function () {
        var category = $('#category :selected').val(); // <-- change this line
        $("#subcategory > option").remove(); // to clear items
        console.log(category);

        $.ajax({
        	type: "POST",
			url: "Supplies_controller/getSubCategory",
			data: {	category:category },
			dataType: 'json',
			success: function(data) {
				//console.log(data);
				//alert(data);
				$(data).each(function(){
                    $("#subcategory").append($('<option>', {
                        value: this.id,
                        text: this.subcategory,
                    }));
                })
			}
        });
    });

    $('#subcategory').change(function () {
        var subcategory = $('#subcategory :selected').val(); // <-- change this line
        $("#supply > option").remove(); // to clear items
        //console.log(category);

        $.ajax({
        	type: "POST",
			url: "Supplies_controller/getSupply",
			data: {	subcategory:subcategory },
			dataType: 'json',
			success: function(data) {
				//console.log(data);
				//alert(data);
				$(data).each(function(){
                    $("#supply").append($('<option>', {
                        value: this.id,
                        text: this.item_description,
                    }));
                })
			}
        });
    });

    $('#category').change(function () {
        var subcategory = $('#subcategory :selected').val(); // <-- change this line
        $("#supply > option").remove(); // to clear items
        //console.log(category);

        $.ajax({
            type: "POST",
            url: "Supplies_controller/getSuppliesWithSubcategory",
            data: { category:category },
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                //alert(data);
                $(data).each(function(){
                    $("#subcategory-item").append($('<option>', {
                        value: this.id,
                        text: this.item_description,
                    }));
                })
            }
        });
    });
});

