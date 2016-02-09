<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
        <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
        <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src ="<?php echo base_url('assets/js/ppmp.js'); ?>"></script>
    </head>
    <body id="loginBGC1">
        <!-- WHOLE NAVBAR -->
        <div class="container" id="loginFONT">
            <div class="col-sm-10 col-md-offset-1">
                <div class="inner-page ">
                    <div class="logo text-center">
                        <p id="loginLOGO">Intranet-based Electronic Project Procurement Management Plan</p>
                    </div>
                </div>
                <hr/>
                <div class="container-fluid" id="loginBGC2">
                    <fieldset>  
                        <form class="form-vertical" pb-autologin="true" autocomplete="off" action="<?php echo base_url("Signin_controller/validateAccount"); ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                              <label for="inputUserID" class="text-pos text-center col-sm-2 control-label">Office</label>
                                <div class="col-sm-12">
                                    <select type="text" id="drp-width" class="form-control" name="inputUserID" required>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>    
                            </div>  
                            <div class="form-group">
                              <label for="inputPassword" class="text-pos text-center col-sm-2 control-label">Password</label>
                                <div class="col-sm-12">
                                <input type="password" class="form-control" name="inputPassword" placeholder="••••••••••" value=""  required>
                                </div>
                            </div>        
                            <div class="form-group">
                              <div class="col-sm-12">
                                <button type="submit" id="validate" class="btn btn-default col-sm-12">Login</button>
                              </div>
                            </div>
                        </form>
                    </fieldset> 
                </div>
            </div>  
        </div>
    </body>
</html>