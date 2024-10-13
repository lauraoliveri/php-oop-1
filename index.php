<?php 
require __DIR__ .'\movies.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!-- stampo i film -->

    <div>
       <?php

       echo $TheNun->getFullData();
       ?> 
    </div>
</body>
</html>


