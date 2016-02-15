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

</head>
<body>
<div class="container">
    <div class="container-fluid">
        <br />
        <p class="text-center">Technological Univesity of the Philippines</p>
        <h6 class="text-center">Ayala blvd., Ermita, Manila</h6>
        <h4 class="text-center"><b>Project Procurement Management Plan (PPMP)</b></h4>
         <div class="form-group">    
            <label class="control-label col-md-2">Office/Department: </label>
            <?php
                echo '<p>' . $project[0]->office_name . '</p>';
            ?>
            <label class="control-label col-md-2">Project/Title: </label>
            <?php
                echo '<p>' . $project[0]->title . '</p>';
            ?>
        </div>
    </div>
    
    <br />
    <div  class="container col-sm-12">
        <form enctype="multipart/form-data" data-parsley-validate="">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th class="text-nowrap text-center" rowspan="2">Code</th>
                        <th class="text-nowrap text-center" rowspan="2">Description</th>
                        <th class="text-nowrap text-center" rowspan="2">Quantity</th>
                        <th class="text-nowrap text-center" rowspan="2">Unit</th>
                        <th class="text-nowrap text-center" colspan="12">Schedule/Milestones of Activity</th>
                        <th class="text-nowrap text-center" rowspan="2">Unit Price</th>
                        <th class="text-nowrap text-center" rowspan="2">Subtotal</th>
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(is_array($project_details) || is_object($project_details)){
                            foreach($project_details as $project_details_data){
                                echo '<tr>
                                    <td class="text-nowrap">' . $project_details_data->category . '</td>
                                    <td class="text-nowrap">' . $project_details_data->supply_description . '</td>
                                    <td class="text-nowrap">' . $project_details_data->quantity . '</td>
                                    <td class="text-nowrap">' . $project_details_data->unit . '</td>
                                    <td class="text-nowrap">' . $project_details_data->jan_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->feb_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->mar_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->apr_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->may_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->jun_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->jul_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->aug_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->sep_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->oct_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->nov_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->dec_qty . '</td>
                                    <td class="text-nowrap">' . $project_details_data->price . '</td>
                                    <td class="text-nowrap">' . $project_details_data->quantity*$project_details_data->price . '</td>
                                </tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
     <div class="container-fluid">
        <div class="container-fluid">
            <table class="col-sm-12">
                <thead>
                    <tr>
                        <th class="col-md-3">Prepared by:</th>
                        <th class="col-md-3">Recommended by:</th>
                        <th class="col-md-3">Evaluated by:</th>
                        <th class="col-md-3">Approved by:</th>
                    </tr>    
                </thead>
                <tbody>
                    <tr>
                        <?php
                            echo '<th class="text-center">'. $first_approver[0]->name .'</th>';
                            echo '<th class="text-center">'. $second_approver[0]->name .'</th>';
                            echo '<th class="text-center">'. $third_approver[0]->name .'</th>';
                            echo '<th class="text-center">'. $fourth_approver[0]->name .'</th>';
                        ?>
                    </tr>
                     <tr>
                        <?php
                            echo '<th class="text-center">'. $first_approver[0]->position .'</th>';
                            echo '<th class="text-center">'. $second_approver[0]->position .'</th>';
                            echo '<th class="text-center">'. $third_approver[0]->position .'</th>';
                            echo '<th class="text-center">'. $fourth_approver[0]->position .'</th>';
                        ?>
                    </tr>
                </tbody>
            </table>  
        </div>  
    </div>
</div>    
</body>
</html>



                                                     