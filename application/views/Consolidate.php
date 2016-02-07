<!DOCTYPE html>
<html>
      <head>
            <title>Create Project</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
            <link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
            <link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
            <script src ="assets/js/jquery-2.1.4.min.js"></script>
            <script src ="assets/js/bootstrap.min.js"></script>

      </head>
      <body class="createstyle">
            <!-- WHOLE NAVBAR -->
            <div>
                  <nav class="navbar  navbar-default">
                        <div class="container">

                              <!-- NAVBAR HEADER LEFT -->
                        <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">E-PPMP</a>
                        </div>

                        <!-- NAVBAR HEADER RIGHT -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Notifications <span class="caret"></span></a>
                                          <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                          </ul>
                                    </li>
                                    <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sammera Alim <span class="caret"></span></a>
                                          <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Profile</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Logout</a></li>
                                          </ul>
                                    </li>
                                    </ul>
                            </div>
                        </div>
                  </nav>
            </div>
            <!-- Sidebar -->
            <div id="wrapper" class="active">
     
            <!-- Sidebar -->
                <div id="sidebar-wrapper">
                      <ul id="sidebar_menu" class="sidebar-nav">
                          <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
                      </ul>
                      <ul class="sidebar-nav" id="sidebar">     
                          <li><a href="#">Home<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">Create <span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">Projects<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">Drafts<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">History<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                        <!--SPACE DAPAT TO OR DIVIDER-->
                          <li><a href="#">Approve PPMP<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                      </ul>
                </div>
                <script type="text/javascript">
                        $("#menu-toggle").click(function(e) {
                          e.preventDefault();
                          $("#wrapper").toggleClass("active");
                              });
                        });
                  </script>
                
            <!-- Page content -->
                    <div id="page-content-wrapper">
                    <!-- Keep all page content within the page-content inset div! -->
                        <div class="page-content inset">
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-12">
                                        <h3>Consolidation</h3>
                                        <hr/>
                                    </div>
                                    <!--CONTENT x TABLE-->
                                    <div class="container">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="col-xs-1">ProjectID</th>
                                                    <th>Program/Project</th>
                                                    <th class="col-xs-1">Office/Unit</th>
                                                    <th class="col-xs-1">General Description</th>
                                                    <th class="col-xs-1">Methods</th>
                                                    <th> Schedule/Milestone
                                                        <table class="milestone-table"> 
                                                            <tr>
                                                                <td>Jan</td>
                                                                <td>Feb</td>
                                                                <td>Mar</td>
                                                                <td>Apr</td>
                                                                <td>May</td>
                                                                <td>Jun</td>
                                                                <td>Jul</td>
                                                                <td>Aug</td>
                                                                <td>Sep</td>
                                                                <td>Oct</td>
                                                                <td>Nov</td>
                                                                <td>Dec</td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <th class="col-xs-1">Source of funds</th>
                                                    <th class="col-xs-1">Approved Budget Ceiling (ABC)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Empty</td>
                                                    <td>Empty</td>
                                                    <td>Empty</td>
                                                    <td>Empty</td>
                                                    <td>Empty</td>
                                                    <td>
                                                        <!-- THIS IS WHERE I CAN'T GET IT RIGHT -->
                                                        <table class="milestone-table">
                                                            <tr>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td> 3</td>
                                                            <td> 4</td>
                                                            <td> 5</td>
                                                            <td> 6</td>
                                                            <td> 7</td>
                                                            <td> 8</td>
                                                            <td> 9</td>
                                                            <td> 10</td>
                                                            <td> 11</td>
                                                            <td> 12</td>
                                                            </tr>
                                                        </table>    
                                                    </td>
                                                    <td>Empty</td>
                                                    <td>Empty</td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="container">
                                        <div class="form-group">    
                                            <label class="control-label col-md-2">Prepared by: </label>
                                            <p> Insert</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Recommending Approved: </label>
                                            <p> Insert</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-2">Approved by: </label>
                                            <p> Insert</p>
                                        </div>   
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
      </body>
</html>