<?php
    include "head.php";
    include "bs.html";
    //css file
    echo "<link rel='stylesheet' type='text/css' href='css.css' />";
?>
<html>
    <head>
        <style>
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }
            /* Navbar container */
            .navbar {
                overflow: hidden;
                background-color: lightgrey;
                font-family: Arial;
            }
            /* Links inside the navbar */
            .navbar .tile{
                float: left;
                font-size: 16px;
                font-weight: bold;
                color: black;
                text-align: center;
                padding: 14px 0px 0px 600px;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="navbar">
            <span class="tile">ONLINE ATTENDANCE MANAGEMENT SYSTEM</span>
        </div>
        <br><br><br><br>
        <div align="center">
            <button onclick="location.href='lookup.php'" type="button" class="button" >
                <b>Attendance login</b></button>
        </div>
        <br><br>
        <div align="center">
            <!--to disable the feedback login button..comment the below line of code.-->        
            <button onclick="location.href='/feedback2/'" type="button" class="button"><b>Feedback Login</b></button>
        </div>
        <br><br><br><br><br><br><br><br><br><hr>
    </body>
</html>
<?php 
    include "footer.php";
?>
