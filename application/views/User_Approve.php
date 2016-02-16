<!DOCTYPE html>
<html>
    <head>
        <title>Approve Module</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
        <link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
        <script src ="assets/js/jquery-2.1.4.min.js"></script>
        <script src ="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                // $('#projectTable tr').click(function(e) {
                //     var id = event.target.id,
                //         type = id.replace(/[0-9]/g, ''),
                //         numberId = id.match(/\d+/)[0],
                //         projectId = document.getElementById('project_id' + numberId).value;

                //     if(type == 'reject'){
                //         document.getElementById('project_id_modal_reject').value = projectId;
                //         return true;
                //     }
                //     else if(type == 'approve'){
                //         document.getElementById('project_id_modal_approve').value = projectId;
                //         return true;
                //     }
                // });
            });
        </script>        
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
                    <!--div class="row">
                        <div class="form-group col-sm-3">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </div>
                    </div-->
                    <br />
                    <table id="projectTable" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="id">Project Code<span class="fa fa-sort"></span></th>
                                <th class="project col-sm-3">Project/Program<span class="fa fa-sort"></span></th>
                                <th class="office">Office<span class="fa fa-sort"></span></th>
                                <th class="date">Date Submitted<span class="fa fa-sort"></span></th>
                                <th class="status">Estimated Budget<span class="fa fa-sort"></span></th>    
                                <th class="status" title="non-sortable"> </th>
                                <th class="status" title="non-sortable"> </th>
                                <th class="status" title="non-sortable"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(is_array($projects) || is_object($projects)){
                                    $row = 1;
                                    foreach ($projects as $project_data) {
                                        if((($project_data->first_lvl_id == $user_id) && ($project_data->first_lvl_status == '0')) || (($project_data->second_lvl_id == $user_id) && ($project_data->first_lvl_status == '1') && ($project_data->second_lvl_status == '0')) || (($project_data->third_lvl_id == $user_id) && ($project_data->second_lvl_status == '1') && ($project_data->third_lvl_status == '0')) || (($project_data->fourth_lvl_id == $user_id) && ($project_data->third_lvl_status == '1') && ($project_data->fourth_lvl_status == '0'))){
                                            echo '<form id="openForm" name="openForm" enctype="multipart/form-data" method="POST" action="'. base_url('PPMP_controller/viewPPMP').'" enctype="multipart/form-data">
                                                <tr id="row'. $row .'"">
                                                <td>
                                                    <input id="project_id'. $row .'" name="project_id" value="'. $project_data->project_id .'" readonly/>
                                                </td>
                                                <td>'. $project_data->project_title .'</td>
                                                <td>'. $project_data->office_name .'</td>
                                                <td>'. $project_data->date_submitted .'</td>
                                                <td>'. $project_data->estimated_budget .'</td>
                                                <td><button id="open'. $row .'" class="btn btn-primary btn-sm col-sm-12">Open</button></td>
                                                <td><button id="approve'. $row .'" class="btn btn-success btn-sm col-sm-9" data-toggle="modal" data-target="#approveModal">Approve</button></td>
                                                <td><button id="reject'. $row .'" type="button" class="btn btn-danger btn-sm col-sm-10" data-toggle="modal" data-target="#rejectModal">Reject</button></td>
                                                </tr>
                                            </form>';
                                        }
                                        $row++;
                                    }
                                }
                            ?>
                            <!--tr>
                                <td>Empty</td>
                                <td>Empty</a></td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td><button class="btn btn-primary btn-sm col-sm-12">Open</button></td>
                                <td><button class="btn btn-success btn-sm col-sm-9">Approve</button></td>
                                <td><button type="button" class="btn btn-danger btn-sm col-sm-10" data-toggle="modal" data-target="#rejectModal">Reject</button></td>
                            </tr-->
                        </tbody>
                        <!--tfoot>
                            <tr>
                                <td colspan="9">
                                    <div class="text-center">
                                        <ul class="pager">
                                          <li><a href="#">Previous</a></li>
                                          <li><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot-->
                    </table>
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
                                <div class="col-lg-12">
                                    <label>Project ID:</label>
                                    <input id="project_id_modal_reject" name="project_id" readonly />
                                    <br/><br/>
                                    <textarea class="form-control" rows="3" id="textArea" name="reason_for_rejection" placeholder="Write note here..." required=""></textarea>
                                    <span class="help-block">This will let the user know why the project was rejected.</span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="action">Send back</button>
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
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Approve Project</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <label>Project ID:</label>
                                    <input id="project_id_modal_approve" name="project_id" readonly />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="action">Approve</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>     
    </body>
</html>