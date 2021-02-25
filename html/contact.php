<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/toiawase.css" />
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <link rel="stylesheet" href="../css/swiper.min.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@700&display=swap" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet" />

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet" />
  <title>コハダンジコンタス神奈川支部　公式HP</title>
</head>

<body>
  <header>
    <div class="header-nav">
      <div class="header-title">
        <a href="./index.html"> ACCC KANAGAWA</a>
      </div>
      <div class="header-image">
        <img src="../img/cropped_1267e4e91d7646eb6af0b53ccc7f6a08_1_w_trans.png" alt="" />
      </div>
      <div class="hum">
        <a class="hum-menu">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
      <div class="black"></div>
      <div class="nav-items">
        <h4 class="hum-title">Cordao de Contas</h4>
        <ul class="nav-list">
          <li class="left border-line-right">
            <a href="./index.html" class="border-line">Home</a>
          </li>
          <li class="border-line-right">
            <a href="./about.html" class="border-line">About Capoeira</a>
          </li>
          <li class="border-line-right">
            <a href="./teacher.html" class="border-line">Teacher</a>
          </li>

          <li class="class-info">
            <a class="border-line"><span class="class-span">Class</span>

              <i class="fas fa-angle-down down"></i>

            </a>

            <ul class="dropdown">
              <a href="./class.html" class="list-colmun">
                <li>
                  <i class="fas fa-angle-right list"></i>
                  <h4>クラス一覧</h4>
                </li>
              </a>
              <li>
                <a href="./hongoudai.html" class="drop-item">
                  <i class="fas fa-angle-right" style="margin-right: 1%"></i>本郷台</a>
              </li>
              <li>
                <a href="./hujisawa.html" class="drop-item"><i class="fas fa-angle-right" style="margin-right: 1%"></i>藤沢本町</a>
              </li>
              <li>
                <a href="./yokohama.html" class="drop-item"><i class="fas fa-angle-right" style="margin-right: 1%"></i>横浜</a>
              </li>
            </ul>
          </li>

          <li class="border-line-right left ryoukin">
            <a href="./price.html" class="border-line">Price</a>
          </li>
          <li class="border-line-right">
            <a href="./contact.php" class="border-line">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <section class="contact">
      <div class="sentence" style="margin-bottom: 10%">
        <h3 class="title">
          Contact us <span>:</span><br class="c-title-br" />
          お問い合わせ
        </h3>
        <p style="padding-top: 5%">
          体験予約・見学予約・ご質問等ございましたら、<br class="br-1" />お気軽に下記フォームもしくは下記メールアドレス、あるいはお電話にてお問い合わせ下さい。
        </p>
        <p>
          フォームもしくはメールの場合、後日下記メールアドレスより担当者が返信させていただきます。
        </p>
        <i>
          Tell :<br class="br-2" />
          090-4675-3002 <br />
          Mail :<br class="br-2" />
          albatroz1975out18@ybb.ne.jp
        </i>

        <form action="../php/input.php" method="POST">
          <p>氏名(必須)</p>
          <input type="text" name="data[name]" placeholder="必須" id="name" />
          <p>メールアドレス(必須)</p>
          <input type="email" name="data[mailadress]" placeholder="必須" id="adress" />
          <p>お問い合わせ内容</p>
          <textarea name="data[content]" id="" cols="30" rows="10" id="content"></textarea>
          <button type="submit">送信</button>
        </form>
      </div>
    </section>
  </main>
  <footer>
    <h4>
      cordao<br class="footer-logo-br" />
      de<br class="footer-logo-br" />
      contas
    </h4>

    <ul>
      <p>SITEMAP</p>
      <li><a href="./about.html">about caoeira</a></li>
      <li><a href="./teacher.html">teacher</a></li>
      <li><a href="./class.html">class</a></li>
      <li><a href="./price.html">price</a></li>
      <li><a href="./contact.html">contact us</a></li>
    </ul>
  </footer>

  <script>
    if (window.matchMedia("(min-width: 1000px)").matches) {
      $(function() {
        $(window).scroll(function() {
          $(function() {
            var imgPos = $("section").offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > imgPos) {
              $(".header-nav").css("height", "6vh");
              $(".header-title").css("display", "none");
              $(".nav-items").css("top", "0");
            }
          });
          $(function() {
            var imgPos = $("section").offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (imgPos > scroll) {
              $(".header-nav").css("height", "13vh");
              $(".header-title").css("display", "block");
              $(".nav-items").css("top", "6vh");
            }
          });
        });
      });
    }
    $(function() {
      $(window).scroll(function() {
        $(function() {
          var imgPos = $("section").offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > imgPos) {
            $(".header-nav").addClass("bcgi-off");
          }
        });
        $(function() {
          var imgPos = $("section").offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (imgPos > scroll) {
            $(".header-nav").removeClass("bcgi-off");
          }
        });
      });
    });
    $(function() {
      $(".hum").click(function() {
        $(".black").toggleClass("black-bg");
        $(".hum").toggleClass("batsu");
        $(".nav-items").toggle("linear");
      });
    });


    if (window.matchMedia("(min-width: 999px)").matches) {
      $(function() {
        $(".class-info").click(function() {
          $(".dropdown").stop(true, false).slideToggle("linear");
        });
      });
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
  <script src="../js/in.js"></script>
</body>

</html>