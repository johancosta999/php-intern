<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include __DIR__ . '/component/head.php';
    ?>
    <title>If else</title>
</head>
<body>
<?php 
        include __DIR__ . '/component/navbar.php';
?>

<?php 

$day = 'wednesday';

switch ($day) {
    case 'monday':
        echo 'Today is ' .$day;
        break;

    case 'tuesday':
        echo 'Today is ', $day;
        break;

    default:
    echo 'Wrong date. Today is ', $day;
    break;
}

echo '<br>';

for($i = 1; $i <= 5; $i++) {
    echo 'Day ', $i, '. Today is ', $day; 
    echo '<br>';
}

$students = ['johan', 'kamal', 'nimal'];

foreach($students as $student) {
    echo 'My name is ', $student;
    echo '<br>';
}

$input = 0;


echo '<br>';

for( $input = 1; $input <= 100; $input++) {
    $square = $input * $input;
        echo 'Square of ', $input, ' is ', $square;
        echo '<br>';
}

echo '<br>';

$students = ['sudarshana', 'kasun', 'chamari'];

foreach($students as $student) {
    echo 'Hi I am ', $student;
    echo '<br>';
};

echo '<br>';

for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}

?>
    
</body>
</html>

