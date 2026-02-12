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

    <section class="photo-section">
        <img src="zanas.png" alt="Photo 1" class="photo">
        <img src="mkbus.png" alt="Photo 2" class="photo">
        <img src="poplaki.png" alt="Photo 3" class="photo">
    </section>
    <hr>
    <hr>
    <h1 align="center">Новости</h1>
    <section class="photo-section">
        <img src="home1.png" alt="Photo 1" class="photo">
        <img src="home2.png" alt="Photo 2" class="photo">
        <img src="home3.png" alt="Photo 3" class="photo">
    </section>
    <hr>
    <hr>
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
    <section>
    <center>
    <div class="image-container">
    <a href="galery.php">
        <img src="galerija.jpg"></a>
</div></center></section>
<hr>
<hr>
    <footer>
    <p>&copy; 2024 Bus Station. All rights reserved.</p>
</footer>

    <script>
    var slideIndex = 0;

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000); 
    }

  
    showSlides();
</script>
    
</body>
</html>