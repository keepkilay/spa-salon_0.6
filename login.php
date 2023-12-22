<?php error_reporting(0)?>
<?if($_COOKIE['user'] == 'true') header('location: /spa-salon4')?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Контактная форма</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once "header.php"?>
    <div class="container mt-5" >
    <h3>Контактная форма</h3>
    <form action="auth.php" method="post"><!--action-страница где будет происходить проверка формы-->
    <input type="login" name="login" placeholder="Введите ваш логин" class="form-control"><br>
    <input name="pass" class="form-control" placeholder="Введите ваш пароль"></input><br>
    <button type="sumbit" name="send" class="btn btn-success">Отправить</button><!--submit-нужна для того чтобы при нажатии на кнопку страница перезагружалась и данные отправлялись на страницу check.php-->
    </div>
    <?php require_once "footer.php"?>
</body>

</html>