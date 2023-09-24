<?php
    include "includes/autoloader.inc.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.8.1/js/foundation.min.js" integrity="sha512-HugKDgJVjWdi/RfSbpjwOPqBhO2AQ6TuETbq7eGGutNulCWxZuERGwK9RutFQ/rbogsqpmfOtqJpFy2Y4AeJcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="includes/template/css/style.scss">
    <title>Document</title>
</head>
<body>
<div class="grid-x">
    <div class="cell">
        <?php
        $player = new Player(21, "TUS/WE Hirschau 2", "2", "Moritz Meier", 123456, 0, 0, false, false, 0, 0, 0, 0, 0, false, false, true);
        echo "<p>".$player->getName()."</p>";
        ?>
    </div>
</div>



</body>
</html>