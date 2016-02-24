<!DOCTYPE html>
<html>
<head>
    <title>PPMP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
    <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
    <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#approve').click(function(e) {
                var projectId = document.getElementById('project_id').value;
                //alert(projectId);
                document.getElementById('project_id_modal_approve').value = projectId;
            });
            $('#reject').click(function(e) {
                var projectId = document.getElementById('project_id').value;
                //alert(projectId);
                document.getElementById('project_id_modal_reject').value = projectId;
            });
        });
    </script>
</head>
<body>
<div class="container">
    <br/>
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Note!!!</h3>
        </div>
        <div class="panel-body">
            Inside note here
        </div>
    </div>              
</div>
<div class="container">
    <?php
        if($project[0]->first_lvl_status == 1 && $project[0]->second_lvl_status == 1 && $project[0]->third_lvl_status == 1 && $project[0]->fourth_lvl_status == 1){
            echo '
                <form enctype="multipart/form-data" method="POST" action="'. base_url('PPMP_controller/generatePurchaseOrder') .'" enctype="multipart/form-data">
                    <div class="row">
                        <input id="project_id" name="project_id" class="hidden" value="'. $project[0]->project_id .'"/>
                        <select id="month" name="month" class="col-md-offset-9">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                        <button type="submit">Generate PR</button>
                    </div>
                </form>';
        }
    ?>
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
                echo '<input id="project_id" name="project_id" class="hidden" value="'. $project[0]->project_id .'"/>';
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
                                    <td class="text-nowrap">' . number_format($project_details_data->price, 2, '.', ',') . '</td>
                                    <td class="text-nowrap">' . number_format($project_details_data->quantity*$project_details_data->price, 2, '.', ',') . '</td>
                                </tr>';
                            }
                        }
                    ?>
                </tbody>
                <tfoot>
                        <tr>
                            <th class="text-nowrap text-center" colspan="16" rowspan="2">Estimated Total Budget: </th>
                            <?php echo '<th class="text-nowrap text-center" colspan="2" rowspan="2">'. number_format($project[0]->estimated_budget, 2, '.', ',') .'</th>'; ?>
                        </tr>
                </tfoot>
            </table>
        </form>
    </div>
     <div class="container-fluid">
        <div class="container-fluid">
            <table class="col-sm-12">
                <thead>
                    <tr>
                        <?php
                            //first_lvl_status
                            if($project[0]->first_lvl_status == 1){
                                echo '<th class="col-md-3">Prepared by: <span class="glyphicon glyphicon-ok okcolor"></span></th>';
                            }
                            else if($project[0]->first_lvl_status == 2){
                                echo '<th class="col-md-3">Prepared by: <span class="glyphicon glyphicon-remove removecolor"></span></th>';
                            }
                            else{
                                echo '<th class="col-md-3">Prepared by: </th>';
                            }

                            //second_lvl_status
                            if($project[0]->second_lvl_status == 1){
                                echo '<th class="col-md-3">Recommended by: <span class="glyphicon glyphicon-ok okcolor"></span></th>';
                            }
                            else if($project[0]->second_lvl_status == 2){
                                echo '<th class="col-md-3">Recommended by: <span class="glyphicon glyphicon-remove removecolor"></span></th>';
                            }
                            else{
                                echo '<th class="col-md-3">Recommended by: </th>';
                            }

                            //third_lvl_status
                            if($project[0]->third_lvl_status == 1){
                                echo '<th class="col-md-3">Evaluated by: <span class="glyphicon glyphicon-ok okcolor"></span></th>';
                            }
                            else if($project[0]->third_lvl_status == 2){
                                echo '<th class="col-md-3">Evaluated by: <span class="glyphicon glyphicon-remove removecolor"></span></th>';
                            }
                            else{
                                echo '<th class="col-md-3">Evaluated by: </th>';
                            }

                            //fourth_lvl_status
                            if($project[0]->fourth_lvl_status == 1){
                                echo '<th class="col-md-3">Approved by: <span class="glyphicon glyphicon-ok okcolor"></span></th>';
                            }
                            else if($project[0]->fourth_lvl_status == 2){
                                echo '<th class="col-md-3">Approved by: <span class="glyphicon glyphicon-remove removecolor"></span></th>';
                            }
                            else{
                                echo '<th class="col-md-3">Approved by: </th>';
                            }
                        ?>
                    </tr>    
                </thead>
                <tbody>
                    <tr>
                       <?php
                            echo '<th class="col-md-3">'. $first_approver[0]->name .'</th>';
                            echo '<th class="col-md-3">'. $second_approver[0]->name .'</th>';
                            echo '<th class="col-md-3">'. $third_approver[0]->name .'</th>';
                            echo '<th class="col-md-3">'. $fourth_approver[0]->name .'</th>';
                        ?> 
                    </tr>
                     <tr>
                       <?php
                            echo '<th class="col-md-3">'. $first_approver[0]->position .'</th>';
                            echo '<th class="col-md-3">'. $second_approver[0]->position .'</th>';
                            echo '<th class="col-md-3">'. $third_approver[0]->position .'</th>';
                            echo '<th class="col-md-3">'. $fourth_approver[0]->position .'</th>';
                        ?> 
                    </tr>

                   <?php
                        if(
                            ($user_type_id == 4) && 
                            (
                                ($project[0]->first_lvl_status != 2) && 
                                ($project[0]->second_lvl_status != 2) && 
                                ($project[0]->third_lvl_status != 2) && 
                                ($project[0]->fourth_lvl_status != 2)
                            ) &&
                            (
                                (($first_approver[0]->user_id == $user_details[0]->user_id) && ($project[0]->first_lvl_status == 0)) ||
                                (($second_approver[0]->user_id == $user_details[0]->user_id) && ($project[0]->second_lvl_status == 0) && ($project[0]->first_lvl_status == 1)) ||
                                (($third_approver[0]->user_id == $user_details[0]->user_id) && ($project[0]->third_lvl_status == 0) && ($project[0]->second_lvl_status == 1)) ||
                                (($fourth_approver[0]->user_id == $user_details[0]->user_id) && ($project[0]->fourth_lvl_status == 0) && ($project[0]->third_lvl_status == 1))
                            )
                        ){
                            echo '<tr>
                                <td colspan="2"><button id="approve" class="btn btn-success btn-sm col-sm-12" data-toggle="modal" data-target="#approveModal">Approve</button></td>
                                <td colspan="2"><button id="reject" class="btn btn-danger btn-sm col-sm-12" data-toggle="modal" data-target="#rejectModal">Reject</button></td></td>
                            </tr>';   
                        }
                    ?>
                </tbody>
            </table>  
        </div>  
    </div>
</div>
<!--REJECT BUTTON MODAL-->
<div class="modal fade" id="rejectModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('PPMP_controller/rejectPPMP'); ?>" enctype="multipart/form-data" data-parsley-validate="">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Reject Project</h4>
                </div>
                <div class="modal-body">
                        <input id="project_id_modal_reject" name="project_id" class="hidden" />
                        <textarea class="form-control" rows="3" id="textArea" name="reason_for_rejection" placeholder="Write note here..." required=""></textarea>
                        <span class="help-block">This will let the user know why the project was rejected.</span>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" name="action">Send back</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--APPROVE BUTTON MODAL-->
<div class="modal fade" id="approveModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('PPMP_controller/approvePPMP'); ?>" enctype="multipart/form-data" data-parsley-validate="">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-lg-12">
                        <input id="project_id_modal_approve" name="project_id" class="hidden"/>
                        <span class="text-center">Are you sure you want to approve this project?</span>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="action">Approve</button>  
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>    
</body>
</html>



                                                     