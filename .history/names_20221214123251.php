<?php
$name =['jon','tom','boby','toffy','nish'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .some-name{
            background-color: navy;
            color: white;
        }
        .more-name{
            b;
        }
    </style>
</head>
<body class="">
    <h1>Names</h1>
    <ul>
        <?php foreach($name as $name ) {?>
         <li><?=$name?></li>
         <?php  
        }?>
    </ul>
    
</body>
</html>