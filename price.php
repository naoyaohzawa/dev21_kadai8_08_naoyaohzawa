


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<meta charset="utf-8">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/price.css">
<title> CSS Pricing Table</title>
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
                            <li>1隻のみ登録可能</li>
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

</body>
</html>
