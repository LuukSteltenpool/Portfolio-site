<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homepage</title>
    <link rel="stylesheet" href="Portfoliocss.css">
    <script src="../javascripts.js"></script>
</head>
<body>
    <?php require 'Views/layouts/Header.php'; ?> <!--werkt niet omdat de path niet klopt??-->

    <!--items achtergrond-->
    <Div class="grid-container" id="demo">

    </Div>

    <!--Korte biografie text-->
    <Div class="grid-item">


        Lorem ipsum dolor sit amet. 33 odit similique ab repellat accusantium rem sunt fugit. A obcaecati Quis eos Quis quaerat eos architecto nihil ea itaque officiis sed error molestiae rem corporis molestiae ut iste omnis.

        Ea omnis expedita ea asperiores praesentium et voluptates doloremque ea molestiae tenetur. Qui dolore veritatis eos nesciunt officiis qui obcaecati molestiae ad voluptatem officiis et deleniti enim sed dolorem voluptatum. Qui iusto molestias qui quis nihil et neque natus non odio delectus eum quisquam illo!

        Est explicabo ullam et velit nihil qui quod unde qui dolorum molestiae hic ratione nihil in ratione quas. Qui sunt impedit in omnis unde et Quis iste nam saepe voluptates et doloribus laborum.
    </Div>

    <?php include 'Views/layouts/Footer.php'; ?> <!--php footer -->




</body>
</html>

<?php
$uri= $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/Home':
        require('./Views/Index.view.php');
        require('./Views/Portfoliocss.css');
        break;

    case '/myprojects':
        require 'Views/Mycreations.view.php';
        break;

    case '/downloads':
        require('Views/Downloads.view.php');
        break;

#    case '/contact':
     #   require('Views/contact.view.php');
    #    break;

    default:
        require('Views/index.view.php');
        break;
}