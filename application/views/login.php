<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="<//?php echo base_url(); ?>assets2/images/rentcarlogo.png"> -->
        <title> Login </title>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css1/css.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css1/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css1/style.css">

        <!-- Favicon and touch icons -->
        <!-- <link rel="shortcut icon" href="<//? echo base_url() ?>assets2/ico/favicon.png"> -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets2/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets2/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets2/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets2/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login</h3>
                                    <p>Masukkan username dan password untuk login :</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="<?php echo site_url('auth/cek_login'); ?>" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Login</button>
                                </form>
                                <div style="padding-top: 20px; padding-left: 15px;">
                                <a href="<?php echo base_url(); ?>" style="color: white;">
                                <div class="form-bottom-left" style="border: 1px solid;padding: 5px 15px 5px;width: 45%;text-align: center;background: transparent;display: inline-block;border-radius: 5px;margin-right: 20px;">
                                    Home
                                </div>
                                </a>
                                <a href="<?php echo base_url('register'); ?>" style="color: white;">
                                <div class="form-bottom-left" style="border: 1px solid;padding: 5px 15px 5px;text-align: center;width: 45%;background: transparent;display: inline-block;border-radius: 5px;">
                                    Register
                                </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets2/js1/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets2/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets2/js1/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets2/js1/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets2/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>