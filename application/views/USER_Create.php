<!DOCTYPE html>
<html>
      <head>
            <title>Create Project</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
            <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $.ajax({
                        url: "<?php echo base_url('Supplies_controller/getCategory'); ?>",
                        dataType: 'json',
                        success: function(data) {
                            $(data).each(function(){
                                $("#category").append($('<option>', {
                                    value: this.id,
                                    text: this.category,
                                }));
                            })
                        },
                        error: function(errorw) {
                            alert("hi");
                        }
                    });

                    $('#category').change(function () {
                        var category = $('#category :selected').val(); // <-- change this line
                        $("#items > option").remove(); // to clear items
                        //alert(category);
                        //console.log(category);

                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('Supplies_controller/getSuppliesWithSubcategory'); ?>",
                            data: { category:category },
                            dataType: 'json',
                            success: function(data) {
                                //console.log(data);
                                //alert(data);
                                $(data).each(function(){
                                    $('#items').append($('<option class="dropdown-header"', {
                                        text:this.subcategory,
                                    }));
                                    $("#items").append($('<option>', {
                                        value: this.item_id,
                                        text: this.item_description,
                                    }));
                                })
                            },
                            error: function(errorw) {
                                alert("hi");
                            }
                        });
                    });
                });
            </script>
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
                  </script>
                
            <!-- Page content -->
                  <div id="page-content-wrapper">
                    <!-- Keep all page content within the page-content inset div! -->
                        <div class="page-content inset">
                              <div class="row">
                                    <div class="container">
                                          <div class="col-md-12">
                                                <h3>Project Procurement Management Plan</h3>
                                                <hr/>
                                          </div>
                                          <!--OFFICE/UNIT & DATE ROW-->
                                          <div class="container" id="createspace">
                                                <label for="select" class="col-md-2 control-label text-nowrap">Office/Unit: </label>
                                                      <div class="col-sm-3">
                                                                  <input type="text" class="form-control input-sm" placeholder="User's office from db">
                                                      </div>
                                          </div>
                                          <!--OFFICE/UNIT & DATE ROW-->
                                          <div class="container" id="createspace">
                                                <label for="select" class="col-md-2 control-label text-nowrap">Date of Implementation: </label>
                                                      <div class="col-sm-3">
                                                                  <input type="text" class="form-control input-sm" placeholder="Enter date of implememtation">
                                                      </div>
                                          </div>
                                          <!--PRJECT TITLE ROW--> 
                                          <div class="container">
                                                <label for="select" class="col-md-2 control-label text-nowrap">Project Name/Title: </label>
                                                      <div class="col-sm-6">
                                                                  <input type="text" class="form-control input-sm" placeholder="Enter project name/title">
                                                      </div>
                                          </div>
                                          <!--PRJECT CATEGORY-->
                                          <br /> 
                                          <div class="container">
                                        

                                          <!--TABLE--> 
                                          <br />
                                          <div class="container">     
                                                <div class="tab-pane active in" id="services">
                                                        <div class="row ">       
                                                            <div id="table" class="table-editable tablesize">
                                                                <span class="table-add glyphicon glyphicon-plus"></span>
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>Category</th>
                                                                            <th>Item/Specification</th>
                                                                            <th>Unit</th>
                                                                            <th>Quantity</th>
                                                                            <th>Schedule/Milestone
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
                                                                            <th>Unit Price</th>
                                                                            <th>Subtotal</th>
                                                                            <th> </th>
                                                                            <th> </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> 
                                                                            	<form id="make_checkbox_select">
						                                                      		<div class="control-group">
																				        <div class="controls">
																				          <select name="category" id="category">
                                                                                            <option value="0">Select Category</option>
																				          </select>
																				        </div>
																			      	</div>
																			    </form> 	
                                                                            </td>
                                                                            <td>
                                                                                <div class="control-group">
                                                                                    <div class="controls">
                                                                                        <select  name="items" id="items">
                                                                                            <option value="0">Select Item</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td contenteditable="false">Empty</td>
                                                                            <td contenteditable="true">0</td>
                                                                            <td>
                                                                                <table class="milestone-table">
                                                                                    <tr>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                    </tr>
                                                                                </table>    
                                                                            </td>
                                                                            <td contenteditable="false">Empty</td>
                                                                            <td contenteditable="false">Empty</td>
                                                                            <td>
                                                                                <span class="table-remove glyphicon glyphicon-remove"></span>
                                                                            </td>
                                                                        </tr>
                                                                        <!-- This is our clonable table line -->
                                                                        <tr class="hide">
                                                                          	<td contenteditable="false"></td>
                                                                            <td>
                                                                                <div class="control-group">
                                                                                    <div class="controls">
                                                                                        <select  name="items" id="items">
                                                                                            <option value="0">Select Item</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>     
                                                                            </td>
                                                                            <td contenteditable="false">Empty</td>
                                                                            <td contenteditable="true">0</td>
                                                                            <td>
                                                                                <table class="milestone-table">
                                                                                    <tr>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                        <td contenteditable="true">0</td>
                                                                                    </tr>
                                                                                </table>    
                                                                            </td>
                                                                            <td contenteditable="false">Empty</td>
                                                                            <td contenteditable="false">Empty</td>
                                                                            <td>
                                                                                <span class="table-remove glyphicon glyphicon-remove"></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>      
                                                                                       
                                                    </div>
	                                                <div class="tab-pane fade" id="supplies">
	                                                                                          
	                                                </div>
	                                                <div class="tab-pane fade" id="equipment">
	                                                                                          
	                                                </div>
	                                                <div class="tab-pane fade" id="other">
                                                                                          
                                                    </div>
                                                </div>
                                          </div>        

                                    <br />
                                    <br />
                                    <br />      
                                    <button id="export-btn" class="btn btn-sm btn-default col-sm-2 col-sm-offset-3">Submit</button>
                                    <button id="export-btn" class="btn btn-sm btn-default col-sm-2">Save to drafts</button> 
                                    <button id="export-btn" class="btn btn-sm btn-default col-sm-2">Clear</button>
                                    <p id="export"></p>      

                              </div>
                        </div>
                  </div> 
          </div>                                                              

                                                              



      </body>
</html>
                                                      <script type="text/javascript">
                                                            var $TABLE = $('#table');
                                                            var $BTN = $('#export-btn');
                                                            var $EXPORT = $('#export');

                                                            $('.table-add').click(function () {
                                                              var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
                                                              $TABLE.find('table').append($clone);
                                                            });

                                                            $('.table-remove').click(function () {
                                                              $(this).parents('tr').detach();
                                                            });

                                                            // A few jQuery helpers for exporting only
                                                            jQuery.fn.pop = [].pop;
                                                            jQuery.fn.shift = [].shift;

                                                            $BTN.click(function () {
                                                              var $rows = $TABLE.find('tr:not(:hidden)');
                                                              var headers = [];
                                                              var data = [];
                                                              
                                                              // Get the headers (add special header logic here)
                                                              $($rows.shift()).find('th:not(:empty)').each(function () {
                                                                headers.push($(this).text().toLowerCase());
                                                              });
                                                              
                                                              // Turn all existing rows into a loopable array
                                                              $rows.each(function () {
                                                                var $td = $(this).find('td');
                                                                var h = {};
                                                                
                                                                // Use the headers from earlier to name our hash keys
                                                                headers.forEach(function (header, i) {
                                                                  h[header] = $td.eq(i).text();   
                                                                });
                                                                
                                                                data.push(h);
                                                              });
                                                              
                                                              // Output the result
                                                              $EXPORT.text(JSON.stringify(data));
                                                            });
                                                      </script>