<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="<?php echo base_url()?>static/css/bootstrap.css" type="text/css"/>
        <style type="text/css">
            body{
                background: url('<?php echo base_url()?>static/img/apple.jpg');
            }
            #log{
                border: 1px solid white;
                padding: 60px 40px;
                margin-top: 70px;
            }
            img{
                width:100px;
                margin:auto;
            }
            h1{
                color: white;
                text-align: center;
                font-weight:bolder;
                margin-top: -20px;
            }
            label{
                color: white;
                font-size: 20px;
            }
                
        </style>
    </head>
    <body>
        <div class="container bg">
            <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <form id="log" action="login_submit.php" method="POST">
                        <h1>Login Form</h1>
                        <img src="<?php echo base_url()?>static/img/caller.png"/>
                        <div>
                            <label>Email:</label>
                            <input class="form-control" type="text" name="Email" placeholder="abc@example.com"/><br/>
                        <div/>
                        <div>
                            <label>Password:</label>
                            <input class="form-control" type="password" name="psw" placeholder="password"/><br/>
                        </div>
                        <div>
                            <label><input type="checkbox"/>Remember me</label>
                        <button class="btn btn-success form-control" type="submit">Login</button>
                    </form>
                </div>
                <div class="col-md-3 col-sm-2 col-xs-12"></div>
            </div>
        </div>
    </body>
</html>


