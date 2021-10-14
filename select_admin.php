<?php

require_once("funcs.php");
// ページ紹介
// 管理者（kanri_flag =1)のみが訪れることができます。このページで管理者は情報を編集、削除できます。
// Jqueryで削除、編集の処理が、本ページ上で行えるのが特徴です（課題06で搭載)


session_start();    
// ログインしているかsession_idをチェックする関数実行(funcs.php参照)
loginCheck();
adminCheck();

// echo $_SESSION["kanri_flag"];
// if($_SESSION["kanri_flag"] != 1){
//     logout();
//     header("location:index.php");
//     exit();
// }

// 1. データベース接続
$pdo = db_connect();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM voyage_data ORDER BY input_date DESC");
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
			<h1 class="text-light"><a href="index.html"><span>Ocean Project</span></a></h1>
		</div>

		<nav id="navbar" class="">
			<ul class="nav-flex">
			<li class="list-index"><a class="active" href="index.html">Home</a></li>
			<li class="list-index"><a href="select_admin.php">運航情報一覧</a></li>
			<li class="list-index"><a href="user_select.php">ユーザー一覧</a></li>
			<li class="list-index"><a href="ship_list.php">登録船情報</a></li>
			<li class="list-index"><a href="logout.php">ログアウト</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>  

	</header>


<h1>管理者専用画面です</h1>
<p><?= $_SESSION["name"]?>さんがログイン中</p>



<h1 style="text-align:center;">運行情報一覧</h1>
<a class="link-primary" href="input.php">新しい運行情報を入力する</a>
<br>

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
          <tr class="data-edit">
            <form id="${data[i].id}" action="update_act.php" method="POST">
              <th scope="row">${i + 1}</th>
              <td class="name_value">${data[i].shipName}</td>
              <td class="name_change"><input form="${data[i].id}" type="text" name="shipName" value="${data[i].shipName}"></td>
              <td class="depDate_value">${data[i].dep_date}</td>
              <td class="depDate_change"><input form="${data[i].id}" type="date" name="dep_date" value="${data[i].dep_date}"></td>
              <td class="departure_value">${data[i].departure}</td>
              <td class="departure_change"><input form="${data[i].id}" type="text" name="departure" value="${data[i].departure}"></td>
              <td class="arrival_value">${data[i].arrival}</td>
              <td class="arrival_change"><input form="${data[i].id}" type="text" name="arrival" value="${data[i].arrival}"></td>
              <td class="cargo_value">${data[i].cargo}</td>
              <td class="cargo_change"><input form="${data[i].id}" type="text" name="cargo" value="${data[i].cargo}"></td>
              <td class="inputDate_value">${data[i].input_date}</td>
              <input form="${data[i].id}" type="hidden" name="input_person" value="${data[i].input_person}">
              <input form="${data[i].id}" type="hidden" name="id" value="${data[i].id}">
              <td>
                <input type="button"  value="編集" class="edit-line">
                <input form="${data[i].id}" type="submit" value="保存" class="save-line">
                <input type="button" value="キャンセル" class="cancel-line">
              </td>
              <td class="id"><input type="hidden" type="text" name="input_person" value=${data[i].id}></td>
            </form>
            <td class="delete">
            <form id="delete${data[i].id}" action="delete_act.php" method="POST">
                    <input form="delete${data[i].id}" type="hidden" name="id" value="${data[i].id}">
                    <input form="delete${data[i].id}" type="submit"  value="削除" class="delete-line">
                    </form>
            </td>
          </tr>
          </tbody>
          `
        )
    }


// データ更新
// まず画面がロード時に保存ボタンとキャンセルボタンが表示されないようにする
window.onload = function(){
$(".save-line").hide();
$(".cancel-line").hide();
    
}

// 元のデータを表示
$("[class$='_value']").show();
// $("[class$='_value']").hide();

// inputタグは最初hideにする
$("[class$='_change']").hide();
// $("[class$='_change']").show();

$(function(){
    // 編集ボタンクリック処理
    $('.edit-line').click(function(){
        $(this).parent().find('.edit-line').hide();
        $(this).parent().find('.save-line').show();
        $(this).parent().find('.cancel-line').show();
        // $("[class$='_value']").hide();
        // $("[class$='_change']").show();
        $(this).parents('.data-edit').find("[class$='_value']").hide();
        $(this).parents('.data-edit').find("[class$='_change']").show();
    });
    // 保存ボタンクリック処理
    $('.save-line').click(function(){
        $(this).parent().find('.edit-line').show();
        $(this).parent().find('.save-line').hide();
        $(this).parent().find('.cancel-line').hide();
        $("[class$='_value']").show();
        // $("[class$='_value']").hide();
        $("[class$='_change']").hide();
        // $("[class$='_change']").show();
    });
    // キャンセルボタンクリック処理
    $('.cancel-line').click(function(){
        $(this).parent().find('.edit-line').show();
        $(this).parent().find('.save-line').hide();
        $(this).parent().find('.cancel-line').hide();
        $("[class$='_value']").show();
        // $("[class$='_value']").hide();
        $("[class$='_change']").hide();
        // $("[class$='_change']").show();
    });

    // 削除ボタンクリック処理
    $('.delete-line').click(function(){
        $(this).parent().find('.edit-line').show();
        $(this).parent().find('.save-line').hide();
        $(this).parent().find('.cancel-line').hide();
        $("[class$='_value']").show();
        // $("[class$='_value']").hide();
        $("[class$='_change']").hide();
        // $("[class$='_change']").show();
    });
});
// https://vertys.net/php-table-cell-update-on-the-spot/


    
</script>


</body>
</html>
