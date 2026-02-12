<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "bus_station"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

   
    if ($password !== $confirmPassword) {
        echo "<p>Passwords do not match. Please try again.</p>";
    } else {
   
        $checkUserQuery = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($checkUserQuery);

        if ($result->num_rows > 0) {
            echo "<p>Username already taken. Please choose a different one.</p>";
        } else {
      
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $insertUserQuery = "INSERT INTO users (name, email, username, password)
                                VALUES ('$name', '$email', '$username', '$hashedPassword')";
            if ($conn->query($insertUserQuery) === TRUE) {
                echo "<p>Успешна регистрација. Сега можете да се <a href='login.php'>логирате</a>.</p>";
            } else {
                echo "<p>Error: " . $insertUserQuery . "<br>" . $conn->error . "</p>";
            }
        }
    }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head><style>
body{ background-image: url("2.jpg"); 
background-attachment:fixed; 
background-size: cover;}
.photo-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .photo {
            width: 250px; 
            height: auto; 
            margin: 0 10px; 
            border: 2px solid #333;
            border-radius: 5px; 
        }
        .image-container img {
    border: 2px solid #ffeb3b; 
    box-shadow: 0 0 10px #ffeb3b; 
    transition: box-shadow 0.3s; 
  }

  .image-container:hover img {
    box-shadow: 0 0 20px #ffeb3b; 
  }
  .contact-section {
            max-width: 30%;
        }

        .contact-section h2 {
            margin-bottom: 10px;
        }

        iframe {
            width: 100%;
            height: 450px;
            margin-top: 20px;
        }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Station</title>
    <link rel="stylesheet" href="csss.css">
</head>
<body>
    <style>
    .contact-section {
        background-color: #ffd700;
        padding: 20px;
        margin: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        
        
        position: fixed;
        top: 20px;
        right: 20px;
    }</style>

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

            <label for="username">Корисничко име:</label>
            <input type="text" name="username" required>

            <label for="password">Лозинка:</label>
            <input type="password" name="password" required>

            <label for="confirm_password">Потврди лозинка:</label>
            <input type="password" name="confirm_password" required>

            <button type="submit" name="register">Регистрација</button>
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



