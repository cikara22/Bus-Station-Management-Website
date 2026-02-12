<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "bus_station";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sqlDeparture = "SELECT DISTINCT departure_station FROM ticket_prices";
$departureResult = $conn->query($sqlDeparture);


$sqlArrival = "SELECT DISTINCT arrival_station FROM ticket_prices";
$arrivalResult = $conn->query($sqlArrival);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $departureStation = $_POST["departureStation"];
    $arrivalStation = $_POST["arrivalStation"];

   
    $sqlPrices = "SELECT * FROM ticket_prices WHERE departure_station = '$departureStation' AND arrival_station = '$arrivalStation'";
    $pricesResult = $conn->query($sqlPrices);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
       body {
            background-image: url("2.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

      

        .filter-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    </style>
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Возен ред</title>
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
      
        <div class="filter-section">
            <form method="post" action="">
                <label for="departureStation">Станица на поаѓање :</label>
                <select id="departureStation" name="departureStation">
                    <option value="">Одбери станица на поаѓање</option>
                    <?php
                    while ($row = $departureResult->fetch_assoc()) {
                        echo "<option value='{$row['departure_station']}'>{$row['departure_station']}</option>";
                    }
                    ?>
                </select>

                <label for="arrivalStation">Станица на пристигнување:</label>
                <select id="arrivalStation" name="arrivalStation">
                    <option value="">Одбери станица на пристигнување</option>
                    <?php
                    while ($row = $arrivalResult->fetch_assoc()) {
                        echo "<option value='{$row['arrival_station']}'>{$row['arrival_station']}</option>";
                    }
                    ?>
                </select>

                <button type="submit">Прикажи цена на билет</button>
            </form>
        </div>

    
        <?php if (isset($pricesResult) && $pricesResult->num_rows > 0) : ?>
            <center>
            <div>
                <h2>Цена на билет</h2>
                
                    <?php while ($price = $pricesResult->fetch_assoc()) : ?>
                        <li><?php echo "Од {$price['departure_station']} до {$price['arrival_station']} = {$price['price']} denari"; ?></li>
                    <?php endwhile; ?>
                
            </div>
            </center>
        <?php endif; ?>
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
