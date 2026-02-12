<?php

session_start();


if (!isset($_GET["reservation_id"])) {
    header("Location: reservation.php");
    exit();
}


$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "bus_station";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$reservation_id = $_GET["reservation_id"];


$sqlSelect = "SELECT * FROM reservationsInfo WHERE reservation_id = $reservation_id";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    $reservation = $result->fetch_assoc();
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
        <br>

        <?php 
      
        
            
            echo "<p>Reservation ID: " . $reservation["reservation_id"] . "</p>";
            echo "<p>Departure Station: " . $reservation["departure_station"] . "</p>";
            echo "<p>Arrival Station: " . $reservation["arrival_station"] . "</p>";
            echo "<p>Date: " . $reservation["date"] . "</p>";
            echo "<p>Ticket Type: " . $reservation["ticket_type"] . "</p>";
            echo "<p>Number of Passengers: " . $reservation["num_passengers"] . "</p>";
        
        ?>

        <section>
            <center><h2>Детали за плаќање</h2></center><br><br>
            <form method="post" action="confirm_payment.php">
        
                <label for="card_number">Број на картичка:</label>
                <input type="text" name="card_number" required><br>

                <label for="expiry_date">Дата на истекување:</label>
                <input type="text" name="expiry_date" placeholder="MM/YY" required><br>

                <label for="cvv">CVV:</label>
                <input type="text" name="cvv" maxlength="3" required><br>

                <input type="hidden" name="reservation_id" value="<?php echo $reservation_id; ?>">

                <button type="submit" name="confirm_payment">Потврди наплата</button>
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
    <?php
} else {
    echo "<p>Reservation not found.</p>";
}


$conn->close();
?>
