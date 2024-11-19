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
    <title>Finstar - About Us</title>
</head>
<body>
    <!-- Connecting header block -->
    <?php include("layouts/header.php"); ?>

    <!-- Hero block -->
    <div class="hero">
        <div class="page-nav">
            <span>Главная > <b>О компании</b></span>
        </div>

        <div class="container-hero">
            <div class="text">
                <span>Профессиональное управление инвестициями с 2005 года</span>
                <h2>ООО «Управляющая компания «Finstar»</h2>
            </div>

            <img src="/public/images/hero-logo.png" alt="Finstar">
        </div>
    </div>

    <!-- Advantages block -->
    <div class="advantages">
        <div class="container-advantages">
            <div class="block">
                <h3>#1</h3>
                <span>12 паевых инвестиционных фондов в управлении</span>
            </div>
            <div class="block">
                <h3>#2</h3>
                <span>43,00 млрд ₽ — объем активов на 11.12.2023</span>
            </div>
            <div class="block">
                <h3>#3</h3>
                <span>Более 80 тысяч клиентов управляющей компании</span>
            </div>
        </div>
    </div>

    <!-- Connecting footer block -->
    <?php include("layouts/footer.php"); ?>
</body>
</html>