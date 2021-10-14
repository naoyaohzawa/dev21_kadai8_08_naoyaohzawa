<?php

require_once("funcs.php");

// ページ紹介
// 一般ユーザー（kanri_flag === 0)がログインした時、このページに遷移します。
// ship_list.sqlのデータがjsonを利用して表示されています。



session_start();    
// ログインしているかsession_idをチェックする関数実行(funcs.php参照)
loginCheck();

$id = $_SESSION["id"];

// 1. データベース接続
$pdo = db_connect();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM voyage_data WHERE input_person = $id ORDER BY input_date DESC");
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




<!-- HTML start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <title>表示画面select</title>
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
			<li class="list-index"><a href="select.php">運航情報一覧</a></li>
			<li class="list-index"><a href="user_profile.php?id=<?=$id?>">ユーザー情報</a></li>
			<li class="list-index"><a href="ship_list.php">登録船情報</a></li>
			<li class="list-index"><a href="logout.php">ログアウト</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>  

	</header>

<p><?= $_SESSION["name"]?>さんがログイン中</p>



<h1 style="text-align:center;">運行情報一覧</h1>
<table id="table" class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">船名</th>
      <th scope="col">出航日</th>
      <th scope="col">出発港</th>
      <th scope="col">到着港</th>
      <th scope="col">積載荷物</th>
      <th scope="col">入力日</th>
    </tr>
  </thead>

  <h3>
  <a class="link-primary" href="input.php">新しい運行情報を入力する</a>
  </h3>
  

  <div id="start">
  </div>

</table>



<!-- JQUERY start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const data = JSON.parse('<?=$json?>');
    console.log(data);

    // テーブルにJSONデータを表示
    for(i=0; i<data.length - 1; i++){
        $(".table").append(
          `
          <tbody>
          <tr>
            
              <th scope="row">${i + 1}</th>
              <td class="name_value">${data[i].shipName}</td>
              
              <td class="depDate_value">${data[i].dep_date}</td>
              
              <td class="departure_value">${data[i].departure}</td>
              
              <td class="arrival_value">${data[i].arrival}</td>
              
              <td class="cargo_value">${data[i].cargo}</td>
              
              <td class="inputDate_value">${data[i].input_date}</td>
              
            
          </tr>
          </tbody>
          `
        )
    }



    
</script>


</body>
</html>
