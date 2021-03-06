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
            //to populate the first category dropdown
            $('#iteminput').hide();
            $('#items_1').hide();

            $('#category_1').change(function(e){
            $comm = $("#category_1 option:selected").val(); 
            if(($comm == '2')||($comm == '3')||($comm == '5')||($comm == '6')){
               $('#iteminput').show();
               $('#items_1').hide();
            }
            else{
              $('#iteminput').hide();
              $('#items_1').show();
            }
          });
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

                if(type === "category_"){
                    var category = $('#' + id +' :selected').val(),
                    numberId = id.match(/\d+/)[0];
                
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
                else if(type === "items_"){
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
                                document.getElementById('unit_' + numberId).innerHTML = this.unit;
                                document.getElementById('unitprice_' + numberId).innerHTML = this.price;
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
                        price = document.getElementById('unitprice_' + numberId).innerText,
                        subtotal = 0;

                    subtotal = quantity*price;
                    document.getElementById('subtotal_' + numberId).innerHTML = subtotal.toFixed(2);
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

                //clear cell elements
                $('#items_' + id + '> option').remove();
                $('#items_' + id).append($('<option>', {
                    value: 0,
                    text: 'Select Item',
                }));
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
                document.getElementById('unitprice_' + id).innerHTML = "";
                document.getElementById('subtotal_' + id).innerHTML = "";
            }

            //submit the PPMP
            $('#submit_button').click(function(){
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
                            price = document.getElementById('unitprice_' + counter).innerText,
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
                            alert('All unit quantities should be distributed.');
                            counter_error++;
                        }
                        else{
                            //put the row element in an data_array
                            data_array.push({
                                supply_id : item_id,
                                supply_description : item_description,
                                quantity : quantity,
                                price : price,
                                jan : jan,
                                feb : feb,
                                mar : mar,
                                apr : apr,
                                may : may,
                                jun : jun,
                                jul : jul,
                                aug : aug,
                                sep : sep,
                                oct : oct,
                                nov : nov,
                                dec : dec
                            });
                        }
                        counter++;
                    }
                    else{
                        counter++;
                    }
                });

                if(counter_error > 0){
                    //do not insert to database
                }
                else{
                    //insert to database

                    //SOMETHING NEEDS TO BE FUCKING DONE OR JUST BRUTE PHP THIS FUCKING SHIT

                    // SSSSSS  HH  HH  II  TTTTTTTT
                    // SS      HH  HH  II     TT
                    // SSSSSS  HHHHHH  II     TT
                    //     SS  HH  HH  II     TT
                    // SSSSSS  HH  HH  II     TT

                    alert(JSON.stringify(data_array));

                    //to stringify the somethings
                    data_array = JSON.stringify(data_array);

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('PPMP_controller/submitPPMP'); ?>",
                        data: { data_array : data_array },
                        dataType: 'json',
                        success: function(data) {
                            alert('PPMP submission success!');
                        },
                        error: function(errorw) {
                            alert("error");
                        }
                    });         
                }
            });
        }); 
    </script>

</head>
<body>
    <!--form enctype="multipart/form-data" method="POST" action="<?php echo base_url('PPMP_controller/submitPPMP'); ?>" enctype="multipart/form-data" data-parsley-validate=""-->
        <div class="container">
            <div class="col-md-12">
                <h3>Project Procurement Management Plan</h3>
                <hr />  
            </div>
            <div>
                <label class="col-md-2">End-User/Unit:</label>
                <div class="col-md-10 text-nowrap">
                    <input type="text" class="form-control input-sm" placeholder="User's office from db">
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
                                    <select name="category" id="category_1">
                                        <option value="0">Select Category</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td class="text-nowrap text-center"> 
                            <div class="control-group">
                                <div class="controls">
                                    <select name="items" id="items_1" class="col-sm-11">
                                        <option value="0">Select Item</option>
                                    </select>
                                    <input type="text" id="iteminput" class="col-sm-11" placeholder="Enter item description"/>
                                </div>
                            </div>
                        </td>
                        <td class="text-nowrap text-center">    
                            <input type="number" id="qty_1" placeholder="0" min="0" class="td-width2" />
                        </td>
                        <td class="text-nowrap text-center" id="unit_1"></td>   
                        <td class="text-center milestone-table" > 
                                <input type="text" id="unitprice_1"/>
                            </div>
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
            <button type="submit" id="submit_button" name="action">Submit</button>
        </div>
    <!--/form-->
</body>
</html>



                                                     