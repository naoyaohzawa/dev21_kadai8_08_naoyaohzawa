
<!-- ページ説明 -->
<!-- topページです。ここからログインしていきます -->




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Ocean Index</title>
</head>
<body>

<header>
    <div class="container nav-container">

        <div class="logo">
          <h1 class="text-light"><a href="index.php"><span>Ocean Project</span></a></h1>
        </div>
  
        <nav id="navbar" class="">
          <ul class="nav-flex">
            <li class="list-index"><a class="active " href="index.php">Home</a></li>
            <li class="list-index"><a href="login.php">ログイン</a></li>
            <li class="list-index"><a href="register.php">新規登録</a></li>
            <li class="list-index"><a href="price.php">購読プラン</a></li>
            <!-- <li class="list-index"><a href="logout.php">ログアウト</a></li> -->
            <li class="list-index"><a href="contact.html">Contact Us</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div>  

</header>

<section class="top-section">

    <div class="top-image" >
        <img src="images/top.jpg" alt="">
        <h1 class="top-message">デジタルの力で<br>日本の海運業を支える</h1>
    </div>
    
<!-- About -->
<div class="about-container">

    <h2>会社概要</h2>
    <h3>日本の海運業を支える管理システム(Saas/デジタルプラットフォーム)を提供しています。
    </h3>

    <h3 style="width: 80%; margin: 0 auto;">IoS-OPとは
        (Internet of Ships Open Platform) 
        IoS-OPは船舶の運行データを、データ提供者の利益を損なわずに、ステークホルダー間での共有や、
        造船所やメーカー等への利用権販売、各種サービスへの提供を可能とすべく、海事業界内で合意されたルールと、
        データセンターで構成された共通基盤です。
        データの流通に関わる部分を協調領域とし、データを活用したイノベーション、新規サービスの開発などの
        競争領域に注力できることを目指し、業務改善を目指して自らが強くなり、新しいビジネスモデルを探求することで、
        業界全体としてデジタル時代における新たな海事クラスターの形をつくり、次世代につなぐことを目的として活動しています。
    </h3>
    
</div>

    
<!-- price -->
</section>

<section>
    <div class="demo">
        <div class="container">
            <div class="row text-center">
                <h1 class="heading-title">購読プラン一覧</h1>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="heading">無料利用</h3>
                            <div class="price-value">0
                                <span class="currency">￥</span>
                                <span class="month">/月</span>
                            </div>
                        </div>
                        <ul class="pricing-content">
                            <li>1カ月無料利用可能</li>
                            <li>1隻のみ登録可能</li>
                            <li>カスタマーサービスなし</li>
                            <li></li>

                        </ul>
                        <a href="register.php" class="read">登録画面に進む<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="heading">ビジネス</h3>
                            <div class="price-value">20,000
                                <span class="currency">￥</span>
                                <span class="month">/月</span>
                            </div>
                        </div>
                        <ul class="pricing-content">
                            <li>登録船に情報に限定アクセス</li>
                            <li>3隻のみ登録可能</li>
                            <li>カスタマーサービスあり</li>
                            <li></li>
                        </ul>
                        <a href="register.php" class="read">登録画面に進む<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="heading">無制限</h3>
                            <div class="price-value">100,000
                                <span class="currency">￥</span>
                                <span class="month">/月</span>
                            </div>
                        </div>
                        <ul class="pricing-content">
                            <li>登録船情報にフルアクセス</li>
                            <li>何隻でも登録可能</li>
                            <li>24時間カスタマーサービス</li>
                            <li></li>
                            
                        </ul>
                        <a href="register.php" class="read">登録画面に進む<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<h2 style="text-align: center;">お問い合わせ</h2>
<div class="Form test">
    <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>会社名
      </p>
      <input type="text" class="Form-Item-Input" placeholder="例）株式会社令和">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
      <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
      <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
      <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
      <textarea class="Form-Item-Textarea"></textarea>
    </div>
    <input type="submit" class="Form-Btn" value="送信する">
  </div>


    
</body>
</html>