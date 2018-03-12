<?php

if(!$_POST){
header('Location: ../contact.html');
	}

session_start();
$_SESSION = $_POST;
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>コーチング||コンタクトフォーム</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="お問い合わせはこちらからお願いします。">
    <meta name="keywords" content="コーチング,選択,解決策,コンタクトフォーム">
    <meta property="og:title" content="コンタクトフォーム">
    <meta name="twitter:card" content="contact">
    <link href="../assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/jquerypjax.js" type="text/javascript"></script>
    <script src="../assets/js/main.js" type="text/javascript"></script>
  </head>
  <body>
    <nav class="side-menu">
      <ul class="side--menu-list">
        <li class="side--menu-item"><a class="side-menu-item-link" href="about.html">about</a></li>
        <li class="side--menu-item"><a class="side-menu-item-link" href="contact.html"> contact</a></li>
        <li class="side--menu-item"><a class="side-menu-item-link" href="service.html"> service</a></li>
      </ul>
    </nav>
    <div class="side-menu-btn" id="js_sideMenuBtn">
      <div class="ellipsis-v"><span class="point top"></span><span class="point mid"></span><span class="point bot"></span></div>
    </div>
    <div class="wrapper">
      <header class="header">
        <div class="header--inner">
          <div class="header--inner--logowrap"><a class="header--inner--logoLink" href="/p01/">
              <h1 class="header--inner--logo"><img class="header--inner--logoimg" src="../assets/img/img-header-logo.png" alt="コーチングロゴ"></h1></a></div>
          <nav class="header--inner--nav">
            <ul class="header--inner--navList">
              <li class="header--inner--navitem"><a class="header--inner--navlink" href="about.html"><span class="header--inner--navsub">about</span></a></li>
              <li class="header--inner--navitem"><a class="header--inner--navlink" href="contact.html"><span class="header--inner--navsub">contact</span></a></li>
              <li class="header--inner--navitem"><a class="header--inner--navlink" href="service.html"><span class="header--inner--navsub">service</span></a></li>
            </ul>
          </nav>
        </div>
      </header>
     <div class="content" id="content">
        <main class="main page">
          <section class="l-section page-contact">
            <div class="l-section--page-content-wrap">
              <h2 class="l-section--page-content--ttl">コンタクトフォーム(確認画面)</h2>
            </div>
          </section>
          <section class="l-section">
            <div class="l-section--contact--form-wrap">
              <form method="post" action="send.php" id="contact-form">
                <div class="contact--wrap">
                  <dl class="contact--list">
                    <dt class="contact--item">
                      <p class="contact-item_label"></i>お名前</p>
                    </dt>
                    <dd class="contact--item">
                      <p class="contact--item_text"><?php echo htmlspecialchars($_POST['name']);?></p>
                    </dd>
                  </dl>
                  <dl class="contact--list">
                    <dt class="contact--item">
                      <p class="contact-item_label"></i>電話番号</p>
                    </dt>
                    <dd class="contact--item">
                      <p class="contact--item_text"><?php echo htmlspecialchars($_POST['tel']);?></p>
                    </dd>
                  </dl>
                  <dl class="contact--list">
                    <dt class="contact--item">
                      <p class="contact-item_label"></i>メールアドレス</p>
                    </dt>
                    <dd class="contact--item">
                      <p class="contact--item_text"><?php echo htmlspecialchars($_POST['email']);?></p>
                    </dd>
                  </dl>
                  <dl class="contact--list">
                    <dt class="contact--item">
                      <p class="contact-item_label"></i>題名</p>
                    </dt>
                    <dd class="contact--item">
                      <p class="contact--item_text"><?php echo htmlspecialchars($_POST['title']);?></p>
                    </dd>
                  </dl>
                  <dl class="contact--list">
                    <dt class="contact--item">
                      <p class="contact-item_label"></i>内容</p>
                    </dt>
                    <dd class="contact--item">
                      <p class="contact--item_text"><?php echo htmlspecialchars($_POST['comment']);?></p>
                    </dd>
                  </dl>
                </div>
                <div class="l-section--contact--btn-wrap">
                  <a href="javascript:history.back();" class="l-section--contact--btn-link"><input type="button" value="戻る" class="l-section--contact--btn"></a>
                  <button class="l-section--contact--btn" type="submit" name="submit" value="send">送信</button>
                </div>
              </form>
            </div>
          </section>
        </main>
      </div>
      <footer class="footer">
        <div class="footer-inner">
          <div class="footer-inner--snswrap">
            <div class="footer-inner--snsf"><img class="footer-inner--snsfimg" src="../assets/img/img-facebook.png" alt="facebookボタン"></div>
            <div class="footer-inner--snst"><img class="footer-inner--snstimg" src="../assets/img/img-twitter.png" alt="ツイッターボタン"></div>
          </div>
          <div class="footer-inner--logowrap"><img class="footer-inner--logo" src="../assets/img/img-footer-logo.png" alt="ロゴ"></div>
        </div>
        <div class="copyright--wrap"><small class="copyright">&copy; coaching All Rights Reserved.</small></div>
      </footer>
    </div>
  </body>
</html>