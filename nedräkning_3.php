<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nedräkning ver 3</title>
</head>
<body>
<h1>Welcome</h1>
    <li><a href="/nedräkning_1.php"> nedräkning_1</a></li>
    <li><a href="/nedräkning_2.php"> nedräkning_2</a></li>
    <li><a href="/nedräkning_3.php"> nedräkning_3</a></li>
    <?php
    /**
     * date create för att skapa datum 
     */
        $datum1 = date_create('now');
        $datum2 = date_create("2022-12-24");
        /**
         * date diff för att få ut hur många dagar emellan
         */
        $dagar = date_diff($datum1,$datum2);

        /**
         * format omvanda skillnaden till dagar se %a nedan
         */
        echo $dagar->format("tid kvar till julafton : %a dagar");
?>
</body>
</html>