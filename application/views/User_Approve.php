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
                    <table class="table table-striped table-hover">
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
                            <tr>
                                <td>Empty</td>
                                <td>Empty</a></td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td><button class="btn btn-primary btn-sm col-sm-12">Open</button></td>
                                <td><button class="btn btn-success btn-sm col-sm-9">Approve</button></td>
                                <td><button type="button" class="btn btn-danger btn-sm col-sm-10" data-toggle="modal" data-target="#rejectModal">Reject</button></td>
                                   <!--REJECT BUTTON MODAL-->
                                    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title">Reject Project</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12">
                                                        <textarea class="form-control" rows="3" id="textArea" placeholder="Write note here..."></textarea>
                                                        <span class="help-block">This will let the user know why the project was rejected.</span>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary">Send back</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </tr>
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
        </div>     
    </body>
</html>