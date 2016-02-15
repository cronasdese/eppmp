<!DOCTYPE html>
<html>
      <head>
            <title>Purchase Order</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
            <link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
            <link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
            <script src ="assets/js/jquery-2.1.4.min.js"></script>
            <script src ="assets/js/bootstrap.min.js"></script>

      </head>
      <body>
            <div class="wrapper">
                <div class="container">
                    <br />
                    <p class="text-center">Technological Univesity of the Philippines</p>
                    <h6 class="text-center">Ayala blvd., Ermita, Manila</h6>
                    <br />
                    <h4 class="text-center"><b>Puchased Order</b></h4>
                </div>
                <div class="container-fluid">
                        <div class="col-md-12 text-nowrap">
                            <label class="col-md-2">Puchase Order #</label>
                            <p> 00000 </p>
                            <label class="col-md-2">PO Date</label>
                            <p> xx/xx/xxxx </p>
                            <label class="col-md-2">Office/Unit:</label>
                            <p> ------ </p>
                        </div>                          
                </div>
                <br />
                <form enctype="multipart/form-data">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th class="text-nowrap text-center" rowspan="2">Item Code</th>
                                    <th class="text-nowrap text-center" rowspan="2">Description</th>
                                    <th class="text-nowrap text-center" rowspan="2">Quantity</th>
                                    <th class="text-nowrap text-center" rowspan="2">Unit</th>
                                    <th class="text-nowrap text-center" rowspan="2">Unit Price</th>
                                    <th class="text-nowrap text-center" colspan="2">Subtotal</th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-nowrap">0</td>
                                    <td class="text-nowrap col-sm-6">Empty</td>
                                    <td class="text-nowrap text-center">0</td>
                                    <td class="text-nowrap text-center">0</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">0</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <br />
                <div class="container-fluid">
                    <hr />
                    <div class="col-md-offset-10">
                        <h5><b>Puchase Order Total: </b></h5>
                        <p>0.00</p>
                    </div>
                    <hr />
                </div>
                <br />
                <br/>
                 <div class="container">
                    <table class="col-md-12">
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
            </form> 
      </body>
</html> 