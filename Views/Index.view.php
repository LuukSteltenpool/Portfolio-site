<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>homepage</title>
    <link rel="stylesheet" href="../Views/Portfoliocss.css">

</head>
<body>
    <?php require 'Views/layouts/Header.php'; ?> <!--php header -->

    <div class="golfanim GolfAnimatieClss">
        <div class="golfanimbinnenkant bgtop">
            <div class="golf golftop" style="background-image: url('../images/golfjes/wave-top.png')"></div>
        </div>
        <div class="golfanimbinnenkant bgMiddle">
            <div class="golf golfmidden" style="background-image: url('../images/golfjes/wave-mid.png')"></div>
        </div>
        <div class="golfanimbinnenkant bgBottom">
            <div class="golf golfbodem" style="background-image: url('../images/golfjes/wave-bodem.png')"></div>
        </div>

    </div>

    </Div>

    <!--Korte biografie text-->
    <Div class="grid-item">
       <div class="container">
           <span class="text first-text" id="bewegendetext">My name is Luuk, and I'm a dedicated</span>
           <span class="text second-text" id="bewegendetext"></span>
           </div>
          with a strong foundation in web development and game design.
        With experience in HTML, CSS, Javascript, PHP, SQL and C++ I combine technical skills with creative problem-solving.
        My goal is to create engaging and interactive experiences. Currently studying at Windesheim, I plan to only grow my knowledge the coming years.
    </Div>




    <!-- ?php include 'Views/layouts/Footer.php'; ?> php footer (footer heb ik uit want staat mooier zonder)-->
    <script src="../javascripts.js"></script><!--javascript link -->



</body>
</html>

