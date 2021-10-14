<!-- トップページです。ここからスタートします。 -->
<!-- user名はnaoya -->
<!-- passwordはnaoyaで管理者としてログインできます -->
<!-- 一般ユーザーは誰でもいいですが、nakajoとnakajoでログインしてみて下さい。 -->

<!doctype html>
<html lang="ja">
  <head>
  	<title>Login画面</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/main.jpg);" style="overflow: hidden;">

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

	<section class="section-container">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">アカウントはお持ちですか?</h3>
                  <!-- form start -->
		      	<form action="login_act.php" method="post" class="signin-form">

                    <!-- username -->
		      		<div class="form-group">
		      			<input type="text" name="lid" class="form-control" placeholder="ユーザーネーム" required>
		      		</div>
                    <!-- password -->
	            <div class="form-group">
                    
	              <input id="password-field" name="lpw" type="password" class="form-control" placeholder="パスワード" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>

                <!-- submit bottun -->
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-outline-primary submit px-3">ログイン</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">ログイン情報を記憶
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="register.php" class="py-2 mr-md-1 " style="color: #fff">新規登録は<br>こちらをクリック</a>
								</div>
	            </div>
	          </form>
              <!-- form end -->

	          <p class="w-100 text-center">&mdash; 別の方法でログインする &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Google</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

