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
                        $("#category_1").append($('<option>', {
                            value: this.id,
                            text: this.category,
                        }));
                    })
                },
                error: function(errorw) {
                    alert("hi");
                }
            });

            $('#category_1').change(function () {
                var category = $('#category_1 :selected').val(); // <-- change this line
                $("#items_1 > option").remove(); // to clear items
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
                            $("#items_1").append($('<option>', {
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
            
            //for cloning row
            $("#table-add").click(function () {
                addAnotherRow();
            });

            function addAnotherRow() {
                var row = $("#myTable tr").last().clone();
                //row.id = row.id.slice(-1);
                var oldId = Number(row.attr('id').slice(-1));
                var id = 1 + oldId;
                
                
                row.attr('id', 'row_' + id );
                row.find('#category_' + oldId).attr('id', 'category_' + id);
                row.find('#items_' + oldId).attr('id', 'items_' + id);
                row.find('#unit_' + oldId).attr('id', 'unit_' + id);
                row.find('#qty_' + oldId).attr('id', 'qty_' + id);
                row.find('#jan_' + oldId).attr('id', 'jan_' + id);
                row.find('#feb_' + oldId).attr('id', 'feb_' + id);
                row.find('#mar_' + oldId).attr('id', 'mar_' + id);
                row.find('#apr_' + oldId).attr('id', 'apr_' + id);
                row.find('#may_' + oldId).attr('id', 'may_' + id);
                row.find('#jun_' + oldId).attr('id', 'jun_' + id);
                row.find('#jul_' + oldId).attr('id', 'jul_' + id);
                row.find('#aug_' + oldId).attr('id', 'aug_' + id);
                row.find('#sep_' + oldId).attr('id', 'sep_' + id);
                row.find('#oct_' + oldId).attr('id', 'oct_' + id);
                row.find('#nov_' + oldId).attr('id', 'nov_' + id);
                row.find('#dec_' + oldId).attr('id', 'dec_' + id);
                row.find('#unitprice_' + oldId).attr('id', 'unitprice_' + id);
                row.find('#subtotal_' + oldId).attr('id', 'subtotal_' + id);
                $('#myTable').append(row);
            }

            //delete row

            $("#table-remove").click(function () {
                $(this).parents("#myTable tr").remove();    
            }
            
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
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th class="text-nowrap text-center" rowspan="2">Category</th>
                    <th class="text-nowrap text-center col-sm-5" rowspan="2">Item/Specification</th>
                    <th class="text-nowrap text-center col-sm-1" rowspan="2">Unit</th>
                    <th class="text-nowrap text-center" rowspan="2">Qty</th>
                    <th class="text-nowrap text-center" colspan="12">Schedule/Milestone</th>
                    <th class="text-nowrap text-center col-sm-1"rowspan="2">Unit Price</th>
                    <th class="text-nowrap text-center col-sm-1" rowspan="2">Subtotal</th>
                    <th rowspan="2"> </th>
                </tr>
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
            </thead>
            <tbody>
                <tr id="row_1">
                    <td class="text-nowrap"> 
                        <form>
                            <div class="control-group">
                                <div class="controls">
                                    <select name="category" id="category_1">
                                        <option value="0">Select Category</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td class="text-nowrap text-center"> 
                        <div class="control-group">
                            <div class="controls">
                                <select name="items" id="items_1" class="col-sm-11">
                                    <option value="0">Select Item</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td class="text-nowrap text-center" id="unit_1">
                    </td>
                    <td class="text-nowrap text-center">    
                        <input type="number" id="qty_1" placeholder="0" min="0" class="td-width2" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="jan_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="feb_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="mar_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="apr_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="may_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="jun_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="jul_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="aug_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="sep_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table">    
                        <input type="number" id="oct_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="milestone-table milestone-table">    
                        <input type="number" id="nov_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="milestone-table milestone-table">    
                        <input type="number" id="dec_1" placeholder="0" min="0" class="td-width" />
                    </td>
                    <td class="text-center milestone-table" id="unitprice_1"> </td>
                    <td class="text-center milestone-table" id="subtotal_1"> </td>
                    <td>
                        <a id="table-remove"><span class="table-remove glyphicon glyphicon-remove" ></span></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container-fluid">
            <a id="table-add"><span class="table-add glyphicon glyphicon-plus col-md-offset-12"></span></a>
        </div>
    </form>
</div>
<script type="text/javascript">
    // var counter = 1;

    // $("#table-add").click(function() {
    //      counter++
    //     $('table').find("tr:eq(1)").clone().appendTo("table").find('select')
    //                .attr({
    //                    'name': 'category' + counter,
    //                    'id'   : 'category' + counter
    //                })
    //                .closest('td').next('td').find('select')
    //                .attr({
    //                    'name': 'supply' + counter,
    //                    'id'   : 'supply' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'unit' + counter,
    //                    'id'   : 'unit' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'qty' + counter,
    //                    'id'   : 'qty' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'jan' + counter,
    //                    'id'   : 'jan' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'feb' + counter,
    //                    'id'   : 'feb' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'mar' + counter,
    //                    'id'   : 'mar' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'apr' + counter,
    //                    'id'   : 'apr' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'may' + counter,
    //                    'id'   : 'may' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'jun' + counter,
    //                    'id'   : 'jun' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'jul' + counter,
    //                    'id'   : 'jul' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'aug' + counter,
    //                    'id'   : 'aug' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'sep' + counter,
    //                    'id'   : 'sep' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'oct' + counter,
    //                    'id'   : 'oct' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'nov' + counter,
    //                    'id'   : 'nov' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'dec' + counter,
    //                    'id'   : 'dec' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'unit_price' + counter,
    //                    'id'   : 'unit_price' + counter
    //                })
    //                .closest('td').next('td').find('input')
    //                .attr({
    //                    'name': 'subtotal' + counter,
    //                    'id'   : 'subtotal' + counter
    //                })
    // });
    //other
    // var $table = $('table');
    // var rowCount = 0;

    // var generateRow = function(indx){
        
    //     $table.append('
    //         <tr>
    //             <td class="text-nowrap">\
    //                 <form id="make_checkbox_select '+indx+'">\
    //                     <div class="control-group">\
    //                         <div class="controls">\
    //                             <select name="category '+indx+'" id="category '+indx+'" class="col-sm-12">\
    //                                 <option value="0">Select Category</option>\
    //                             </select>\
    //                         </div>\
    //                     </div>\
    //                 </form>\
    //             </td>\
                
    //             <td class="text-nowrap text-center">\
    //                 <div class="control-group">\
    //                     <div class="controls">\
    //                         <select  name="items '+indx+'" id="items '+indx+'" class="col-sm-11">\
    //                             <option value="0">Select Item</option>\
    //                         </select>\
    //                     </div>\
    //                 </div>\
    //             </td>\
                
    //             <td>'+indx+'</td>\

    //             <td class="text-nowrap text-center">\    
    //                 <input type="number" placeholder="0" min="0" class="td-width1" id="'+indx+'"/>\
    //             </td>\

    //             <td class="td-pad">\
    //                 <table class="milestone-table">\
    //                     <tr class="text-nowrap text-center">\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                         <td class="text-nowrap text-center">\
    //                             <input id="'+indx+'" type="number" placeholder="0" min="0" class="td-width" />\
    //                         </td>\
    //                     </tr>\
    //                 </table>\
    //             </td>\

    //             <td> '+indx+'</td>\
    //             <td> '+indx+'</td>\
    //             <td>\
    //                 <a id="table-remove '+indx+'"><span class="table-remove glyphicon glyphicon-remove" ></span></a>\
    //             </td>\
    //         /</tr> ');
    //     }

    //     var addRow = function(){
    //         generateRow(++rowCount);
    //     }

    //     addRow();

    //     $('#table-add').click(addRow);
        // $('#myTable').on('click','a[id="table-add"]', function(){
        //     addRow();
        // };
    </script>
</body>
</html>



                                                     