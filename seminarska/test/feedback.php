<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "bus_station";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

  
    $sql = "INSERT INTO feedback (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Thank you for your feedback!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head><style>
body{ background-image: url("2.jpg"); 
background-attachment:fixed; 
background-size: cover;}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Station</title>
    <link rel="stylesheet" href="csss.css">
</head>
<body>
   
    <header>
    <img src="logoo1.jpg" alt="MKBUS"  width="700" height="200">
</header>

    <nav>
        <ul>
            <li><a href="home.php">Дома</a></li>
            <li><a href="timetable.php">Возен ред</a></li>
            <li><a href="busstations.php">Станици</a></li>
            <li><a href="reservation.php">Резервација на билет</a></li>
            <li><a href="login.php">Најава</a></li>
            <li><a href="register.php">Регистрација</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
    </nav>

    <section>
    
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Име:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="message">Поплака/пофалба:</label>
            <textarea name="message" rows="4" required></textarea>

            <button type="submit">Испрати Feedback</button>
        </form>
    </section>
    <section>

   
          <div class="contact-section">
            <h2>Информации за контакт</h2>
            <p><b>Email:</b> info@busstation.com.mk <br> support@busstation.com.mk</p>
            <p><b>Телефон:</b> 070-070-070 <br> 032/032-032</p>
            <a href="instagram.com">
        <img src="instagram.png" width="30px" height="30px"></a>
        <a href="facebook.com">
        <img src="facebook.png" width="30px" height="30px"></a>
        <a href="x.com">
        <img src="x.png" width="30px" height="30px"></a>
         
        </div>
    
    </section>
    <footer>
        <p>&copy; 2024 Bus Station. All rights reserved.</p>
    </footer>
</body>
</html>