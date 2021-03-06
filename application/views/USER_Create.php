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
            // hide the dropdown and textfield for items
            $('#iteminput_1').hide();
            $('#items_1').hide();

            //to populate the first category dropdown
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
                    alert("error");
                }
            });

            //to get what is the id of the element that fired an event
            $('#myTable').on('change', function(event){
                //alert(event.target.id);
                var id = event.target.id,
                    type = id.replace(/[0-9]/g, '');

                //if dropdown selected is category
                if(type === "category_"){
                    var category = $('#' + id +' :selected').val(),
                        numberId = id.match(/\d+/)[0],
                        divId = $('#iteminput_dropdown_textfield_' + numberId);
                
                    if((category == 2)||(category == 3)||(category == 5)||(category == 6)){
                        $('#iteminput_' + numberId).show();
                        $('#items_' +numberId).hide();

                        $('#items_' + numberId + '> option').remove(); // to clear items
                        // $('#items_' + numberId).remove();
                        // document.getElementById('unit_' + numberId).innerHTML = "";
                        // $('<input type="text" name="items['+ numberId +'][iteminput]" id="iteminput_'+ numberId +'" class="col-sm-11" placeholder="Enter item description"/>').appendTo(divId);
                    }
                    else{
                        $('#iteminput_' + numberId).hide();
                        $('#items_' + numberId).show();

                        document.getElementById('iteminput_' + numberId).value = null;
                        // $('#iteminput_' + numberId).remove();
                        // $('<select name="items['+ numberId +'][items]" id="items_'+ numberId +'" class="col-sm-11"></select>').appendTo(divId);
                        
                        $('#items_' + numberId + '> option').remove(); // to clear items

                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('Supplies_controller/getSuppliesWithSubcategory'); ?>",
                            data: { category:category },
                            dataType: 'json',
                            success: function(data) {
                                $('#items_' + numberId).append($('<option>', {
                                    value: 0,
                                    text: 'Select Item',
                                }));
                                $(data).each(function(){
                                    $('#items_' + numberId).append($('<option>', {
                                        value: this.item_id,
                                        text: this.item_description,
                                    }));
                                });
                            },
                            error: function(errorw) {
                                alert("error");
                            }
                        });
                    }
                }
                //if dropdown selected is item
                else if(type === "items_"){
                    //alert('items');
                    var supply = $('#' + id +' :selected').val(),
                    numberId = id.match(/\d+/)[0];

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('Supplies_controller/getSupplyDetails'); ?>",
                        data: { supply:supply },
                        dataType: 'json',
                        success: function(data) {
                            //alert(data);
                            $(data).each(function(){
                                var price = this.price;
                                //alert(price.toLocaleString('en-US', { style: 'currency', currency: 'USD' }));
                                document.getElementById('unit_' + numberId).innerHTML = this.unit;
                                document.getElementById('unitprice_' + numberId).value = price.toLocaleString();

                                //update subtotal when quantity is not empty
                                var quantity = $('#qty_' + numberId).val(),
                                price = document.getElementById('unitprice_' + numberId).value,
                                subtotal = 0;

                                if(quantity != ""){
                                    subtotal = quantity*price;
                                    document.getElementById('subtotal_' + numberId).innerHTML = subtotal.toLocaleString();
                                }
                            });
                        },
                        error: function(errorw) {
                            alert("error");
                        }
                    });        
                }
            });

            //calculate subtotal
            $('#myTable').on('focusout', function(event){
                var id = event.target.id,
                    numberId = id.match(/\d+/)[0],
                    type = id.replace(/[0-9]/g, '');

                if(type === "qty_"){
                    var quantity = $('#' + id).val(),
                        price = document.getElementById('unitprice_' + numberId).value,
                        subtotal = 0;

                    subtotal = quantity*price;
                    document.getElementById('subtotal_' + numberId).innerHTML = subtotal.toLocaleString();
                }
                else if(type === "unitprice_"){
                    var price = $('#' + id).val(),
                        quantity = document.getElementById('qty_' + numberId).value,
                        subtotal = 0;

                    subtotal = quantity*price;
                    //alert(price.toFixed(2));
                    //document.getElementById(id).value = price.toFixed(2);
                    document.getElementById('subtotal_' + numberId).innerHTML = subtotal.toLocaleString();
                }
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
                
                row.attr('id', 'row_' + id);
                row.find('#category_' + oldId).attr('id', 'category_' + id).attr('name', 'items[' + id + '][category]');
                row.find('#items_' + oldId).attr('id', 'items_' + id).attr('name', 'items[' + id + '][items]');
                row.find('#iteminput_' + oldId).attr('id', 'iteminput_' + id).attr('name', 'items[' + id + '][iteminput]');
                row.find('#unit_' + oldId).attr('id', 'unit_' + id);
                row.find('#qty_' + oldId).attr('id', 'qty_' + id).attr('name', 'items[' + id + '][qty]');
                row.find('#jan_' + oldId).attr('id', 'jan_' + id).attr('name', 'items[' + id + '][jan]');
                row.find('#feb_' + oldId).attr('id', 'feb_' + id).attr('name', 'items[' + id + '][feb]');
                row.find('#mar_' + oldId).attr('id', 'mar_' + id).attr('name', 'items[' + id + '][mar]');
                row.find('#apr_' + oldId).attr('id', 'apr_' + id).attr('name', 'items[' + id + '][apr]');
                row.find('#may_' + oldId).attr('id', 'may_' + id).attr('name', 'items[' + id + '][may]');
                row.find('#jun_' + oldId).attr('id', 'jun_' + id).attr('name', 'items[' + id + '][jun]');
                row.find('#jul_' + oldId).attr('id', 'jul_' + id).attr('name', 'items[' + id + '][jul]');
                row.find('#aug_' + oldId).attr('id', 'aug_' + id).attr('name', 'items[' + id + '][aug]');
                row.find('#sep_' + oldId).attr('id', 'sep_' + id).attr('name', 'items[' + id + '][sep]');
                row.find('#oct_' + oldId).attr('id', 'oct_' + id).attr('name', 'items[' + id + '][oct]');
                row.find('#nov_' + oldId).attr('id', 'nov_' + id).attr('name', 'items[' + id + '][nov]');
                row.find('#dec_' + oldId).attr('id', 'dec_' + id).attr('name', 'items[' + id + '][dec]');
                row.find('#unitprice_' + oldId).attr('id', 'unitprice_' + id).attr('name', 'items[' + id + '][unitprice]');
                row.find('#subtotal_' + oldId).attr('id', 'subtotal_' + id);
                row.find('#iteminput_dropdown_textfield_' + oldId).attr('id', 'iteminput_dropdown_textfield_' + id);
                $('#myTable').append(row);

                //clear cell elements
                $('#items_' + id + '> option').remove();
                // $('#items_' + id).append($('<option>', {
                //     value: 0,
                //     text: 'Select Item',
                // }));
                document.getElementById('iteminput_' + id).value = null;
                document.getElementById('unit_' + id).innerHTML = "";
                document.getElementById('qty_' + id).value = "";  
                document.getElementById('jan_' + id).value = "";  
                document.getElementById('feb_' + id).value = "";  
                document.getElementById('mar_' + id).value = "";  
                document.getElementById('apr_' + id).value = "";  
                document.getElementById('may_' + id).value = "";  
                document.getElementById('jun_' + id).value = "";  
                document.getElementById('jul_' + id).value = "";  
                document.getElementById('aug_' + id).value = "";  
                document.getElementById('sep_' + id).value = "";  
                document.getElementById('oct_' + id).value = "";  
                document.getElementById('nov_' + id).value = "";  
                document.getElementById('dec_' + id).value = "";                
                document.getElementById('unitprice_' + id).value = 0;
                document.getElementById('subtotal_' + id).innerHTML = "";

                $('#items_' + id).hide();
                $('#iteminput_' + id).hide();
                
                // $('#items_' + id).remove();
                // $('#iteminput_' + id).remove();
            }

            //submit the PPMP
            $('#submit_button').click(function(e){
                //e.preventDefault();
                var table = $("table tbody"),
                    data_array = [],
                    counter = 1,
                    counter_error = 0;

                table.find('tr').each(function (i) {
                    var $tds = $(this).find('td'),
                        category_dropdown = document.getElementById('category_' +counter),
                        category_id = category_dropdown.value;

                    //alert(counter_error);
                    if(category_id == "0"){
                        alert('All categories should be filled');
                        counter_error++;
                        counter++;
                    }
                    else if(category_id == "1" || category_id == "4"){
                        var item_dropdown = document.getElementById('items_' +counter),
                            item_id = item_dropdown.value,
                            item_description = $(item_dropdown).find(':selected').text(),
                            quantity = document.getElementById('qty_' + counter).value,
                            jan = document.getElementById('jan_' + counter).value,
                            feb = document.getElementById('feb_' + counter).value,
                            mar = document.getElementById('mar_' + counter).value,
                            apr = document.getElementById('apr_' + counter).value,
                            may = document.getElementById('may_' + counter).value,
                            jun = document.getElementById('jun_' + counter).value,
                            jul = document.getElementById('jul_' + counter).value,
                            aug = document.getElementById('aug_' + counter).value,
                            sep = document.getElementById('sep_' + counter).value,
                            oct = document.getElementById('oct_' + counter).value,
                            nov = document.getElementById('nov_' + counter).value,
                            dec = document.getElementById('dec_' + counter).value,
                            price = document.getElementById('unitprice_' + counter).value,
                            totalqty = 0;
                        
                        //alert(item_description);
                        if(quantity == ""){
                            quantity = 0;
                        }    
                        if(jan == ""){
                            jan = 0;
                        }
                        if(feb == ""){
                            feb = 0;
                        }
                        if(mar == ""){
                            mar = 0;
                        }
                        if(apr == ""){
                            apr = 0;
                        }
                        if(may == ""){
                            may = 0;
                        }
                        if(jun == ""){
                            jun = 0;
                        }
                        if(jul == ""){
                            jul = 0;
                        }
                        if(aug == ""){
                            aug = 0;
                        }
                        if(sep == ""){
                            sep = 0;
                        }
                        if(oct == ""){
                            oct = 0;
                        }
                        if(nov == ""){
                            nov = 0;
                        }
                        if(dec == ""){
                            dec = 0;
                        }

                        totalqty = parseInt(jan) + parseInt(feb) + parseInt(mar) + parseInt(apr) + parseInt(may) + parseInt(jun) + parseInt(jul) + 
                            parseInt(aug) + parseInt(sep) + parseInt(oct) + parseInt(nov) + parseInt(dec);

                        //alert(quantity);
                        if(item_id == "0"){
                            alert('Please fill-up all item specifications.');
                            counter_error++;
                        }
                        else if(quantity == "0"){
                            alert('Please specify the amount/quantity for all items');
                            counter_error++;
                        }
                        else if(totalqty != quantity){
                            alert('All unit quantities should be distributed properly.');
                            counter_error++;
                        }
                        else if(price == "0"){
                            alert('All items must have prices');
                            counter_error++;
                        }
                        counter++;
                    }
                    else{
                        var item_description = document.getElementById('iteminput_' + counter).value,
                            quantity = document.getElementById('qty_' + counter).value,
                            jan = document.getElementById('jan_' + counter).value,
                            feb = document.getElementById('feb_' + counter).value,
                            mar = document.getElementById('mar_' + counter).value,
                            apr = document.getElementById('apr_' + counter).value,
                            may = document.getElementById('may_' + counter).value,
                            jun = document.getElementById('jun_' + counter).value,
                            jul = document.getElementById('jul_' + counter).value,
                            aug = document.getElementById('aug_' + counter).value,
                            sep = document.getElementById('sep_' + counter).value,
                            oct = document.getElementById('oct_' + counter).value,
                            nov = document.getElementById('nov_' + counter).value,
                            dec = document.getElementById('dec_' + counter).value,
                            price = document.getElementById('unitprice_' + counter).value,
                            totalqty = 0;
                        
                        //alert(item_description);
                        if(quantity == ""){
                            quantity = 0;
                        }    
                        if(jan == ""){
                            jan = 0;
                        }
                        if(feb == ""){
                            feb = 0;
                        }
                        if(mar == ""){
                            mar = 0;
                        }
                        if(apr == ""){
                            apr = 0;
                        }
                        if(may == ""){
                            may = 0;
                        }
                        if(jun == ""){
                            jun = 0;
                        }
                        if(jul == ""){
                            jul = 0;
                        }
                        if(aug == ""){
                            aug = 0;
                        }
                        if(sep == ""){
                            sep = 0;
                        }
                        if(oct == ""){
                            oct = 0;
                        }
                        if(nov == ""){
                            nov = 0;
                        }
                        if(dec == ""){
                            dec = 0;
                        }

                        totalqty = parseInt(jan) + parseInt(feb) + parseInt(mar) + parseInt(apr) + parseInt(may) + parseInt(jun) + parseInt(jul) + 
                            parseInt(aug) + parseInt(sep) + parseInt(oct) + parseInt(nov) + parseInt(dec);

                        //alert(quantity);
                        if(item_description == ""){
                            alert('Please fill-up all item specifications.');
                            counter_error++;
                        }
                        else if(quantity == "0"){
                            alert('Please specify the amount/quantity for all items');
                            counter_error++;
                        }
                        else if(totalqty != quantity){
                            alert('All unit quantities should be distributed properly.');
                            counter_error++;
                        }
                        else if(price == "0"){
                            alert('All items must have prices');
                            counter_error++;
                        }
                        counter++;
                    }
                });
                if(counter_error == '0'){
                    return true;
                }
                else{
                    return false;
                }
            });
        }); 
    </script>

</head>
<body>
    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('PPMP_controller/submitPPMP'); ?>" enctype="multipart/form-data" data-parsley-validate="">
        <div class="container">
            <div class="col-md-12">
                <h3>Project Procurement Management Plan</h3>
                <hr />  
            </div>
            <div>
                <label class="col-md-2">End-User/Unit:</label>
                <div class="col-md-10 text-nowrap">
                    <?php
                        if(is_array($user_details) || is_object($user_details)){
                            foreach ($user_details as $office_name) {
                                echo'<input type="text" id="user_id" name="user_id" class="hidden" value="' . $office_name->user_id . '"/>
                                <p>' . $office_name->office_name . '</p>';
                            }
                        }
                    ?>
                </div>  
            </div>
            <div>
                <label class="col-md-2">Project/Title:</label>
                <div>
                    <input type="text" id="title" name="title" class="col-md-10" required/>
                </div>
            </div>
        </div>
        <br />
        <div  class="container table-responsive col-sm-12">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th class="text-nowrap text-center" rowspan="2">Category</th>
                        <th class="text-nowrap text-center col-sm-5" rowspan="2">Item/Specification</th>
                        <th class="text-nowrap text-center" rowspan="2">Qty</th>
                        <th class="text-nowrap text-center col-sm-1" rowspan="2">Unit</th>
                        <th class="text-nowrap text-center col-sm-1"rowspan="2">Unit Price</th>
                        <th class="text-nowrap text-center" colspan="12">Schedule/Milestone</th>
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
                            <div class="control-group">
                                <div class="controls">
                                    <select name="items[1][category]" id="category_1">
                                        <option value="0">Select Category</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td class="text-nowrap text-center"> 
                            <div class="control-group">
                                <div id="iteminput_dropdown_textfield_1" class="controls">
                                    <select name="items[1][items]" id="items_1" class="col-sm-11">
                                        <option value="0">Select Item</option>
                                    </select>
                                    <input type="text" name="items[1][iteminput]" id="iteminput_1" class="col-sm-11" placeholder="Enter item description" required />
                                </div>
                            </div>
                        </td>
                        <td class="text-nowrap text-center">    
                            <input type="number" name="items[1][qty]" id="qty_1" placeholder="0" min="0" value="0" class="td-width2" />
                        </td>
                        <td class="text-nowrap text-center" id="unit_1"></td>   
                        <td class="text-center milestone-table"> 
                            <input type="text" name="items[1][unitprice]" id="unitprice_1" value="0" required pattern="^[0-9]*\.[0-9]{2}$" />
                        </td>                     
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][jan]" id="jan_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][feb]" id="feb_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][mar]" id="mar_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][apr]" id="apr_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][may]" id="may_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][jun]" id="jun_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][jul]" id="jul_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][aug]" id="aug_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][sep]" id="sep_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table">    
                            <input type="number" name="items[1][oct]" id="oct_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="milestone-table milestone-table">    
                            <input type="number" name="items[1][nov]" id="nov_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="milestone-table milestone-table">    
                            <input type="number" name="items[1][dec]" id="dec_1" placeholder="0" min="0" value="0" class="td-width" required />
                        </td>
                        <td class="text-center milestone-table" name="subtotal_1" id="subtotal_1"> </td>
                        <td>
                            <a id="table-remove"><span class="table-remove glyphicon glyphicon-remove"></span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="container-fluid">
                <a id="table-add" style="margin-left:-7px"><span class="table-add glyphicon glyphicon-plus col-md-offset-12"></span></a>
                <button type="submit" id="submit_button" name="action" class="col-sm-1" data-toggle="modal" data-target="#submitModal">Submit</button>
            </div>
        </div>
    </form>
    <div class="modal fade" id="submitModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form enctype="multipart/form-data" method="POST" enctype="multipart/form-data" data-parsley-validate="">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="col-lg-12">
                            <input id="project_id_modal_approve" name="project_id" class="hidden"/>
                            <span class="text-center">You are about to submit this project. 
                            Are you sure that you don't want to add more items?</span>  
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm" name="action">Submit Now</button>  
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>



                                                     