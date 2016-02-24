<!DOCTYPE html>
<html>
      <head>
            <title>Create Project</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datepicker.css'); ?>">
            <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
            <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                $('.input-daterange').datepicker({
                    todayBtn: "linked",
                    format: "yyyy-mm-dd"
                });
                
                $.ajax({ 
                    url: "<?php echo base_url('Supplies_controller/getCategory'); ?>",
                    dataType: 'json',
                    success: function(data) {
                        $(data).each(function(){
                            $("#filter_2").append($('<option>', {
                                value: this.category,
                                text: this.category,
                            }));
                        })
                    },
                    error: function(errorw) {
                        alert("error");
                    }
                });

                $('#filter_1').change(function(){
                    var filter_1 = $('#filter_1').val();

                    $('#filter_2 > option').remove();
                    //alert(filter_1);
                    if(filter_1 == 1){

                        $.ajax({ 
                            url: "<?php echo base_url('Supplies_controller/getCategory'); ?>",
                            dataType: 'json',
                            success: function(data) {
                                $(data).each(function(){
                                    $("#filter_2").append($('<option>', {
                                        value: this.category,
                                        text: this.category,
                                    }));
                                })
                            },
                            error: function(errorw) {
                                alert("error");
                            }
                        });
                    }
                    else{
                        var item_id = 1;
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('Supplies_controller/getSupplyDescriptionFromPPMP'); ?>",
                            dataType: 'json',
                            success: function(data) {
                                $(data).each(function(){
                                    $('#filter_2').append($('<option>', {
                                        value: this.supply_description,
                                        text: this.supply_description,
                                    }));
                                });
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
            <div class="wrapper">
                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('PPMP_controller/consolidate'); ?>" enctype="multipart/form-data" data-parsley-validate>
                    <div class="container-fluid">
                        <br />
                        <p class="text-center">Technological Univesity of the Philippines</p>
                        <h6 class="text-center">Ayala blvd., Ermita, Manila</h6>
                        <br />
                        <h4 class="text-center"><b>Consolidation</b></h4>
                        <hr />
                        <div class="control-group" style="margin-left:100px">
                            <div class="controls col-md-2">
                                <select id="filter_1" name="filter_1" class="col-md-12">
                                    <option value="1">Category</option>
                                    <option value="2">Item</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div id="iteminput_dropdown_textfield_1" class="controls col-md-3">
                                <select id="filter_2" name="filter_2" class="inline col-md-12" style="margin-left:-15px">
                                </select>
                            </div>
                        </div>
                        <div class="input-daterange" id="datepicker">
                            <span class="add-on col-xs-1" style="vertical-align:top; height:27px">from</span>
                            <input id="from_date" name="from_date" type="text" class="input-xs col-xs-1 padding:0px" required />
                            <span class="add-on col-xs-1" style="vertical-align:top; height:27px">to</span>
                            <input id="to_date" name="to_date" type="text" class="input-xs col-xs-1 adding:0px" required />
                        </div> 
                        <button type="submit" id="consolidate" class="btn btn-default btn-sm col-sm-2" name="action" style="margin-left:15px; margin-top:-2px;">Consolidate</button>  
                    </div>
                </form>
                <br />
      </body>
</html>