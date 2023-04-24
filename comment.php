<!DOCTYPE html>
<html>

<head>
    <title>Customer Comment</title>
</head>

<body>
    <center>
        <?php

        // servername => 127.0.0.1
        // username => Admin
        // password => Admin123
        // database name => shop
        $conn = mysqli_connect("localhost", "Admin", "Admin123", "shop");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $comment = $_REQUEST['comment'];
        
        

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO customercomment VALUES ('$comment')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3> Your Comment Inserted successfully

</h3>";

            echo nl2br("\n$comment\n");
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
<center><a href="comment.html">Back</a> | <a href="comment.html">Continue</a></center>
</html>
