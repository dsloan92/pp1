<?php
/** Name: Dallas Sloan
 *  Date Jan 6, 2019
 *  index.php
 * Pair Program 1
 */
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program</title>
</head>
<body>
    <h1>Pair Program</h1>
    <?php
    include ("functions.php");
    $numbers = array(7,9,8,9,8,8,6);
    $counts = distribution($numbers);
    echo "Printing of Initial Array <br>";
    printArr($numbers);
    $max = largest($numbers);
    echo "<br>".$max;
    echo "Array with no duplicates: <br>";
    removeDups($numbers);
    foreach ($counts as $key => $value){
        echo "Key: $key, Value: $value <br>";
    }

    ?>
</body>
</html>

