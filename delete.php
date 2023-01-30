<?php
if(isset($_POST['delete'])){
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "landing_pages";

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    //check for connection error
    if(mysqli_connect_errno()){
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    //retrieve the id value from the form
    $id = mysqli_real_escape_string($connection, $_POST['id']);

    //create and execute the delete query
    $query = "DELETE FROM MyGuests WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    //check for query error
    if(!$result){
        die("Error: " . mysqli_error($connection));
    }

    //close the connection
    mysqli_close($connection);
    //redirect to the previous page
    header("Location: lists.php");
}