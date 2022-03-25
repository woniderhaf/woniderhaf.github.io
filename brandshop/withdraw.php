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
    <link rel="stylesheet" href="./style/replenishment.css">
    <script src="./js/link.js" defer></script>
    <script src="./js/personal.js" defer></script>
    <title>Купи работу</title>
</head>
<body>
    
<?php include('header.php') ?>

<div class="main">
    <div class="main__container">
        <div class="main__wrap">
            <div class="main__buttons">
                <button class="main__replenishment">Пополнение баланса</button>
                <button class="main__withdraw withdraw active">Вывести деньги</button>
            </div>
            <div class="main__content">
                <form action="#" class="main__form">
                    <label class="money__label" for="money">Введите сумму: </label>
                    <input type="number" id="money" max="10000" >
                    <button class="payment">Отправить заявку</button>
                </form>
            </div>
            <div class="rescue">
                <p>Выберете способ</p>
                <div class="cards">
                    <a href="#"><img src="./img/oplata/visa.png" alt=""></a>
                    <a href="#"><img src="./img/oplata/masterCard.png" alt=""></a>
                    <a href="#"><img src="./img/oplata/Yandex.png" alt=""></a>
                    <a href="#"><img src="./img/oplata/webMoney.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>

</body>
</html>