<?php

$servername = "localhost";
$username = "root";
$password = "SQLLuuk123!";
$dbname = "portfolioapp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 'kijk of alles gepost is van het  forum'
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // data van het forum pakken (attributes name)
        $yourname = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];


        $sql = "INSERT INTO message (name, email, content) VALUES (:name, :email, :message)";
        $stmt = $conn->prepare($sql);

        // parameters verbinden aan de name attribute van de forum.
        $stmt->bindParam(':name', $yourname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        // Execute the statement
        $stmt->execute();

        echo "New record created successfully";
    }
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>