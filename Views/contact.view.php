<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact</title>
    <link rel="stylesheet" href="../Views/Portfoliocss.css"> <!--css gelinked -->
    <script src="../javascripts.js"></script>
</head>
<body>
    <?php require 'Views/layouts/Header.php'; ?> <!--werkt niet omdat de path niet klopt??-->

    <!--items achtergrond-->




    <div class="grid-item">
<!--begin form -->
<h1>Contact me</h1>

        <Div class="Contactform">
        <form action="../contact.php" method="post">
            <label for="NameForm">Name</label>
            <input type="text" id="NameForm" name="name">

            <br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email">
<br>
            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>
             <label>
                 <br>
            <input type="checkbox" name="terms">
            I agree to the terms and conditions.
            </label>
            <br>
            <button>Send</button>
        </form>

<div>

 Email: <br>
    L.M.Steltenpool@gmail.com
    <br>
    Phone number:
    <br>

    0686373521
</div>

    </div>
    </div>
    <!--achtergrond golven -->
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




    <!-- einde achtergrond golven -->

    <!-- ?php include 'Views/layouts/Footer.php'; ?> php footer (footer heb ik uit want staat mooier zonder)-->




</body>
</html>

