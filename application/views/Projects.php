<!DOCTYPE html>
<html>
    <head>
        <title>Projects</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
        <script src ="assets/js/jquery-2.1.4.min.js"></script>
        <script src ="assets/js/bootstrap.min.js"></script>        
    </head>
    <body>  
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <h3>Projects</h3>
                    <hr/>
                </div>
                <!--CONTENT x TABLE-->
                <div class="container">
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Pages_controller/searchProjects'); ?>" enctype="multipart/form-data" data-parsley-validate>
                                <div class="input-group input-group-sm">
                                    <input id="search" name="search" type="text" class="form-control" placeholder="Search" required>
                                    <span class="input-group-btn">
                                        <button id="search_button" name="action" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br />  
                    <hr />
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="id">PCode<span class="fa fa-sort"></span></th>
                                <th class="project">Project/Program<span class="fa fa-sort"></span></th>
                                <th class="office">Office<span class="fa fa-sort"></span></th>
                                <th class="date">Date Submitted<span class="fa fa-sort"></span></th>  
                                <th class="status" title="non-sortable">Status</th>
                                <th class="status" title="non-sortable"> </th>
                                <th class="status" title="non-sortable"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(($user_type_id[0] == 2) || ($user_type_id[0] == 3)){
                                    if(is_array($projects) || is_object($projects)){
                                        $row = 1;
                                        foreach ($projects as $project_data) {
                                            echo'
                                            <form id="openForm" name="openForm" enctype="multipart/form-data" method="POST" action="'. base_url('PPMP_controller/viewPPMP').'" enctype="multipart/form-data">
                                            <tr>
                                            <td>
                                                <input style="border:none" id="project_id'. $row .'" name="project_id" value="'. $project_data->project_id .'" readonly/>
                                            </td>
                                            <td><a href="#">'. $project_data->project_title .'</a></td>
                                            <td>'. $project_data->office_name .'</td>
                                            <td>'. $project_data->date_submitted .'</td>';
                                            if(($project_data->first_lvl_status == 1) && ($project_data->second_lvl_status == 1) && ($project_data->third_lvl_status == 1) && ($project_data->fourth_lvl_status == 1)){
                                                echo'<td><span class="label label-success">Aprroved</span></td>';
                                            }
                                            else if(($project_data->first_lvl_status == 2) || ($project_data->second_lvl_status == 2) || ($project_data->third_lvl_status == 2) || ($project_data->fourth_lvl_status == 2)){
                                                echo'<td><span class="label label-danger">Rejected</span></td>';
                                            }
                                            else{
                                                echo'<td><span class="label label-primary">Pending</span></td>';
                                            }
                                            echo '<td class="col-sm-1"><button id="open'. $row .'" class="btn btn-default btn-sm"> Open </button></td>
                                            <td class="col-sm-1"><button id="adopt'. $row .'" class="btn btn-default btn-sm"> Adopt </button></td>
                                            </tr>
                                            </form>';
                                            $row++;
                                        }
                                    }
                                }
                                else{
                                    if(is_array($projects) || is_object($projects)){
                                        $row = 1;
                                        foreach ($projects as $project_data) {
                                            echo'
                                            <form id="openForm" name="openForm" enctype="multipart/form-data" method="POST" action="'. base_url('PPMP_controller/viewPPMP').'" enctype="multipart/form-data">
                                            <tr>
                                            <td>
                                                <input style="border:none" id="project_id'. $row .'" name="project_id" value="'. $project_data->project_id .'" readonly/>
                                            </td>
                                            <td><a href="#">'. $project_data->project_title .'</a></td>
                                            <td>'. $project_data->office_name .'</td>
                                            <td>'. $project_data->date_submitted .'</td>';
                                            if(
                                                (($project_data->first_lvl_id == $user_details[0]->user_id) && ($project_data->first_lvl_status == 1)) ||
                                                (($project_data->second_lvl_id == $user_details[0]->user_id) && ($project_data->second_lvl_status == 1)) ||
                                                (($project_data->third_lvl_id == $user_details[0]->user_id) && ($project_data->third_lvl_status == 1)) ||
                                                (($project_data->fourth_lvl_id == $user_details[0]->user_id) && ($project_data->fourth_lvl_status == 1))
                                            ){
                                                echo'<td><span class="label label-success">Aprroved</span></td>';
                                            }
                                            else if(($project_data->first_lvl_status == 2) || ($project_data->second_lvl_status == 2) || ($project_data->third_lvl_status == 2) || ($project_data->fourth_lvl_status == 2)){
                                                echo'<td><span class="label label-danger">Rejected</span></td>';
                                            }
                                            else{
                                                echo'<td><span class="label label-primary">Pending</span></td>';
                                            }
                                            echo '<td class="col-sm-1"><button id="open'. $row .'" class="btn btn-default btn-sm"> Open </button></td>
                                            <td class="col-sm-1"><button id="adopt'. $row .'" class="btn btn-default btn-sm"> Adopt </button></td>
                                            </tr>
                                            </form>';
                                            $row++;
                                        }
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>     
    </body>
</html>