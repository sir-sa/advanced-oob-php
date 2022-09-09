<html>
  <head><title>Count days</title></head>
  <bod>
    <?php 
        $target =mktime(0,0,0,11,10,2022);
        $today=time();
        $difference =($target - $today);
        $days=(int)($difference/86400);
        print"our event will occur in $days days";
    ?>

    <br>
    <h1>Open Hours</h1>
    <?php
        // $firstday = date('l');
  
        // echo "First day of this week: ", $firstday;
        date_default_timezone_set("Africa/Nairobi");
        if(date('l') =="Monday"){
            echo "we open from 8am to 5pm";
        }elseif(date('l') == "Tuesday"){
            echo "we open from 11am to 9pm";
        }else{
            echo "we open 24/7";
        }
     ?>
  </bod>  
</html>