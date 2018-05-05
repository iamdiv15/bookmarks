<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bookmark Store</title>
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
                             <a href="<?php echo base_url()?>index.php/home/bookmarks_home.php"><button class="btn btn-success ">Log Out</button></a> 
                </div>
            </div>
            <div class="row">
                <p>With bookmark library you can store your favorite links online on your private and customizable bookmarks page.
                    All your bookmarks can be organized into categories and dashboards.</p>                         
            </div>
            <div class ="row">
                <h1>Display bookmarks</h1>
                <?php
                
                include('database.php');
                
                $getdata="SELECT id, bookmarks FROM store_bookmarks";
                $sqldata=mysqli_query($db, $getdata);
                echo "<table>";
                echo "<tr><th>ID</th><th>bookmarks</th></tr>";
                
                while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                    echo "<tr><td>";
                    echo $row['id'];
                    echo "</td><td>";
                    echo $row['bookmarks'];
                    echo "</td></tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>
    </body>
</html>

