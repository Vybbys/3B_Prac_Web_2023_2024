<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   for ($i=100; $i >0 ; $i-- )
   { 
    if ($i%5==0) 
             echo $i;
            echo " ";
        
   }
   echo "<br>";
   echo  " while  zwykle";
   $a= 101;
   while ($a >0) {
        $a--;
        if ($a%5==0) 
            echo $a;
        echo "<br>";
   }
   $z=100;
   do {
    $z--;
    if ($z%5==0) 
            echo $z;
        echo "<br>";
   } while ($z >0);
   ?>
</body>
</html>