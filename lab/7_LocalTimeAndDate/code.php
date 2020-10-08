<!DOCTYPE html>
<html>
    <head>
        <style type = "text/css">
        body {
            background-color: #dddfd4;
        }
        h1 {
            color: #173e44;
            font-size: 60px
        }
        h2{
            color :#173e44;
            font-size : 46px;
        }
        p{
            color :#3fb0ac;
            font-size : 30px;
        }
        </style>
    </head>

    <body>
        <h1>
            Displaying the Server date and time 
        </h1>
        <p> This is basically a html file that has embeded php code</p>
        <h2> Date on current server</h2>
        
        <?php
            date_default_timezone_set('Asia/Kolkata');

            $timestamp = time();
            $date_time = date("d-m-Y (D) H:i:s", $timestamp);
            echo " <p>Current date and local time on this server is $date_time </p>";
            ?>
        
    </body>
</html>
