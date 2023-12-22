<?php error_reporting(0)?>
<div class="container d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom" id="headerstyle">
        <h2 class="my-0 mr-md-auto font-weight-normal">Спокойствие</h2>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="index.php">Главная</a>
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contact.php">Контакты</a>
        </nav>
        <?php 
        if($_COOKIE['user'] == 'true'):
        ?>
        <a class="btn btn-outline-primary" href="login.php">Выйти</a>
         <?php else: ?>
        <a class="btn btn-outline-primary" href="login.php">Войти</a>
         <?php endif; ?>
    </div>

    