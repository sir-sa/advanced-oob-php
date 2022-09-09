<html>
    <head><title>Car saved</title></head>
    <body bgcolor="#FFFFFF" text="#000000">
        <?php
            //Capture the values posted to this php program from text
            $vin=$_POST['vin'];
            $make=$_POST['make'];
            $model=$_POST['model'];
            $price=$_POST['asking_Price'];

            //Build a SQL Query using the values from above
            $query= "INSERT INTO inventory (vin,make,model,price) 
            VALUES ('$vin','$make','$model','$price')";

            // echo ($query. "<br>");

           include('./db.php');
            // try to insert the new car into the database
            if($result = $mysqli->query($query)){
                echo "<p>You have entered the data successfully!!</p>";
                header("Location: index.php");
            }else{
                echo "Error entering data". mysqli_error($mysqli)."<br>";
            }

            $mysqli->close();
        ?>
    </body>
</html>