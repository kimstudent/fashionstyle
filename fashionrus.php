<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
                     
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body>
  <div id="preloader">
  <div class="loader">
  </div>
</div>

  
    <script>
      window.addEventListener("load", function () {
const preloader = document.getElementById("preloader");
preloader.classList.add("hide");
setTimeout(function () {
preloader.remove();
}, 2000);
});
    </script>
  <header>
      <h2 href="#" class="logo">FASHION</h2>
      <ul class="navigation">
          <li><a href="#">Мужчины</a></li>
          <li><a href="#">Женщины</a></li>
          <li><a href="#">Дети</a></li>
          <li><a href="#">Подростки</a></li>
      </ul>
      <a href="fashion.php" class="btn">eng</a>
      <a href="fashionkor.php" class="btn">kor</a>
      <button class="btnlogin">LOGIN</button>
  </header>
  <style>
  .btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #34251F;
  color: #ffffff;
  text-decoration: none;
  border-radius: 5px;
  margin: 10px;
}

</style>
    <!--////////////////////////////////////////////////////////////////////////////////////////////-->

  <section class="content">      
  <div class="textBox">
          <h2>Найдите лучший <br>стиль моды <br>для вас</h2>
          <p>Лорем ипсум пейн би амет, консектетур аписцинг <br>элит. 
              Вход в горе каждого. 
              Аэнеан <br> беременная ми ац молестие местибулум</p>
              <button class="shop_now">КУПИТЬ СЕЙЧАС</button>  
      </div>
      <div class="imgBox">
          <img src="img/img1.png" alt="">
      </div>
      <img class="img-dot dot1" src="img/Group 16.png" alt="">
      <img class="img-dot dot2" src="img/Group 16.png" alt="">
      <img class="img-dot dot3" src="img/Group 16.png" alt="">
  </section>
  
    <!--////////////////////////////////////////////////////////////////////////////////////////////-->
    
    <section class="type-style">
    <div class="type-style-text" data-aos="zoom-in">
      <h2>Виды стилей моды</h2>
      <p style="justify-content: center;">С таким большим количеством различных стилей моды может быть сложно выбрать тот, который подходит вашей личности.</p>
    </div>
    <div class="type-style-grid" data-aos="fade-up">
      <div class="grid1">
        <img src="img/grid-img2.png" alt="">
        <button class="type-style-btn" data-style="classic">КЛАССИКА</button>
      </div>
      <div class="grid2">
        <img src="img/grid-img1.png" alt="">
        <button class="type-style-btn" data-style="streetwear">СТРИТВИР</button>
      </div>
      <div class="grid3">
        <img src="img/grid-img3.png" alt="">
        <button class="type-style-btn" data-style="punk">ПАНК</button>
      </div>
    </div>
  </section>

  <script>
    // Получаем все кнопки на странице, имеющие класс "type-style-btn"
const buttons = document.querySelectorAll(".type-style-btn");

// Для каждой кнопки добавляем обработчик события "click"
buttons.forEach((button) => {
  button.addEventListener("click", () => {

    // Получаем изображение, которое соответствует кнопке
    const img = button.parentNode.querySelector("img");

    // Создаем новый элемент - белый блок
    const whiteBox = document.createElement("div");
    whiteBox.classList.add("white-box");

    // Создаем новый элемент - описание стиля
    const styleDescription = document.createElement("div");
    styleDescription.classList.add("style-description");

    // В зависимости от того, какой стиль выбран, задаем соответствующее описание стиля
    switch (button.getAttribute("data-style")) {
      case "classic":
        styleDescription.innerText = "Классический стиль вечен и элегантен, отличается подогнанными деталями и нейтральными цветами.";
        break;
     case "streetwear":
        styleDescription.innerText = "Уличный стиль вдохновлен городской культурой, отличается большими и комфортными вещами.";
        break;
     case "punk":
        styleDescription.innerText = "Панк-стиль бунтарский и острым, использует кожу, заклепки и изношенную одежду.";
        break;
    }

    // Добавляем белый блок и описание стиля после изображения
    img.parentNode.appendChild(whiteBox);
    whiteBox.appendChild(styleDescription);

    // Скрываем изображение и кнопку, которую нажали
    img.classList.add("hide");
    button.classList.add("hide");

    // Показываем белый блок и описание стиля
    whiteBox.classList.add("show");
    styleDescription.classList.add("show");

    // Добавляем обработчик события "click" на белый блок, чтобы скрыть его
    whiteBox.addEventListener("click", () => {
      whiteBox.classList.remove("show");
      styleDescription.classList.remove("show");
      img.classList.remove("hide");
      button.classList.remove("hide");

      // Через полсекунды удаляем белый блок из DOM-дерева
      setTimeout(() => {
        whiteBox.remove();
      }, 500);
    });
  });
});

  </script>
      
      <!--////////////////////////////////////////////////////////////////////////////////////////////-->

      <section class="fashion2023">
      <div class="fasion2023-img" data-aos="fade-right">
          <img src="img/imgfashion.png" alt="">
      </div>
      <div class="fashion2023-text" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
          <h2>Лучшая мода <br>
              С 2023 года</h2>
          <p>Следуйте за главными тенденциями, которые появляются каждый сезон. Каждый сезон модные дизайнеры представляют свои новые коллекции, которые соответствуют основным тенденциям, которые в моде в этом сезоне. Основные тенденции включают цвета, принты, текстуры тканей, стили и детали одежды.</p>
      </div>
      <img class="img-dot dot4" src="img/Group 20.png" alt="" data-aos="fade-right">
      <img class="img-dot dot5" src="img/Group 20.png" alt="" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
  </section>

<!--////////////////////////////////////////////////////////////////////////////////////////////-->


<section>
  <div class="slider">
    <div class="slider__wrapper">
      <div class="slider__items">
        <div class="slider__item">
          <div class="slider_item_div" style="background-image: url(img/slider1.jpg); background-size: cover; display: flex; justify-content: center; align-items: center;">
            <div class="head">
              <h1>Установите высокие цели и не останавливайтесь, пока не достигнете их</h1>
          </div></div>
          </div>
    <div class="slider__item">
      <div class="slider_item_div" style="background-image: url(img/slider2.jpg); background-size: cover; display: flex; justify-content: center; align-items: center; "><div class="head">
        <h1></h1>
    </div></div>
      
    </div>
    <div class="slider__item">
      <div class="slider_item_div" style="background-image: url(img/slider3.jpg); background-size: cover; display: flex; justify-content: center; align-items: center; "><div class="head">
        <h1>Установите высокие цели и не останавливайтесь, пока не достигнете их</h1>
    </div></div>
      
    </div>
    <div class="slider__item">
      <div class="slider_item_div" style="background-image: url(img/slider4.jpg); background-size: cover; display: flex; justify-content: center; align-items: center; "><div class="head">
        <h1>Установите высокие цели и не останавливайтесь, пока не достигнете их</h1>
    </div></div>
      
    </div>
  </div>
</div>
<a class="slider__control slider__control_prev" href="#" role="button"></a>
<a class="slider__control slider__control_next" href="#" role="button"></a>
  </div>
</section>



 <!--////////////////////////////////////////////////////////////////////////////////////////////-->

 <section id="testimonials">
    <div class="ts-head">
        <span>Комментарии</span>
        <h1>Отзывы клиентов</h1>
    </div>
 
    <div class="box">
    <div class="ts-box">
        <div class="box-top">
            <div class="profile">
                <div class="prof-img">
                    <img src="img/Group 11 (4).png" alt="">
                </div>
                <div class="name-user">
                    <strong>Touseeq Ijaz</strong>
                    <span>@touseeqijazweb</span>
                </div>
            </div>
            <div class="reviews">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        <div class="client-com">
            <p>Задача организации, в частности постоянная информационно-техническая поддержка нашей деятельности, требует определения и уточнения модели развития.</p>
        </div>
    </div>
 </div>
 
 
</div>
<div id="comments">
 здесь будут отображаться комментарии 
   </div>
   
   <form method="POST" action="">
    <label for="name">Имя:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="comment">Комментарий:</label>
    <textarea name="comment" required></textarea>

    <button type="submit">Отправить</button>

</form>

 </section> 
 <?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'comments_db';

// Подключение к базе данных
$connection = mysqli_connect($host, $user, $password, $db);

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем значения полей формы
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';


    // Сохраняем комментарий в базе данных
    $query = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";
    mysqli_query($connection, $query);
    // Перенаправляем пользователя на страницу с комментариями
    //header('Location: fashion.php');
    // exit;
}

// Получаем список комментариев из базы данных
$query = "SELECT * FROM comments ORDER BY created_at DESC";
$result = mysqli_query($connection, $query);

// Выводим список комментариев на страницу
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="comment">';
    echo '<h3>' . $row['name'] . ' (' . $row['email'] . ')</h3>';
    echo '<p>' . $row['comment'] . '</p>';
    echo '<p>' . $row['created_at'] . '</p>';
    echo '</div>';
}

// Обработка отправки формы поиска
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Получаем значение поля поиска
  $search = $_POST['search'];
  
  // Формируем SQL-запрос на поиск комментариев, содержащих искомый текст
  $qwerty = "SELECT * FROM comments WHERE comment LIKE '%$search%' ORDER BY created_at DESC";
  $result = mysqli_query($connection, $query);
  
  // Выводим список найденных комментариев
  while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="comment">';
      echo '<h3>' . $row['name'] . ' (' . $row['email'] . ')</h3>';
      echo '<p>' . $row['comment'] . '</p>';
      echo '<p>' . $row['created_at'] . '</p>';
      echo '</div>';
  }
} else {
  // Если форма не отправлена, выводим все комментарии из базы данных
  $query = "SELECT * FROM comments ORDER BY created_at DESC";
  $result = mysqli_query($connection, $query);
  
  // Выводим список комментариев на страницу
  while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="comment">';
      echo '<h3>' . $row['name'] . ' (' . $row['email'] . ')</h3>';
      echo '<p>' . $row['comment'] . '</p>';
      echo '<p>' . $row['created_at'] . '</p>';
      echo '</div>';
  }
}
?>

<!-- Форма для поиска комментариев -->
<form method="post">
  <input type="text" name="search" placeholder="Введите текст для поиска">
  <button type="submit">найти</button>
</form>

<section class="section-poll">
  <div class="poll-content">
    <h2>Мини-опрос</h2>
    <p>Пройдите опрос и узнайте, насколько вы уникальны</p>
    <a href="php/poll/poll.php" class="animated-button">Начать опрос</a>
  </div>
</section>


<footer class="footer-distributed">
 <div class="popup" id="ModalOpen">
        <div class="popup-content" >
          <a href="http://htmlbook.ru/content/izobrazhenie-v-kachestve-ssylki"><img src="img/grid-img1.png" alt="Изображение" /></a>
               <button type="button" class="btn-close" id="modal_close" onclick="closeModal();">Закрыть</button>  
        </div>
      </div>  
      <p class="footer-links">
        <a href="#">Главная</a>
        |
        <a href="#">О нас</a>
        |
        <a href="#">Контакты</a>
        |
        <a href="#">Блог</a>
    </p>

    <p class="footer-company-name">Авторские права © 2021 <strong>SagarDeveloper</strong> Все права защищены</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Газиабад</span>
            Дели</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+91 74**9**258</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>О компании</span>
        <strong>Sagar Developer</strong> - это канал на YouTube, где вы можете найти более креативные CSS-анимации
        и
        эффекты, а также HTML, JavaScript и проекты, использующие C/C++.
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="https://vk.com/tired_reader"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/@JoJoShizo"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>

<!--////////////////////////////ANIMATION SCROLL///////////////////////////////////////////////////////-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
      duration: 3000,
      once: true,
    });
  </script>
<!--////////////////////////////////////////////////////////////////////////////////////////////-->

<script>

</script>

<script>

function closeModal(){
    var modal = document.getElementById('ModalOpen');
    modal.style.display = 'none';
  }
  
  function shwoModal(){
    var modal = document.getElementById('ModalOpen');
    modal.style.display = 'block';
  }

const button = document.querySelector(".btnlogin");
button.addEventListener("click", function() {
    window.location.href = "php/reg/register.php";
});


</script>

<script src="js/slider.js" ></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
</body>
</html>