<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "bus_station";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM bus_stations";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $busStations = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $busStations = [];
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
  
    .bus-stations {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
    }

    .row {
        display: flex;
        width: 95%;
        justify-content: space-between;
        margin-bottom: 20px; 
    }

    .station {
        flex: 0 0 calc(33.333% - 10px); 
        margin-bottom: 20px; 
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Станици</title>
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
    <?php if (!empty($busStations)) : ?>
        <div class="bus-stations">
            <?php $counter = 0; ?>
            <?php foreach ($busStations as $station) : ?>
                <?php if ($counter % 3 === 0) : ?>
                    
                    <div class="row">
                <?php endif; ?>
                <div class="station">
                    <strong><?php echo $station['station_name']; ?></strong><br>
                    Контакт: <?php echo isset($station['contact']) ? $station['contact'] : 'N/A'; ?><br>
                    Работно време: <?php echo isset($station['work_time']) ? $station['work_time'] : 'N/A'; ?>
                </div>
                <?php if (($counter + 1) % 3 === 0 || ($counter + 1) === count($busStations)) : ?>
                
                    </div>
                <?php endif; ?>
                <?php $counter++; ?>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <p>Нема достапни станици.</p>
    <?php endif; ?>
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
    <style>
        body {
            background-image: url("2.jpg");
            background-attachment: fixed;
            background-size: cover;
        }

        section {
            display: flex;
            flex-wrap: wrap;
        }

        section li {
            flex: 1 0 40%; 
            margin: 10px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
    </style>
    <footer>
        <p>&copy; 2024 Bus Station. All rights reserved.</p>
    </footer>
</body>
</html>
