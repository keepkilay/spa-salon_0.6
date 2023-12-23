<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP веб-сайт "Спокойствие"</title>
</head>

<body>
  <?php require_once "header.php" ?>

  <div class="container mt-3">
    <h3 class="mb-5">Наши фотографии</h3>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ресепшн</h4>
          </div>
          <div class="card-body">
            <img src="./img/reception.JPG" alt="" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <hr>
              <li>В зоне "ресепшн" вас встретит</li>
              <li>приятная девушка, которая подробно</li>
              <li>расскажет вам, что входит в вашу услугу.</li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Комната отдыха</h4>
          </div>
          <div class="card-body">
            <img src="./img/relax_room.JPG" alt="" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <hr>
              <li>Здесь вы можете расположиться</li>
              <li>после массажа и выпить чашку</li>
              <li>чего-нибудь горячего и тонизирующего.</li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm ">
          <div class="card-header py-3 ">
            <h4 class="my-0 fw-normal">Массажный зал</h4>
          </div>
          <div class="card-body">
            <img src="./img/work_case.JPG" alt="" class="img-thumbnail">
            <ul class="list-unstyled mt-3 mb-4">
              <hr>
              <li>Во время процесса, будет играть</li>
              <li>приятная, успокаивающая музыка.</li>
              <li>Под которую вы сможете максимально</li>
              <li>расслабиться и погрузиться в себя.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-body-tertiary bottom-50 p-5 rounded col-lg-12 mt-5 text-center">
      <h1>Индивидуальная акция!</h1><hr>
      <p class="lead"><strong>Новым клиентам нашего Спа-Салона "Спокойствие" действует АКЦИЯ на скидку</strong> <h2>35%</h2></p>
      <p class="lead"><strong>Для участия в акции необходимо купить абонемент на любой вид массажа от 4500 руб.</strong></p>
      <h4>До конца АКЦИИ осталось:</h4><hr>
      <div id="group">
        <span id="d" class="badge badge-success mr-3 p-3 fs-3"></span>
        <span id="h" class="badge badge-success p-3 mr-3 fs-3"></span>
        <span id="m" class="badge badge-success mr-3 p-3 fs-3"></span>
        <span id="s" class="badge badge-success p-3 fs-3"></span>
      </div>
    </div>
    <br><br>
    <h2 class='text-center mb-5 fw-bold'>Услуги</h2>
    <hr>
    <div class="bg-body-tertiary bottom-50 p-5 rounded ">
      <h1>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Расслабляющий массаж</font>
        </font>
      </h1>
      <hr>
      <p class="lead">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Для психического здоровья и улучшения общего самочувствия после тяжелых жизненных нагрузок.</font>
        </font>
      </p>
      <ul class='service__pricelist'>
        <li>60 минут — <span class='service__price'>3400₽</span></li>
        <li>90 минут — <span class='service__price'>4600₽</span></li>
        <li>120 минут — <span class='service__price'>6400₽</span></li>
      </ul>
    </div>
    <br>
    <div class="bg-body-tertiary p-5 rounded">
      <h1>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Ароматический масляный массаж</font>
        </font>
      </h1>
      <hr>
      <p class="lead">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Ойл массаж позволяет достичь омолаживающий и антицеллюлитный эффект, и так же избавиться от различных проблем и заболеваний.</font>
        </font>
      </p>
      <ul class='service__pricelist'>
        <li>60 минут — <span class='service__price'>3700₽</span></li>
        <li>90 минут — <span class='service__price'>5000</span></li>
        <li>120 минут — <span class='service__price'>7000₽</span></li>
      </ul>
    </div>
    <br>
    <div class="bg-body-tertiary p-5 rounded">
      <h1>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Стоун-терапия</font>
        </font>
      </h1>
      <hr>
      <p class="lead">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Для этого вида массажа применяются специальные камни вулканических пород,
            которые нагреваются до определенной температуры (40-50 градусов). В них содержится множество
            полезных веществ, включая железо и магний.</font>
        </font>
      </p>
      <ul class='service__pricelist'>
        <li>60 минут — <span class='service__price'>3600₽</span></li>
        <li>90 минут — <span class='service__price'>5400₽</span></li>
        <li>120 минут — <span class='service__price'>7300₽</span></li>
      </ul>
    </div>
    <br>
    <div class="bg-body-tertiary p-5 rounded">
      <h1>
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Спортивный массаж</font>
        </font>
      </h1>
      <hr>
      <p class="lead">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Техника спортивного массажа особенно рекомендована тем, кто ведет активный
            образ жизни, регулярно испытывает физические нагрузки. Массажные манипуляции помогут снизить боль,
            расслабить мышцы, нормализировать кровообращение и лимфопоток.</font>
        </font>
      </p>
      <ul class='service__pricelist'>
        <li>60 минут — <span class='service__price'>3000₽</span></li>
        <li>90 минут — <span class='service__price'>4700₽</span></li>
        <li>120 минут — <span class='service__price'>6900₽</span></li>
      </ul>
    </div>
    <br>
    <?php require_once "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>

</html>