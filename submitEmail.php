

<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irrecordings";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST["email"];
 
    if (empty($email)) {
        echo "data is empty";
    } else {
        echo $email;
    }

    $sqlquery = "INSERT INTO email_list (firstname, lastname, email) VALUES
    ('" . $firstname . "', '" . $lastname . "', '" . $email . "')";
 
    if ($conn->query($sqlquery) === TRUE) {
        header("Location: ../ir_recordings-master/payment_gateway/dataFrom.htm");
        // echo "record inserted successfully";
    } else {
        echo "Error: " . $sqlquery . "<br>" . $conn->error;
    }
// }
?>