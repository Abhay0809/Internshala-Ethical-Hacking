<!-- Q2. Write a php program to print “good morning”, “good afternoon”, “good evening”, and “good night” based upon the current time. Hint: date‘H’ will give you the present hour in 24 hr format. -->

<html>
    <head>
        <title>
            PHP ANSWER 2
        </title>
    </head>
    <body>
        
    <?php
        date_default_timezone_set("Asia/Kolkata");
        $time = date("H");
        // echo $time;

        if ($time > 0 and $time < 12) {
            echo "Good Morning";
        } 
        else if ($time >= 12 and $time < 16) {
            echo "Good Afternoon";
        }
        elseif ($time >= 16  and $time < 20) {
            echo "Good Eveving";
        }
        else {
            echo "Good Night";
        }
        
    ?>

    </body>
</html>