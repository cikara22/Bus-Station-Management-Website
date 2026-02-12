<?php


session_start();


if (!isset($_SESSION["user_id"])) {

    header("Location: login.php");
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


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["reserve"])) {
    $departureStation = $_POST["departure_station"];
    $arrivalStation = $_POST["arrival_station"];
    $date = $_POST["date"];
    $ticketType = $_POST["ticket_type"];
    $numPassengers = $_POST["num_passengers"];

    
    $sqlInsert = $conn->prepare("INSERT INTO reservationsInfo (departure_station, arrival_station, date, ticket_type, num_passengers) 
                                 VALUES (?, ?, ?, ?, ?)");


    $sqlInsert->bind_param("ssssi", $departureStation, $arrivalStation, $date, $ticketType, $numPassengers);

 
    if ($sqlInsert->execute()) {
  
        $reservation_id = $conn->insert_id;

      
        header("Location: payment.php?reservation_id=" . $reservation_id);
        exit();
    } else {
        echo "<p>Error: " . $sqlInsert->error . "</p>";
    }

 
    $sqlInsert->close();
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
        <h2>Резервација на билет</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       
            <label for="departure_station">Станица на поаѓање:</label>
            <input type="text" name="departure_station" placeholder="Stip, Skopje, Bitola..." list="departure_station_list" required>
            
            <label for="arrival_station">Дестинација:</label>
            <input type="text" name="arrival_station" placeholder="Stip, Skopje, Bitola..." list="arrival_station_list" required>

            <label for="date">Датум:</label>
            <input type="date" name="date" required>

            <label for="ticket_type">Тип на билет:</label>
            <select name="ticket_type" required>
                <option value="One way">Во еден правец</option>
                <option value="Round Trip">Повратен</option>
            </select>
            <br><br>

            <label for="num_passengers">Број на патници:</label>
            <input type="number" name="num_passengers" min="1" required>


            <datalist id="departure_station_list">
            <option value="Stip">Stip</option>
<option value="Skopje">Skopje</option>
<option value="Veles">Veles</option>
<option value="Kocani">Kocani</option>
<option value="Bitola">Bitola</option>
<option value="Prilep">Prilep</option>
<option value="Tetovo">Tetovo</option>
<option value="Kumanovo">Kumanovo</option>
<option value="Strumica">Strumica</option>
<option value="Ohrid">Ohrid</option>
<option value="Sveti Nikole">Sveti Nikole</option>
<option value="Kriva Palanka">Kriva Palanka</option>
<option value="Debar">Debar</option>
<option value="Krusevo">Krusevo</option>            
</datalist>

            <datalist id="arrival_station_list">
            <option value="Stip">Stip</option>
<option value="Skopje">Skopje</option>
<option value="Veles">Veles</option>
<option value="Kocani">Kocani</option>
<option value="Bitola">Bitola</option>
<option value="Prilep">Prilep</option>
<option value="Tetovo">Tetovo</option>
<option value="Kumanovo">Kumanovo</option>
<option value="Strumica">Strumica</option>
<option value="Ohrid">Ohrid</option>
<option value="Sveti Nikole">Sveti Nikole</option>
<option value="Kriva Palanka">Kriva Palanka</option>
<option value="Debar">Debar</option>
<option value="Krusevo">Krusevo</option>         
</datalist>

            <button type="submit" name="reserve">Reserve Ticket</button>
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