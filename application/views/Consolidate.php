<!DOCTYPE html>
<html>
      <head>
            <title>Create Project</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datepicker.css'); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datepicker.css'); ?>">
            <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
            <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('.input-daterange').datepicker({
                    todayBtn: "linked"
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
                    <div class="control-group" style="margin-left:100px">
                        <div class="controls col-md-2">
                            <select id="category_1" class="col-md-12">
                                <option value="0">Select Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div id="iteminput_dropdown_textfield_1" class="controls col-md-3">
                            <select id="items_1" class="inline col-md-12" style="margin-left:-15px">
                                <option value="0">Select Item</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-daterange" id="datepicker">
                        <span class="add-on col-xs-1" style="vertical-align:top; height:27px">from</span>
                        <input type="text" class="input-xs col-xs-1 padding:0px" name="start" />
                        <span class="add-on col-xs-1" style="vertical-align:top; height:27px">to</span>
                        <input type="text" class="input-xs col-xs-1 adding:0px" name="end" />
                    </div> 
                    <button type="submit" class="btn btn-default btn-sm col-sm-2" name="action" style="margin-left:15px; margin-top:-2px;">Consolidate</button>  
                </div>
                <br />
                <form enctype="multipart/form-data">
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
                        <tbody>
                            <tr>
                                <td class="text-nowrap">0</td>
                                <td class="text-nowrap col-sm-6">Empty</td>
                                <td class="text-nowrap text-center col-sm-1">Empty</td>
                                <td class="text-nowrap text-center col-sm-2">Empty</td>
                                <td class="text-nowrap text-center">Methods</td>
                                <td class="text-nowrap th-size" id="jan_1">0</td>
                                <td class="text-nowrap th-size" id="feb_1">0</td>
                                <td class="text-nowrap th-size" id="mar_1">0</td>
                                <td class="text-nowrap th-size" id="apr_1">0</td>
                                <td class="text-nowrap th-size" id="may_1">0</td>
                                <td class="text-nowrap th-size" id="jun_1">0</td>
                                <td class="text-nowrap th-size" id="jul_1">0</td>
                                <td class="text-nowrap th-size" id="aug_1">0</td>
                                <td class="text-nowrap th-size" id="sep_1">0</td>
                                <td class="text-nowrap th-size" id="oct_1">0</td>
                                <td class="text-nowrap th-size" id="nov_1">0</td>
                                <td class="text-nowrap th-size" id="dec_1">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center col-sm-1">0</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
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