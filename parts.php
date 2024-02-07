<?php
$servername = "hijazishop-server.mysql.database.azure.com";
$username = "nhcsdvjnaz";
$password = "A7L3HWL50W3W827R$";
$dbname = "hijazishop-database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect values from the form
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productColor = $_POST['productColor'];
    $catID = $_POST['CategoryID'];

    $sqlquery = "INSERT INTO products (Pname, price,color , CategoryID) VALUES ('$productName' ,'$ProductPrice','$ProductColor','$ProducCategoryID' )";
        
    if ($conn->query($sqlquery) == TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }  

}

?>
