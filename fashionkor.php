<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문서</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    
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
          <li><a href="#">남성</a></li>
          <li><a href="#">여성</a></li>
          <li><a href="#">어린이 컬렉션</a></li>
          <li><a href="#">청소년</a></li>
      </ul>
      <a href="fashionrus.php" class="btn">rus</a>
      <a href="fashion.php" class="btn">eng</a>
      <button class="btnlogin">로그인</button>
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
          <h2>최고의<br>패션 스타일<br>찾기</h2>
          <p>로렘 입숨 페인 비 아멧, 콘세츄르 아피싱 엘리트<br>
              모든 사람의 애도의 문.</p>
              <button class="shop_now">지금 쇼핑</button>  
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
      <h2>패션 스타일의 종류</h2>
      <p style="justify-content: center;">다양한 패션 스타일 중에서 자신의 성격과 맞는 하나를 고르는 것은 어려울 수 있습니다.</p>
    </div>
    <div class="type-style-grid" data-aos="fade-up">
      <div class="grid1">
        <img src="img/grid-img2.png" alt="">
        <button class="type-style-btn" data-style="classic">클래식</button>
      </div>
      <div class="grid2">
        <img src="img/grid-img1.png" alt="">
        <button class="type-style-btn" data-style="streetwear">스트릿웨어</button>
      </div>
      <div class="grid3">
        <img src="img/grid-img3.png" alt="">
        <button class="type-style-btn" data-style="punk">펑크</button>
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
        styleDescription.innerText = "클래식 스타일은 타임리스하고 우아하며, 타일러드 옷들과 중립적인 색상으로 이루어져 있습니다.";
        break;
        case "streetwear":
        styleDescription.innerText = "스트릿웨어 스타일은 도시 문화에서 영감을 받아 크고 편안한 옷들이 특징입니다.";
        break;
        case "punk":
        styleDescription.innerText = "펑크 스타일은 반항적이고 도전적이며, 가죽, 스터드 및 파손된 옷들이 특징입니다.";
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
          <h2>2023년 이래 가장 멋진 패션</h2>
          <p>매 시즌 나오는 주요 트렌드를 따르세요. 모든 시즌, 패션 디자이너들은 이번 시즌 유행하는 주요 트렌드에 맞는 새로운 컬렉션을 선보입니다. 주요 트렌드에는 옷의 색상, 프린트, 직물의 질감, 스타일 및 디테일이 포함됩니다.</p>
      </div>
      <img class="img-dot dot4" src="img/Group 20.png" alt="" data-aos="fade-right">
      <img class="img-dot dot5" src="img/Group 20.png" alt="" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
  </section>
  <section>
  <div class="slider">
    <div class="slider__wrapper">
      <div class="slider__items">
        <div class="slider__item">
          <div class="slider_item_div" style="background-image: url(img/slider1.jpg); background-size: cover; display: flex; justify-content: center; align-items: center;">
            <div class="head">
              <h1>목표를 높게 설정하고 그곳에 도달할 때까지 멈추지 마십시오</h1>
          </div></div>

        </div>
        <div class="slider__item">
          <div class="slider_item_div" style="background-image: url(img/slider2.jpg); background-size: cover; display: flex; justify-content: center; align-items: center; "><div class="head">
            <h1></h1>
        </div></div>
          
        </div>
        <div class="slider__item">
          <div class="slider_item_div" style="background-image: url(img/slider3.jpg); background-size: cover; display: flex; justify-content: center; align-items: center; "><div class="head">
            <h1>목표를 높게 설정하고 그곳에 도달할 때까지 멈추지 마십시오</h1>
        </div></div>
          
        </div>
        <div class="slider__item">
          <div class="slider_item_div" style="background-image: url(img/slider4.jpg); background-size: cover; display: flex; justify-content: center; align-items: center; "><div class="head">
            <h1>목표를 높게 설정하고 그곳에 도달할 때까지 멈추지 마십시오</h1>
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
        <span>코멘트</span>
        <h1>고객이 말합니다</h1>
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
                <p>조직의 업무, 특히 활동의 지속적인 정보 및 기술적 지원은 개발 모델의 정의와 개선을 필요로 합니다.</p>
            </div>
        </div>
     </div>
     
     
    </div>
    <div id="comments">
     여기에 댓글이 표시됩니다.
   </div>
   
   <form method="POST" action="">
    <label for="name">이름:</label>
    <input type="text" name="name" required>

    <label for="email">이메일:</label>
    <input type="email" name="email" required>

    <label for="comment">댓글:</label>
    <textarea name="comment" required></textarea>

    <button type="submit">제출</button>
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

<!-- 댓글 검색 폼 -->
<form method="post">
  <input type="text" name="search" placeholder="검색할 텍스트를 입력하세요">
  <button type="submit">검색</button>
</form>

 <section class="section-poll">
  <div class="poll-content">
    <h2>미니 투표</h2>
    <p>설문 조사를 진행하고 얼마나 독특한지 확인하세요</p>
    <a href="php/poll/poll.php" class="animated-button">투표 시작하기</a>
  </div>
</section>
<footer class="footer-distributed">
 <div class="popup" id="ModalOpen">
        <div class="popup-content" >
          <a href="http://htmlbook.ru/content/izobrazhenie-v-kachestve-ssylki"><img src="img/grid-img1.png" alt="이미지" /></a>
               <button type="button" class="btn-close" id="modal_close" onclick="closeModal();">닫기</button>  
        </div>
      </div>  
    <div class="footer-left">

        <p class="footer-links">
            <a href="#">홈</a>
            |
            <a href="#">소개</a>
            |
            <a href="#">연락처</a>
            |
            <a href="#">블로그</a>
        </p>

        <p class="footer-company-name">저작권 © 2021 <strong>SagarDeveloper</strong> All rights reserved</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>가지아바드</span>
                델리</p>
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
            <span>회사 소개</span>
            <strong>Sagar Developer</strong>은(는) CSS 애니메이션과 HTML, JavaScript 및 C/C++을 사용한 프로젝트와 함께 더 많은 창의적인 CSS 효과를 찾을 수 있는 유튜브 채널입니다.
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