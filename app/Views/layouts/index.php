<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="stylesheet" href="/public/css/header.css">
    <link rel="stylesheet" href="/public/css/footer.css">
    <link rel="stylesheet" href="/public/css/about.css">
    <!-- Title -->
    <title>Finstar</title>
</head>
<body>
    <!-- Connecting header block -->
    <?php include("header.php"); ?>

    <!-- Connecting about page -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/app/Views/about.php"); ?>
    
    <!-- Connecting footer block -->
    <?php include("footer.php"); ?>
</body>
</html>