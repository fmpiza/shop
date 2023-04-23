<!DOCTYPE html>
<html>

<head>
    <title>Customer Data</title>
</head>

<body>
    <center>
        <?php

        // servername => 127.0.0.1
        // username => laoziml_monica
        // password => *88Zamzamfridolin0683168429
        // database name => laoziml_booking
        $conn = mysqli_connect("localhost", "laoziml_monica", "*88Zamzamfridolin0683168429", "laoziml_booking");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $product = $_REQUEST['product'];
        $price = $_REQUEST['price'];
        $unit = $_REQUEST['unit'];
        $phone = $_REQUEST['phone'];
        $date = $_REQUEST['date'];
        $time = $_REQUEST['time'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO customerdata VALUES ('$name', '$product','$price', '$unit','$phone', '$date','$time')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3> Customer Data Inserted successfully

</h3>";

            echo nl2br("\n$name\n");
            echo nl2br("\n$product\n");
            echo nl2br("\n$price\n");
            echo nl2br("\n$unit\n");
            echo nl2br("\n$phone\n");
            echo nl2br("\n$date\n");
            echo nl2br("\n$time\n");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
<center><a href="forms-elements.html">Back</a> | <a href="forms-elements.html">Continue</a></center>
</html>
