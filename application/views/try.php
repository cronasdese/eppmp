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
            <hr />  
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
    <br />
<div  class="container table-responsive col-sm-12">
    <form enctype="multipart/form-data" data-parsley-validate="">
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th class="text-nowrap text-center">Category</th>
                    <th class="text-nowrap text-center col-sm-5">Item/Specification</th>
                    <th class="text-nowrap text-center col-sm-1">Unit</th>
                    <th class="text-nowrap text-center">Qty</th>
                    <th class="text-nowrap text-center" id="th-item">Schedule/Milestone
                        <table class="milestone-table text-nowrap"> 
                        <tr>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                        </tr>
                        </table>
                    </th>
                    <th class="text-nowrap text-center col-sm-1">Unit Price</th>
                    <th class="text-nowrap text-center col-sm-1">Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-nowrap"> 
                        <form id="make_checkbox_select">
                            <div class="control-group">
                                <div class="controls">
                                    <select name="category" id="category">
                                        <option value="0">Select Category</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td class="text-nowrap text-center"> 
                        <div class="control-group">
                            <div class="controls">
                                <select  name="items" id="items" class="col-sm-11">
                                    <option value="0">Select Item</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td> </td>
                    <td class="text-nowrap text-center">    
                        <input type="number" placeholder="0" min="0" class="td-width1" />
                    </td>
                    <td class="td-pad"> 
                        <table class="milestone-table"> 
                            <tr class="text-nowrap text-center">
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                            </tr>
                        </table>    
                    </td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <a id="table-add"><span class="table-add glyphicon glyphicon-plus" ></span></a>
                        <!--span class="table-add1 glyphicon glyphicon-plus"></span-->
                    </td>
                </tr>
                <!--hidden row  class="hide" id="hide"-->  
                 <tr id="table-hide">
                    <td class="text-nowrap"> 
                        <form id="make_checkbox_select">
                            <div class="control-group">
                                <div class="controls">
                                    <select name="category" id="category" class="col-sm-12">
                                        <option value="0">Select Category</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td class="text-nowrap text-center"> 
                        <div class="control-group">
                            <div class="controls">
                                <select  name="items" id="items" class="col-sm-11">
                                    <option value="0">Select Item</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td> </td>
                    <td class="text-nowrap text-center">    
                        <input type="number" placeholder="0" min="0" class="td-width1" />
                    </td>
                    <td class="td-pad"> 
                        <table class="milestone-table"> 
                            <tr class="text-nowrap text-center">
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                                <td class="text-nowrap text-center">    
                                    <input type="number" placeholder="0" min="0" class="td-width" />
                                </td>
                            </tr>
                        </table>    
                    </td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <a id="table-remove"><span class="table-remove glyphicon glyphicon-remove" ></span></a>
                        <!--span class="table-add1 glyphicon glyphicon-plus"></span-->
                    </td>
                </tr> 
            </tbody>
        </table>
    </form>
</div>
<script type="text/javascript">
        $(document).ready(function() {

            $('#table-hide').hide();

        });

        $('#myTable').on('click','a[id="table-add"]', function(){
            var $curRow = $('#table-hide'),
                $newRow = $curRow.clone(true);
            console.log($newRow);
            $curRow.after($newRow).show();
            console.log('added'); 
            $.ajax({
                url: "<?php echo base_url('Supplies_controller/getCategory'); ?>",
                dataType: 'json',
                success: function(data) {
                    $(data).each(function(){
                        $("#category1").append($('<option>', {
                            value: this.id,
                            text: this.category,
                        }));
                    })
                },
                error: function(errorw) {
                    alert("hi");
                }
            });
        });

        $('#myTable').on('click', 'a[id="table-remove"]', function() {
        $(this).parents("tr").remove();

        });                                         
</script>

</body>
</html>



                                                     