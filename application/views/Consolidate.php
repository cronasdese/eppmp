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
                    format: "yyyy-dd-mm"
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
                <div class="container-fluid">
                    <br />
                    <p class="text-center">Technological Univesity of the Philippines</p>
                    <h6 class="text-center">Ayala blvd., Ermita, Manila</h6>
                    <br />
                    <h4 class="text-center"><b>Consolidation</b></h4>
                    <hr />
                </div>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-nowrap text-center" rowspan="2">ProjCode</th>
                            <th class="text-nowrap text-center" rowspan="2">Program/Project</th>
                            <th class="text-nowrap text-center" rowspan="2">Office/Unit</th>
                            <th class="text-nowrap text-center" rowspan="2">General Description</th>
                            <th class="text-nowrap text-center" rowspan="2">Methods</th>
                            <th class="text-center" colspan="12">Schedule/Milestones of Activity</th>
                            <th class="text-nowrap text-center" colspan="2">Source of funds</th>
                            <th class="text-center" rowspan="2">Aproved Budget Ceiling(ABC)</th>
                        </tr>
                        <tr>
                            <th class="th-size text-center">Jan</th>
                            <th class="th-size text-center">Feb</th>
                            <th class="th-size text-center">Mar</th>
                            <th class="th-size text-center">Apr</th>
                            <th class="th-size text-center">May</th>
                            <th class="th-size text-center">Jun</th>
                            <th class="th-size text-center">Jul</th>
                            <th class="th-size text-center">Aug</th>
                            <th class="th-size text-center">Sep</th>
                            <th class="th-size text-center">Oct</th>
                            <th class="th-size text-center">Nov</th>
                            <th class="th-size text-center">Dec</th>
                            <th class="thh-size text-center">F-000</th>
                            <th class="thh-size text-center">F-000</th>
                        </tr> 
                    </thead>
                    <tbody id="tablebody">
                        <?php
                            if(is_array($app_details) || is_object($app_details)){
                                foreach ($app_details as $app) {
                                    echo '
                                        <tr>
                                            <td class="text-nowrap">'. $consolidate->project_id .'</td>
                                            <td class="text-nowrap col-sm-6">'. $consolidate->project_title .'</td>
                                            <td class="text-nowrap text-center col-sm-1">'. $consolidate->office_name .'</td>
                                            <td class="text-nowrap text-center col-sm-2">'. $consolidate->category .'</td>
                                            <td class="text-nowrap text-center">Methods</td>
                                            <td class="text-nowrap th-size" id="jan_1">'. $consolidate->jan_qty .'</td>
                                            <td class="text-nowrap th-size" id="feb_1">'. $consolidate->feb_qty .'</td>
                                            <td class="text-nowrap th-size" id="mar_1">'. $consolidate->mar_qty .'</td>
                                            <td class="text-nowrap th-size" id="apr_1">'. $consolidate->apr_qty .'</td>
                                            <td class="text-nowrap th-size" id="may_1">'. $consolidate->may_qty .'</td>
                                            <td class="text-nowrap th-size" id="jun_1">'. $consolidate->jun_qty .'</td>
                                            <td class="text-nowrap th-size" id="jul_1">'. $consolidate->jul_qty .'</td>
                                            <td class="text-nowrap th-size" id="aug_1">'. $consolidate->aug_qty .'</td>
                                            <td class="text-nowrap th-size" id="sep_1">'. $consolidate->sep_qty .'</td>
                                            <td class="text-nowrap th-size" id="oct_1">'. $consolidate->oct_qty .'</td>
                                            <td class="text-nowrap th-size" id="nov_1">'. $consolidate->nov_qty .'</td>
                                            <td class="text-nowrap th-size" id="dec_1">'. $consolidate->dec_qty .'</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center col-sm-1">'. $consolidate->sum .'</td>
                                        </tr>
                                    ';
                                }
                            }
                            else{
                                foreach ($consolidate_details_item as $consolidate) {
                                    echo '
                                        <tr>
                                            <td class="text-nowrap">'. $consolidate->project_id .'</td>
                                            <td class="text-nowrap col-sm-6">'. $consolidate->project_title .'</td>
                                            <td class="text-nowrap text-center col-sm-1">'. $consolidate->office_name .'</td>
                                            <td class="text-nowrap text-center col-sm-2">'. $consolidate->supply_description .'</td>
                                            <td class="text-nowrap text-center">Methods</td>
                                            <td class="text-nowrap th-size" id="jan_1">'. $consolidate->jan_qty .'</td>
                                            <td class="text-nowrap th-size" id="feb_1">'. $consolidate->feb_qty .'</td>
                                            <td class="text-nowrap th-size" id="mar_1">'. $consolidate->mar_qty .'</td>
                                            <td class="text-nowrap th-size" id="apr_1">'. $consolidate->apr_qty .'</td>
                                            <td class="text-nowrap th-size" id="may_1">'. $consolidate->may_qty .'</td>
                                            <td class="text-nowrap th-size" id="jun_1">'. $consolidate->jun_qty .'</td>
                                            <td class="text-nowrap th-size" id="jul_1">'. $consolidate->jul_qty .'</td>
                                            <td class="text-nowrap th-size" id="aug_1">'. $consolidate->aug_qty .'</td>
                                            <td class="text-nowrap th-size" id="sep_1">'. $consolidate->sep_qty .'</td>
                                            <td class="text-nowrap th-size" id="oct_1">'. $consolidate->oct_qty .'</td>
                                            <td class="text-nowrap th-size" id="nov_1">'. $consolidate->nov_qty .'</td>
                                            <td class="text-nowrap th-size" id="dec_1">'. $consolidate->dec_qty .'</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center">0</td>
                                            <td class="text-center col-sm-1">'. $consolidate->sum .'</td>
                                        </tr>
                                    ';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <br />
             <div class="container-fluid">
                <table class="col-sm-12">
                    <thead>
                        <tr>
                            <th class="col-md-4">Prepared by:</th>
                            <th class="col-md-4">Recommending Approved:</th>
                            <th class="col-md-4">Approved by:</th>
                        </tr>    
                    </thead>
                    <tbody>
                        <tr>
                            <th>Empty</th>
                            <th>Empty</th>
                            <th>Empty</th>
                        </tr>
                         <tr>
                            <th>Position</th>
                            <th>Position</th>
                            <th>Position</th>
                        </tr>
                    </tbody>
                </table>  
            </div>
      </body>
</html>