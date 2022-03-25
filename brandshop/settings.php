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
    <link rel="stylesheet" href="./style/personal.css">
    <script src="./js/link.js" defer></script>
    <script src="./js/personal.js" defer></script>
    <title>Купи работу</title>
</head>
<body>
    <?php include('header.php') ?>

    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h2 class="main__title">Настройки</h2>
                <hr>
                <div class="main__data__one">
                    <div class="img">
                        <img src="./img/personal_account/username.svg" alt="">
                        <img class="point point__user" src="./img/personal_account/point.svg" alt="">
                    </div>
                    <div class="main__data__one__text">
                        <span>Фахрединов Кирилл Марсович<img class="point" src="./img/personal_account/point.svg" alt=""></span>
                        <span>Email: <p>  Physics56@bk.ru</p><img class="point" src="./img/personal_account/point.svg" alt=""></span>

                    </div>
                </div>
                <hr>
                <h2 class="main__education">Образование</h2>
                <form action="#" class="main__form__education">
                    <input class="educational__institution" type="text" placeholder="Учебное заведение">
                    <input class="faculty" type="text" placeholder="Факультет">
                    <input class="speciality" type="text" placeholder="Специальность">
                    <select name="status" id="status" class="status">
                        <option selected disabled>Статус</option>
                        <option value="">Учусь</option>
                        <option value="">закончил</option>
                    </select>
                    <input class="well" type="text" placeholder="Курс">
                    <button type="submit" class="education__btn">Сохранить</button>
                </form>
                <hr>
                <h2 class="main__password">Пароль</h2>
                <form action="#" class="main__password">
                    <div class="pass__new__one">
                        <label for="pass__new__one"><img  class="eye1" src="./img/eye.svg" alt=""></label>
                        <input id="pass__new__one" type="password" placeholder="Новый пароль">
                    </div>
                    <div class="pass__new__two">
                        <label for="pass__new__two"><img class="eye2"  src="./img/eye.svg" alt=""></label>
                        <input id="pass__new__two" type="password" placeholder="Новый пароль ещё раз">
                    </div>
                    <div class="pass__old">
                        <label for="pass__old"><img class="eye3"  src="./img/eye.svg" alt=""></label>
                        <input id="pass__old" type="password" placeholder="Старый пароль">
                    </div>
                    <button type="submit" class="password__btn">Изменить</button>
                </form>

            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
    
</body>
</html>