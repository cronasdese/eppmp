<!DOCTYPE html>
<html>
<head>
	<title>TEST TABLE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
    <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
    <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: "<?php echo base_url('Supplies_controller/getCategory'); ?>",
                dataType: 'json',
                success: function(data) {
                    $(data).each(function(){
                        $("#category").append($('<option>', {
                            value: this.id,
                            text: this.category,
                        }));
                    })
                },
                error: function(errorw) {
                    alert("hi");
                }
            });

            $('#category').change(function () {
                var category = $('#category :selected').val(); // <-- change this line
                $("#items > option").remove(); // to clear items
                //alert(category);
                //console.log(category);

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('Supplies_controller/getSuppliesWithSubcategory'); ?>",
                    data: { category:category },
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        //alert(data);
                        $(data).each(function(){
                            $('#items').append($('<option class="dropdown-header"', {
                                text:this.subcategory,
                            }));
                            $("#items").append($('<option>', {
                                value: this.item_id,
                                text: this.item_description,
                            }));
                        })
                    },
                    error: function(errorw) {
                        alert("hi");
                    }
                });
            });
        });
    </script>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<h3>Project Procurement Management Plan</h3>
		</div>
		<div>
			<label class="col-md-2">Office/Unit:</label>
			<div class="col-md-10 text-nowrap">
				<input type="text" class="form-control input-sm" placeholder="User's office from db">
			</div>
		</div>
		<div>
			<label class="col-md-2 text-nowrap">Date of Implementation:</label>
			<div class="col-md-10">
				<input type="text" class="form-control input-sm" placeholder="Enter date of implementation">
			</div>
		</div>
		<div>
			<label class="col-md-2 text-nowrap">Project Name/Title:</label>
			<div class="col-md-10">
				<input type="text" class="form-control input-sm" placeholder="Enter project name">
			</div>
		</div>
	</div>
	<div class="container table-responsive">
		<table class="table">
			<thead>
				<tr>
                    <th class="text-nowrap">Category</th>
                    <th class="text-nowrap">Item/Specification</th>
                    <th class="text-nowrap">Unit</th>
                    <th class="text-nowrap">Quantity</th>
                    <th class="text-nowrap">Schedule/Milestone
                        <table class="milestone-table"> 
                            <tr>
                                <td>Jan</td>
                                <td>Feb</td>
                                <td>Mar</td>
                                <td>Apr</td>
                                <td>May</td>
                                <td>Jun</td>
                                <td>Jul</td>
                                <td>Aug</td>
                                <td>Sep</td>
                                <td>Oct</td>
                                <td>Nov</td>
                                <td>Dec</td>
                            </tr>
                        </table>
                    </th>
                    <th>Unit Price</th>
                    <th>Subtotal</th>
                    <th> </th>
                    <th> </th>
                </tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
</body>
</html>