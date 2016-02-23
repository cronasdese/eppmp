<!DOCTYPE html>
<html>
      <head>
            <title>Purchase Request</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
            <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

      </head>
      <body>
            <div class="wrapper">
                <br />
                <div class="container-fluid">
                    <br />
                    <h3 class="text-center"><b>Purchase Request</b></h3>
                    <p class="text-center">Technological Univesity of the Philippines</p>
                    <p class="text-center">Agency</p>
                </div>
                <hr />
                <div class="container-fluid" id="PRtop">
                    <div class="text-nowrap text-center">
                        <ul class="list-inline">
                            <?php
                                echo 
                                '<li class="col-md-4"><label class="col-md-3">Department</label>'. $purchase_order[0][0]->office_name .'<p class="col-md-2"></p></li> 
                                <li class="col-md-4"><label class="col-md-2">PR No.:</label><p class="col-md-1">'. $purchase_order[1] .'</p></li>
                                <li class="col-md-4"><label class="col-md-2">Date:</label><p class="col-md-1">'. date("Y-m-d") .'</p></li>';
                            ?>
                        </ul>
                        <ul class="list-inline">
                            <li class="col-md-4"><label class="col-md-3">Section</label><p class="col-md-2"> ----- </p></li>
                            <li class="col-md-4"><label class="col-md-2">SAI No.</label><p class="col-md-1"> 000000 </p></li>
                            <li class="col-md-4"><label class="col-md-2">Date:</label><p class="col-md-1"> xx/xx/xxxx </p></li>
                        </ul>
                    </div>                         
                </div>
                <hr />
                <div class="container-fluid">
                    <?php echo '<p class="text-center"><b>'. $purchase_order[0][0]->project_title .'</b></p>'; ?>
                </div>
                <div class="container-fluid">
                <form enctype="multipart/form-data">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th colspan="6">*Category*</th>
                                </tr>
                                <tr>
                                    <th class="text-nowrap text-center" rowspan="2">Stock No.</th>
                                    <th class="text-nowrap text-center" rowspan="2">Unit</th>
                                    <th class="text-nowrap text-center" rowspan="2">Item Description</th>
                                    <th class="text-nowrap text-center" rowspan="2">Quantity</th>
                                    <th class="text-nowrap text-center" rowspan="2">Unit Cost</th>
                                    <th class="text-nowrap text-center" colspan="2">Total Cost</th>
                                </tr> 
                            </thead>
                            <?php
                                $grand_total = 0;
                                echo '<tbody>';
                                    if(is_array($purchase_order[0]) || is_object($purchase_order[0])){
                                        foreach ($purchase_order[0] as $items) {
                                            echo ' <tr>
                                                <td class="text-nowrap">'. $items->category .'</td>
                                                <td class="text-nowrap text-center">'. $items->unit .'</td>
                                                <td class="text-nowrap col-sm-6">'. $items->supply_description .'</td>
                                                <td class="text-nowrap text-center">'. $items->quantity .'</td>
                                                <td class="text-center">'. number_format($items->price, 2, '.', ',') .'</td>
                                                <td class="text-center">'. number_format($items->quantity*$items->price, 2, '.', ',') .'</td>
                                            </tr>';
                                            $grand_total += $items->quantity*$items->price;
                                        }
                                    }
                                echo'</tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5"><b>Grand Total Total: </b></td>
                                        <td><p>'. number_format($grand_total, 2, '.', ',') .'</p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><b>Purpose:</b><p></p></td>
                                    </tr>
                                </tfoot>';
                            ?>
                        </table>
                </div>
                <br />
                <div class="container-fluid">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-md-4"> </th>
                                <th class="text-center col-md-4">Requested by:</th>
                                <th class="text-center col-md-4">Approved by:</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center">Signature</th>
                                <td class="text-center">Empty</td>
                                <td class="text-center">Empty</td>
                            </tr>
                             <tr>
                                <th class="text-center">Printed Name</th>
                                <?php echo '<td class="text-center">'. $purchase_order[0][0]->user_name .'</td>'; ?>
                                <td class="text-center">Empty</td>
                            </tr>
                             <tr>
                                <th class="text-center">Designation</th>
                                <?php echo '<td class="text-center">'. $purchase_order[0][0]->user_position .'</td>'; ?>
                                <td class="text-center">Position</td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </form> 
      </body>
</html> 