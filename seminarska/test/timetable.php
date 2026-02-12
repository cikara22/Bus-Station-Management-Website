<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "bus_station";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT DISTINCT departure_station FROM buses";
$departureResult = $conn->query($sql);

$sql = "SELECT DISTINCT destination FROM buses";
$destinationResult = $conn->query($sql);
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
        #timetable {
            flex-grow: 1;
            max-width: 100%; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px; 
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
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
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Возен ред</title>
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
    
        <div class="filter-section" id="timetable";>
            <label for="departureStation">Станица на поаѓање:</label>
            <select id="departureStation" name="departureStation">
                <option value="">Сите</option>
                <?php
                while ($row = $departureResult->fetch_assoc()) {
                    echo "<option value='{$row['departure_station']}'>{$row['departure_station']}</option>";
                }
                ?>
            </select>

            <label for="arrivalStation">Станица на пристигнување:</label>
            <select id="arrivalStation" name="arrivalStation">
                <option value="">Сите</option>
                <?php
                while ($row = $destinationResult->fetch_assoc()) {
                    echo "<option value='{$row['destination']}'>{$row['destination']}</option>";
                }
                ?>
            </select>

            <button onclick="applyFilters()">Пребарај</button>
        </div>
        <a href="prices.php">
    <img src="22.png" alt="Ticket" width="80" height="70">
    
</a>

      
        <table>
            <tr>
                <th>Врој на автобус</th>
                <th>Време на тргнување</th>
                <th>Место на тргнување</th>
                <th>Дестинација</th>
            </tr>
            <?php
     
            $filterDeparture = isset($_GET['departureStation']) ? $_GET['departureStation'] : '';
            $filterArrival = isset($_GET['arrivalStation']) ? $_GET['arrivalStation'] : '';

            $filterDeparture = $filterDeparture !== '' ? "AND departure_station = '$filterDeparture'" : '';
            $filterArrival = $filterArrival !== '' ? "AND destination = '$filterArrival'" : '';

            $filteredSql = "SELECT * FROM buses WHERE 1 $filterDeparture $filterArrival";
            $filteredResult = $conn->query($filteredSql);

            if ($filteredResult->num_rows > 0) {
                while ($row = $filteredResult->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['bus_number']}</td>
                            <td>{$row['departure_time']}</td>
                            <td>{$row['departure_station']}</td>
                            <td>{$row['destination']}</td>
                          </tr>"; 
                }
            } else {
                echo "<tr><td colspan='4'>No buses available based on the selected filters.</td></tr>";
            }

         
            $conn->close();
            ?>
        </table>
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
    <iframe
        width="600"
        height="450"
        frameborder="0"
        style="border:0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3128.8929700167337!2d21.9776292!3d41.5470378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDI2JzA1LjIiTiAyMcKwMTYnNDkuMyJF!5e0!3m2!1sen!2sus!4v1643993620617!5m2!1sen!2sus"
        allowfullscreen
    ></iframe>
    <footer>
        <p>&copy; 2024 Bus Station. All rights reserved.</p>
    </footer>

    <script>
        function applyFilters() {
            var departureStation = document.getElementById("departureStation").value;
            var arrivalStation = document.getElementById("arrivalStation").value;

         
            window.location.href = "timetable.php?departureStation=" + departureStation + "&arrivalStation=" + arrivalStation;
        }
    </script>
</body>
</html>