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

    <!-- FAQ block -->
    <div class="faq">
        <div class="container-faq">
            <div class="img">
                <img src="/public/images/handshake.png" alt="Finstar">
                <div class="dots">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>

            <div class="questions">
                <h1>Деятельность Управляющей компании</h1>
                <div class="block active">
                    <div class="bar"></div>
                    <span>Доверительное управление паевыми инвестиционными фондами</span>
                </div>
                <div class="block">
                    <div class="bar"></div>
                    <span>Доверительное управление пенсионными резервами и пенсионными накоплениями</span>
                </div>
                <div class="block">
                    <div class="bar"></div>
                    <span>Создание фонда под параметры вашего проекта</span>
                </div>
                <div class="block">
                    <div class="bar"></div>
                    <span>Доверительное управление активами целевых капиталов (эндаумент-фондов)</span>
                </div>
                <div class="block">
                    <div class="bar"></div>
                    <span>Доверительное управление компенсационными фондами СРО</span>
                </div>
                <div class="block">
                    <div class="bar"></div>
                    <span>Доверительное управление средствами жилищного обеспечения накопительно-ипотечной системы военнослужащих</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Connecting footer block -->
    <?php include("layouts/footer.php"); ?>
</body>
</html>