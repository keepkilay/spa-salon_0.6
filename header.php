<?php error_reporting(0)?>
<?
require_once ("functions.php");
?>
<div class="container d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom pt-2" id="headerstyle">
        <h2 class="my-0 mr-md-auto font-weight-normal">Спокойствие</h2>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="index.php">Главная</a>
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contact.php">Контакты</a>
        

        <?php if(isset($_SESSION['user'])):?>
          <a class="me-3 py-2 link-body-emphasis text-decoration-none"> <?php echo $_SESSION['user']; ?></a>
           <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="login.php?exit=Y">Выйти</a>
        <?php else: ?>
          <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="login.php">Войти</a>
         <?php endif; ?>
        </nav>
</div>



    