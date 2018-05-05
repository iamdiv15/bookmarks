<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/gif/png" href="<?php echo base_url()?>static/img/bkmk-logo.png">

        <title> Bookmark Store</title>
        <link rel="stylesheet" href="<?php echo base_url()?>static/css/bootstrap.css" type="text/css"/>
        <style type="text/css">
            body{
                background: url('<?php echo base_url()?>static/img/home_bg.jpg') no-repeat;
            }
            .col h1{
                margin-top: 30px;
                font-family: times;
                font-weight:bolder;
                color:orangered;
                font-size: 30px;

            }
            .logo{
                margin-top:20px;
            }
            .col form{
                margin-top: 30px;
                float: right;
                background-color: #338DFF;
            }
            .row p{
                margin-left: 15px;
            }
            a{
                float:right;
                margin-top: 30px;
                margin-right:4px;
            }
           
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="logo" src="<?php echo base_url()?>static/img/bookmark_library1.jpg" alt="logo"/>
                </div>
                <div class="col">
                    <h1>BOOKMARK LIBRARY</h1>
                </div>
                <div class="col">
                    <a href="<?php echo base_url()?>index.php/home/login"><button class="btn btn-success ">Login</button></a>
                    <a href="<?php echo base_url()?>index.php/home/registration_page"><button class="btn btn-success ">SignUp</button></a>
                </div>
            </div>
            <div class="row">
                <p>With bookmark library you can store your favorite links online on your private and customizable bookmarks page.
                    All your bookmarks can be organized into categories and dashboards.</p>                         
            </div>
            <div class ="row">
                <form action="bm_submit.php" method="POST">
                    Enter URL:<input type="text" name="">
                    <input type="submit" name="" value="submit">
                </form>
            </div>
        </div>
    </body>
</html>

