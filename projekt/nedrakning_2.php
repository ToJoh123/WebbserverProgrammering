<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>time manipulation</title>
</head>
<body>
<h1>Welcome</h1>
    <li><a href="/nedrakning_1.php"> Projekt 1</a></li>
    <li><a href="/nedrakning_2.php"> Projekt 2</a></li>
    <li><a href="/nedrakning_3.php"> Projekt 3</a></li>
    <section><p>Tips!
För att räkna ut antal dagar till helgdagen så kan du arbeta efter följande utgångspunkt för din uträkning:

skillnaden = helgdagens datum - dagens datum <br>dagar kvar = (int) skillnaden/86400</p></section>



 <section>
    <?php
    
    $datenow = getdate();
    echo "today's date:<br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . '<br/>';
    echo $datenow['year'] . '<br/>';

    print date("y/m/d G.i:s<br>", time()) . '<br/>';
    print "today is ";
    print date("j o F Y, \a\\t g.i a", time());

    echo "******* <br/><br/><br/> ";

    $first_date = new DateTime("2012-11-30 17:03:30");
    $second_date = new DateTime("2012-12-21 00:00:00");
    $difference = $first_date->diff($second_date);
    /**
 * Format an interval to show all existing components.
 * If the interval doesn't have a time component (years, months, etc)
 * That component won't be displayed.
 *
 * @param DateInterval $interval The interval
 *
 * @return string Formatted interval string.
 */
function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y years "); }
    if ($interval->m) { $result .= $interval->format("%m months "); }
    if ($interval->d) { $result .= $interval->format("%d days "); }
    if ($interval->h) { $result .= $interval->format("%h hours "); }
    if ($interval->i) { $result .= $interval->format("%i minutes "); }
    if ($interval->s) { $result .= $interval->format("%s seconds "); }

    return $result;
}
echo format_interval($difference) . "<br/>";

$today = strtotime("2011-02-03 00:00:00");
$myBirthDate = strtotime("1964-10-30 00:00:00");
printf("Days since my birthday: ", ($today - $myBirthDate)/60/60/24);


$date1 = date_create("2007-03-24");
$date2 = date_create("2009-06-26");

$dateDifference = date_diff($date1, $date2)->format('%y years, %m months and %d days');

echo "<br/> Days since my birthday: " . $dateDifference;




    ?> 
    </section>
</body>
</html>