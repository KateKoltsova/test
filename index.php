<?php
$text = 'Hello, World!';
$message = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>
        <?php echo $text;
            echo '<br>';
            echo $message;
        ?>
    </h1>

</body>
</html>