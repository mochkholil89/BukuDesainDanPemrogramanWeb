<html>
    <head>
        <title>Belajar PHP</title>
    </head>
<body>
<?php
    $jarak = 4;
    if ($jarak >= 80){
        echo "Naik Mobil";
    }
    else if ($jarak >= 10 && $jarak < 80){
        echo "Naik Motor";
    }
    else if ($jarak >= 5 && $jarak < 10){
        echo "Naik Sepeda";
    }
    else{
        echo "Jalan Kaki";
    }
?>
</body>
</html>
