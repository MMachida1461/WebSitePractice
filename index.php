<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wilih=device-wilih, initial-scale=1.0">
    <title>サイト模写</title>
    <!-- CSSの書き順。上から下になるので、sytle.cssを適用したいから下に記述 -->
    <link rel="stylesheet" href="./css/ress.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <div class="header_contents">
      <h1 class="title">
        <img src="./img/logo.svg" alt="MyWork">
      </h1>
    </div>
    <div class="header_menu">
      <ul class="menu_brock">
        <li class="menu_list">
          <a href="">About</a>
        </li>
        <li class="menu_list">
          <a href="">Works</a>
        </li>
        <li class="menu_list">
          <a href="">News</a>
        </li>
        <li class="menu_list">
          <a href="">Contact</a>
        </li>
        <li class="menu_list" id="instagram">
          <a href="https://www.instagram.com/"><img src="./img/icon-instagram.png" alt="instagram"></a>
        </li>
      </ul>
    </div>
  </header>
  <main class="main_contents">
    <div class="main_picture">
      <img src="./img/mainvisual-pc.jpg" alt="">
    </div>
    <div class="about">
      <h2>About</h2>
      <p>Xxxxx Ashley</p>
      <br>
      <br>
      <p class="access">2th Floor xxxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan</p>
      <p class="phone_number">tel: 000-0000-0000</p>
      <p class="url">url: www.xxxxxx.jp</p>
      <p class="mail">mail: xxx@xxxxxx.jp</p>
      <br>
      <br>
      <p>プロフィールテキストテキストテキストテキストテキストテキストテキストテキストテキストスト テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
    </div>
    <div class="works">
      <h2>Works</h2>
      <ul>
        <li><img src="./img/works1.jpg" alt=""></li>
        <li><img src="./img/works2.jpg" alt=""></li>
        <li><img src="./img/works3.jpg" alt=""></li>
      </ul>
      <ul>
        <li><img src="./img/works4.jpg" alt=""></li>
        <li><img src="./img/works5.jpg" alt=""></li>
        <li><img src="./img/works6.jpg" alt=""></li>
      </ul>
    </div>

    <div class="news">
    <h2>News</h2>
    <!-- PHPに配列作成し、その配列から取る形にする -->
     <div class="news_list">
      <ul>
        <li class="news_list_days">2020.XX.XX</li>
        <li>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</li>
      </ul>
      <ul>
        <li class="news_list_days">2020.XX.XX</li>
        <li>Ｘ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</li>
      </ul>
      <ul>
        <li class="news_list_days">2019.XX.XX</li>
        <li>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</li>        
      </ul>
      <ul>
        <li class="news_list_days">2019.XX.XX</li>
        <li>デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</li>
      </ul>
      <ul>
        <li class="news_list_days">2019.XX.XX</li>
        <li>【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</li>
      </ul>
     </div>
    </div>

    <div class="contact">
      <h2>Contact</h2>
      <form action="">
        <div class="contact_box" class="hoge1">
          <p class="contact_title">NAME</p>
          <p class="input_field"><input type="text" name="name" id="name"></p></div>
        <div class="contact_box">
          <p class="contact_title">E-mail</p>
          <p class="input_field"><input type="email" name="email" id="email"></p></div>
        <div class="contact_box">
          <p class="contact_title">MESSAGE</p>
          <p class="input_field">
            <textarea name="inquiry" id="inquiry" id="inquiry"></textarea>
          </p>
        </div>
        <div class="contact_box_button">
          <button type="submit" id="button">送信</button>
        </div>
      </form>
    </div>
  </main>
  <footer id="footer">
      <p>© 2024 My Work</p>
  </footer>
</body>
</html>