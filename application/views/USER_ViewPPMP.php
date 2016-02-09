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
            <p> Insert</p>
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
                    <tr id="row_1">
                        <td class="text-nowrap" name="category" id="category_1">Empty</td>
                        <td class="text-nowrap col-sm-6" id="items_1" name="items">Empty</td>
                        <td class="text-nowrap text-center" id="qty_1">0</td>
                        <td class="text-nowrap text-center col-sm-1" id="unit_1">Empty</td>
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
                        <td class="text-center col-sm-1" id="unitprice_1">0</td>
                        <td class="text-center col-sm-2" id="subtotal_1">0</td>
                      
                    </tr>
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
                        <th class="col-md-5">Recommending Approved:</th>
                        <th class="col-md-4">Approved by:</th>
                    </tr>    
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">Empty</th>
                        <th class="text-center">Empty</th>
                        <th class="text-center">Empty</th>
                    </tr>
                     <tr>
                        <th class="text-center">Position</th>
                        <th class="text-center">Position</th>
                        <th class="text-center">Position</th>
                    </tr>
                </tbody>
            </table>  
        </div>  
    </div>
</div>    
</body>
</html>



                                                     