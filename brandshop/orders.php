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
    <link rel="stylesheet" href="./style/orders.css">
    <script src="./js/link.js" defer></script>
    <title>Купи работу</title>
</head>
<body>
    <?php include('header.php') ?>

    <div class="main">
        <div class="main__container">
            <h2 class="main__title">Мои заказы</h2>
            <div class="orders">

                <a href="#">
                    <div class="order">
                        <div class="order__block">
                            <h3 class="order__title">Название заказа</h3>
                            <div class="order__block__text">
                                <p class="order__predmet">Предмет, </p>
                                <p class="order__type"> Тип задачи</p>
                            </div>
    
                        </div>
                       <div class="order__status_search"> <!--  поиск -->
                            <p>Подбор исполнителей</p>
                        </div>
                    </div>
                </a>
                
                <a href="#">
                    <div class="order">
                        <div class="order__block">
                            <h3 class="order__title">Название заказа</h3>
                            <div class="order__block__text">
                                <p class="order__predmet">Предмет, </p>
                                <p class="order__type"> Тип задачи</p>
                            </div>
    
                        </div>
                       <div class="order__status_canceled"> <!--  поиск -->
                            <p>Заказ отменен</p>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="order">
                        <div class="order__block">
                            <h3 class="order__title">Название заказа</h3>
                            <div class="order__block__text">
                                <p class="order__predmet">Предмет, </p>
                                <p class="order__type"> Тип задачи</p>
                            </div>
    
                        </div>
                       <div class="order__status_in-work"> <!--  поиск -->
                            <p>цена: <span>1234  ₽</span></p>
                            <p class="executor">Исполнитель </p>
                            <p class="nickname">НИК</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>
</html>