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
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-7">
                            <select class="form-control input-sm pull-right">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <br />  
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="id">PCode<span class="fa fa-sort"></span></th>
                                <th class="project">Project/Program<span class="fa fa-sort"></span></th>
                                <th class="office">Office<span class="fa fa-sort"></span></th>
                                <th class="date">Date Submitted<span class="fa fa-sort"></span></th>
                                <th class="status">Estimated Budget<span class="fa fa-sort"></span></th>    
                                <th class="status" title="non-sortable">Status</th>
                                <th class="status" title="non-sortable"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Empty</td>
                                <td><a href="#">Empty</a></td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td><span class="label label-success">Aprroved</span></td>
                                <td><button class="btn btn-default btn-sm">Open</button></td>
                            </tr>
                            <tr>
                                <td>Empty</td>
                                <td><a href="#">Empty</a></td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td><span class="label label-primary">Waiting</span></td>
                                <td><button class="btn btn-default btn-sm">Open</button></td>
                            </tr>
                            <tr>
                                <td>Empty</td>
                                <td><a href="#">Empty</a></td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td>Empty</td>
                                <td><span class="label label-danger">Rejected</span></td>
                                <td><button class="btn btn-default btn-sm">Open</button></td>
                            </tr>
                        </tbody>
                        <tfoot>
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
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>     
    </body>
</html>