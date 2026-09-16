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

$marks= 60;

if($marks >= 75) {
    $grade = 'A';
}

else if ($marks >= 55 && $marks <75) {
    $grade = 'B';
}

else {
    $grade = 'C';
}

echo $grade;

?>
    
</body>
</html>

