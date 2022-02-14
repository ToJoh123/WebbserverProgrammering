<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome</h1>
<li><a href="/nedräkning_1.php"> nedräkning_1</a></li>
    <li><a href="/nedräkning_2.php"> nedräkning_2</a></li>
    <li><a href="/nedräkning_3.php"> nedräkning_3</a></li>
<?php 
    $datenow = getdate();
    $yearnow= $datenow['year'];
    $monthnow = $datenow ['mon'];
    $daynow = $datenow ['mday'];

    echo "today's date:<br/>" . $datenow['year'] .":" .$datenow['mon'] . ":" . $datenow['mday']. "<br/>";
    echo  $yearnow . $monthnow . $daynow;

    $date1 = date_create($yearnow + $monthnow + $daynow);
    $date2 = date_create("2022-12-24");
    $dateDifference = date_diff($date1, $date2)->format('%y years, %m months and %d days');
    echo "<br/> Days to Christmas: " . $dateDifference;


    $date1 = new DateTime('today');
    $date2 = new DateTime('2022-12-24');
    $difference = $date1->diff($date2);
    echo "<br/>days to xmas" . $difference->format('%R%a days');

    $dagens_datum = $yearnow + $monthnow + $daynow;
    $helgdagens_datum = "20221224";
    $skillnaden = $helgdagens_datum - $dagens_datum;
    $dagar  = "86400";
    $dagar_kvar = $skillnaden / $dagar;
    echo " <br/>Nedräkning till jul " . $dagar_kvar;
    echo "<br/>" .  $dagens_datum - $helgdagens_datum ;
    echo "<br/><br/><br/>";

    $datum1 = date_create('now');
    $intval = date_diff($datum1,$date2);
    echo $intval->format("Skillnaden är : %a days");


?>
</body>
</html>