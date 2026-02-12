<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "bus_station"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

  
    $getUserQuery = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $getUserQuery->bind_param("s", $username);
    $getUserQuery->execute();

    $result = $getUserQuery->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user["password"])) {
   
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["username"] = $user["username"];

      
            header("Location: home.php");
            exit();
        } else {
            echo "<p>Неточна лозинка. Обидете се повторно.</p>";
        }
    } else {
        echo "<p>Корисникот не е пронајден.</p>";
    }

  
    $getUserQuery->close();
}


if (isset($_POST["logout"])) {
    $_SESSION = array();

 
    session_destroy();

  
    header("Location: login.php");
    exit();
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
        <?php
       
        if (isset($_SESSION["user_id"])) {
            echo "<center>Веќе сте најавени.</center>";
            echo "<br>";
            echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
              <center>  <button type="submit" name="logout">Logout</button></center>
            </form>';
        } else {
            echo '
            <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
              
                <label for="username">Корисничко име:</label>
                <input type="text" name="username" required>

                <label for="password">Лозинка:</label>
                <input type="password" name="password" required>

                <button type="submit" name="login">Најава</button>
            </form>';
        }
        ?>
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