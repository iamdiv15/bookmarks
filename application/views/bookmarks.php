<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bookmark Store</title>
        <link rel="stylesheet" href="<?php echo base_url()?>static/css/bootstrap.css" type="text/css"/>
        <style>
            .col h2{
                margin-top: 30px;
                font-family: times;

            }
            .col button{
                margin-top: 30px;
                float: right;
                background-color: #338DFF;
            }
            .row p{
                margin-left: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="<?php echo base_url()?>static/img/bookmark_library.jpg" alt="logo"/>
                </div>
                <div class="col">
                    <h2>BOOKMARK LIBRARY</h2>
                </div>
                <div class="col">
                    <button>Login/Sign Up</button>
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

