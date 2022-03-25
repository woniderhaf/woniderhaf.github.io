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
    <link rel="stylesheet" href="./style/place.css">
    <script src="./js/link.js" defer></script>
    <title>Купи работу</title>
</head>
<body>

    <?php include('header.php') ?>

    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1 class="main__title">Размещение заказа</h1>
                <hr>
                <form action="#" class="main__form">

                    <div class="main__form__left">

                        <label for="jobs">Тип работы</label>
                        <select required id="jobs">
                            <option selected  disabled>Выберите тип работы</option>
                            <option value="Physical">Физическая</option>
                            <option value="computer">Работа с компьютером</option>
                            <option value="furniture">Работа с Мебелью</option>
                            <option value="husband">Муж на час</option>
                        </select>

                        <label for="thing">Предмет</label>
                        <select required id="thing">
                            <option selected  disabled>Введите ваш предмет</option>
                            <option value="Physical">Физическая</option>
                            <option value="computer">Работа с компьютером</option>
                            <option value="furniture">Работа с Мебелью</option>
                            <option value="husband">Муж на час</option>
                        </select>

                        <label for="title">Название</label>
                        <select required id="title" >
                            <option selected  disabled>Введите название</option>
                            <option value="Physical">Физическая</option>
                            <option value="computer">Работа с компьютером</option>
                            <option value="furniture">Работа с Мебелью</option>
                            <option value="husband">Муж на час</option>
                        </select>
                        <div class="input__date">
                            <label for="date">Срок сдачи</label>
                            <input required id="date" type="date">
                        </div>

                        <label for="price">Цена</label>
                        <input required id="price" type="number" placeholder="Введите вашу цену">

                        <label for="originality">Требуемая оригинальность</label>
                        <input id="originality" type="text" placeholder="Требуемая оригинальность">

                        <button class="main__form__left__btn" type="sumbit">Разместить заказ</button>
                    </div>

                    <div class="main__form__right">

                        <label for="comment">Описание работы</label>
                        <textarea required name="comment" id="comment" cols="50" minlength="30"></textarea>

                        <button class="newFile"><img src="./img/newFile.svg" alt="">Добавить файл</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    <?php include('footer.php') ?>
</body>
</html>