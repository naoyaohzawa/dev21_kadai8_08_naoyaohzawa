<!-- 新規ユーザーが登録するページです -->


<!doctype html>
<html lang="ja">
  <head>
  	<title>新規登録</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index.css">

	</head>



	<body class="img js-fullheight" style="background-image: url(images/main.jpg);">
	<header>
	<div class="container nav-container">

		<div class="logo">
			<h1 class="text-light"><a href="index.php"><span>Ocean Project</span></a></h1>
		</div>

		<nav id="navbar" class="">
			<ul class="nav-flex">
			<li class="list-index"><a class="active " href="index.php">Home</a></li>
			<li class="list-index"><a href="index.php">ログイン</a></li>
			<li class="list-index"><a href="register.php">新規登録</a></li>
			<li class="list-index"><a href="price.php">購読プラン</a></li>
			<!-- <li class="list-index"><a href="logout.php">ログアウト</a></li> -->
			<li class="list-index"><a href="contact.html">Contact Us</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>  

	</header>



	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">å
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">アカウントを作成</h3>
                  <!-- form start -->
		      	<form action="register_act.php" method="post" class="signin-form">

                    <!-- 氏名 -->
		      		<div class="form-group">
		      			<input type="text" name="name" class="form-control" placeholder="フルネームを記入して下さい" required>
		      		</div>
                    <!-- username -->
		      		<div class="form-group">
		      			<input type="text" name="lid" class="form-control" placeholder="好きなUsernameを入れて下さい" required>
		      		</div>

					<!-- email -->
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Email Address" required>
					</div>

                    <!-- password -->
	            <div class="form-group">
                    
	              <input id="password-field" name="lpw" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>

				<!-- password Match -->
				<div class="form-group">
					<input name="lpw_match" type="password" class="form-control" placeholder="Passwordを再入力してください" required>
					<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				</div>

				<!-- password Match -->
				<div class="form-group">
					<select name="plan" id="" class="form-control">
						<option value="1">無料プラン</option>
						<option value="2">ビジネス</option>
						<option value="3">無制限</option>
					</select>
					
				</div>

                <!-- submit bottun -->
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-outline-primary submit px-3">登録する</button>
	            </div>

                <div class="form-group" style="text-align: center;">
                    <a href="login.php" class="form-control" text>戻る</a>
                </div>
	            
	          </form>
              <!-- form end -->
	          	          
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

