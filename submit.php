<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into database
    $sql = "INSERT INTO users (name, email, phone, gender) VALUES ('$name', '$email', '$phone', '$gender')";
    if ($conn->query($sql) === TRUE) {
        echo "
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #6a11cb, #2575fc);
                color: white;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .success-container {
                background: #ffffff;
                color: #333;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                padding: 20px;
                max-width: 400px;
                width: 90%;
            }
            h1 {
                color: #6a11cb;
            }
            p {
                margin: 10px 0;
            }
            .btn {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background: linear-gradient(135deg, #6a11cb, #2575fc);
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-weight: bold;
                transition: background 0.3s ease-in-out;
            }
            .btn:hover {
                background: linear-gradient(135deg, #2575fc, #6a11cb);
            }
        </style>
        <div class='success-container'>
            <h1>Registration Successful!</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Gender:</strong> $gender</p>
            <a href='http://localhost/online_form/' class='btn'>Register Again</a>
        </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "<h1>Invalid Request</h1>";
}
?>
