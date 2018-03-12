<?php
session_start();

$add_header="From:choice00design@gmail.com\r\n";
$add_header	.= "Reply-to: choice00design@gmail.com\r\n";
$add_header	.= "X-Mailer: PHP/". phpversion();
$opt = '-f'.'choice00design@gmail.com';

$message =<<<HTML
お問い合わせ内容の確認です。

お名前
{$_SESSION['name']}

電話番号
{$_SESSION['tel']}

E_mail
{$_SESSION['email']}

タイトル
{$_SESSION['title']}

お問い合わせ内容
{$_SESSION['comment']}

内容確認後、担当者より折り返しご連絡をさせて頂きます。
今しばらくお待ちください。

HTML;

mb_language("ja");
mb_internal_encoding("UTF-8");

mb_send_mail($_SESSION['email'],"【お問い合わせ】確認メール",$message,$add_header,$opt);
//mb_send_mailは5つの設定項目がある
//mb_send_mail(送信先メールアドレス,"メールのタイトル","メール本文","メールのヘッダーFromとかリプライとか","送信エラーを送るメールアドレス");
//5番目の情報は第5引数と呼ばれるものでして、これがないと迷惑メール扱いになることも。



//マスター管理者にも同じメールを送りつける！！
mb_send_mail('choice00design@gmail.com',"お問い合わせがありました",$message,$add_header,$opt);

session_destroy();
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
          <section class="l-section page-send">
            <div class="l-section--page-content-wrap l-section--send-page-content-wrap">
              <h2 class="l-section--send-page-content--ttl">送信完了しました。</h2>
              <p class="l-section--send-page-content--text">内容確認後、担当者より折り返しご連絡をさせて頂きます。<br>今しばらくお待ちください。</p>
              <a href="/cooching/" class="l-section--contact--btn">戻る</a>
            </div>
          </section>
          <section class="l-section">
            <div class="l-section--contact--form-wrap">
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