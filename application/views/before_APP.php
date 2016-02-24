<!DOCTYPE html>
<html>
      <head>
            <title>Create Project</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datepicker.css'); ?>">
            <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
            <script src ="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('.input-daterange').datepicker({
                        todayBtn: "linked",
                        format: "yyyy-dd-mm"
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
                <h4 class="text-center"><b>Annual Procurement Plan (APP)</b></h4>
                <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('PPMP_controller/generateAPP'); ?>" enctype="multipart/form-data" data-parsley-validate>
                    <div class="input-daterange" id="datepicker">
                        <span class="add-on col-xs-1" style="vertical-align:top; height:27px">from</span>
                        <input id="from_date" name="from_date" type="text" class="input-xs col-xs-1 padding:0px" required />
                        <span class="add-on col-xs-1" style="vertical-align:top; height:27px">to</span>
                        <input id="to_date" name="to_date" type="text" class="input-xs col-xs-1 padding:0px" required />
                    </div> 
                    <button type="submit" class="btn btn-default btn-sm col-sm-2" name="action" style="margin-left:15px; margin-top:-2px;">Consolidate</button>  
                </form>
            </div>
            <br />
        </div>
      </body>
</html>