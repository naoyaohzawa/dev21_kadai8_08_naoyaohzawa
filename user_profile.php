
<?php

require_once("funcs.php");

// ページ紹介
// 一般ユーザー（kanri_flag === 0)のマイページ
// Getで前のページからIDを取得して画面に表示



session_start();    
// ログインしているかsession_idをチェックする関数実行(funcs.php参照)
loginCheck();

$id = $_GET["id"];

// echo $id;

// 1. データベース接続
$pdo = db_connect();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=$id");
$status = $stmt->execute();  

//３．データ表示
if($status==false) {
$error = $stmt->errorInfo(); //Errorがある場合
exit("ErrorQuery:".$error[2]); //配列index[2]にエラーコメントあり
} else {
//Selectデータの数だけ⾃動でループしてくれる
while($result[] = $stmt->fetch(PDO::FETCH_ASSOC));
$json = json_encode($result);
}


?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="css/user.css" rel="stylesheet">
	<link rel="stylesheet" href="css/user_profile.css">
    <title>マイページ</title>
</head>
<body>

<header>
	<div class="container nav-container">

		<div class="logo">
			<h1 class="text-light"><a href="index.php"><span>Ocean Project</span></a></h1>
		</div>

		<nav id="navbar" class="">
			<ul class="nav-flex">
			<li class="list-index"><a class="active" href="index.php">Home</a></li>
			<li class="list-index"><a href="select.php">運航情報一覧</a></li>
			<li class="list-index"><a href="user_profile.php?id=<?=$id?>">ユーザー情報</a></li>
			<li class="list-index"><a href="ship_list.php">登録船情報</a></li>
			<li class="list-index"><a href="logout.php">ログアウト</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>  

	</header>


    <div class="user-card">

        <h3><?php echo $_SESSION["name"]; ?>さんの登録情報</h3>
        
        <dl id="content" class="card-container">
 

        </dl>

        <div class="btn-flex">
            <button class="button">修正する</button>
        </div>

	</div>

<footer>
	<p>
		Ohzawa corp all rights reserved 2021
	</p>
	
</footer>


<script src="https://kit.fontawesome.com/6b19c5e69c.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

const data = JSON.parse('<?=$json?>');
    console.log(data);


    console.log(data[0]);

    let plan =  data[0].plan_flag;
    if(plan == 1){
        plan = "無料版";
    }else if(plan == 2){
        plan = "ビジネス版";
    }else{
        plan = "無制限版";
    }

    $("#content").append(
        `
        <dt class="card-term">ユーザー名</dt>
            <dd class="card-def">${data[0].name}</dd>

            <dt class="card-term">ログインID</dt>
            <dd class="card-def">${data[0].lid}</dd>

            <dt class="card-term">Email</dt>
            <dd class="card-def">${data[0].email}</dd>
            
            <dt class="card-term">登録日</dt>
            <dd class="card-def">${data[0].register_date}</dd>
    
            <dt class="card-term">購読プラン</dt>
            <dd class="card-def">${plan}</dd>
        `
    );
   
</script>
     
</body>

</html>
