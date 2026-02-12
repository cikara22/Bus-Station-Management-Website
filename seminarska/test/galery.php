<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }

        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
            width: 100%;
            height: 100vh; /* Set height to cover the entire viewport */
        }

        img {
            width: 100%;
            height: 100%;
        }

        /* Add any additional styles as needed */

        /* Navigation buttons */
        .prev, .next {
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            font-size: 20px;
            cursor: pointer;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            text-align: center;
        }

        .next {
            right: 0;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .back-to-home-button {
        display: block;
        position: fixed; /* Fixed position to keep it in place */
        top: 20px; /* Adjust top distance */
        left: 20px; /* Adjust left distance */
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50; /* Green color */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .back-to-home-button:hover {
        background-color: #45a049; /* Darker green color on hover */
    }
    </style>
</head>
<body>
<div class="slideshow-container">
    <?php
    // Array of image filenames
    $imageFilenames = array("b8.jpg", "b6.jpg", "b7.jpg", "b9.jpg", "b10.jpg", "b5.jpg", "b11.jpeg");

    // Display images in slideshow
    foreach ($imageFilenames as $filename) {
        echo "<div class='mySlides'>
                <img src='images/$filename' alt='Slide'>
              </div>";
    }
    ?>
    <!-- Navigation buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<a href="home.php" class="back-to-home-button">Back to Home</a>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");

        if (n > slides.length) {
            slideIndex = 1;
        }

        if (n < 1) {
            slideIndex = slides.length;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";
    }
</script>

</body>
</html>
