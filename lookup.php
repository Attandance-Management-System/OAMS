<?php
    include "head.php";
?>
<html>
    <head>
        <style>
            body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            }

            .topnav {
            overflow: hidden;
            background-color: #333;
            }

            .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            }

            .topnav a:hover {
            background-color: #ddd;
            color: black;
            }

            .topnav a.active {
            background-color: #04AA6D;
            color: white;
            }
        </style>
    </head>
    <body>
        <div class="topnav">
            <a href="admin.php">ADMIN</a>
            <a href="hod.php">HOD</a>
            <a href="faculty.php">FACULTY</a>
            <a href="studenthru.php">STUDENT</a>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
        <footer>
            <?php
                include "footer.php";
            ?>
        </footer>
    </body>
</html>
