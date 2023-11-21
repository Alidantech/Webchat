<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/index.css">
    <?php echo "<link rel='stylesheet' href='assets/css/$route.css'>"; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="assets/js/index.js"></script>
    <?php echo "<title>$route</title>"; ?>
</head>

<body>

    <?php

        // Include header except for specific pages
        if (!in_array($route, ['chat'])) {
            require 'includes/header.php';
        }

        require $page;

        // Include footer except for specific pages
        if (!in_array($route, ['chat'])) {
            require 'includes/footer.php';
        }

    echo "<script type='module' src='assets/js/$route.js' defer></script>";

    ?>

</body>

</html>