<!DOCTYPE html>
<html>
    <head>
        <title>Start Consolidation</title>
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
        <div class="container">
            <div class="hero-unit" style="margin-top:180px; margin-left:200px;">
                <div class="input-daterange" id="datepicker">
                    <input type="text" class="input-small col-sm-4" name="start" />
                    <span class="add-on col-sm-1" style="vertical-align:top; height:27px">to</span>
                    <input type="text" class="input-small col-sm-4" name="end" />
                </div>
                <button type="submit" name="action" class="col-sm-8" style="margin-top:50px; margin-left:8px;">Consolidate</button>      
            </div> 
        </div>
    </body>
</html>