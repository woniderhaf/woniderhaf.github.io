<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./style/Normalise.css">
    <link rel="stylesheet" href="./style/default.css">
    <link rel="stylesheet" href="./style/main.css">
    <script src="./js/link.js" defer></script>
    <title>Купи Работу</title>
</head>
<body>
    <?php include('header.php') ?>
    <section class="main">
        <div class="main__container">
            <div class="main__wrap main__wrap__title">
                <h2 class="main__title">Поддержка</h2>
                <button class="main__btn">Создать тикет <img src="./img/arrow__left.svg" alt=""></button>
            </div>
            <div class="main__wrap main__wrap__content">

                <div class="ticket">

                    <h2 class="ticket__title">Название тикета</h2>
                    <p class="ticket__text">Maecenas vestibulum libero turpis, eu efficitur eros vehicula a. Duis fermentum fermentum tortor semper vulputate. Sed arcu est, tincidunt vel mi </p>

                    <div class="ticket__data">

                        <div class="in__progress">
                            <img src="./img/support/clock .svg" alt="">
                            <p>В процессе</p>
                        </div>

                        <div class="requestDate">
                            <img src="./img/support/calendar.svg" alt="">
                            <p>Дата запроса</p>
                        </div>
                        <p class="data">11.02.21</p>
                    </div>

                </div>

                <div class="ticket">

                    <h2 class="ticket__title">Название тикета</h2>
                    <p class="ticket__text">Maecenas vestibulum libero turpis, eu efficitur eros vehicula a. Duis fermentum fermentum tortor semper vulputate. Sed arcu est, tincidunt vel mi </p>

                    <div class="ticket__data">

                        <div class="in__progress">
                            <img src="./img/support/clock .svg" alt="">
                            <p>В процессе</p>
                        </div>

                        <div class="requestDate">
                            <img src="./img/support/calendar.svg" alt="">
                            <p>Дата запроса</p>
                        </div>
                        <p class="data">11.02.21</p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <?php include('footer.php') ?>
</body>
</html>