<?php

require_once("funcs.php");

session_start();    

// loginCheck();
// adminCheck();


// 1. データベース接続
$pdo = db_connect();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table ORDER BY id DESC");
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
    <link href="css/user.css" rel="stylesheet" />
    <title>user_select</title>
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
			<li class="list-index"><a href="select_admin.php">運航情報一覧</a></li>
			<li class="list-index"><a href="user_select.php">ユーザー一覧</a></li>
			<li class="list-index"><a href="ship_list.php">登録船情報</a></li>
			<li class="list-index"><a href="logout.php">ログアウト</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav><!-- .navbar -->

		</div>  

	</header>
    

<div class="container" style="margin: auto;">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-uppercase mb-0">ユーザー一覧(管理者用)
                </h5>
            </div>
            <div class="table-responsive">
                <table class="table no-wrap user-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">ID</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">name/lid</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">email</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">kanri_flag</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">life_flag</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">登録日</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">退会日</th>
                      <th scope="col" class="border-0 text-uppercase font-medium">購読プラン</th>
                    </tr>
                  </thead>
                  <!-- <tbody>
                      
                    <tr>
                        <td class="pl-4">1</td>
                        <td>
                            <h5 class="font-medium mb-0">ID</h5>
                        </td>
                        <td>
                            <h5 class="font-medium mb-0">name</h5>
                            <span class="text-muted">lid</span>
                        </td>
                        <td>
                            <span class="text-muted">gmail</span><br>
                        </td>
                        <td>
                            <span class="text-muted">1</span><br>
                        </td>
                        <td>
                            <span class="text-muted">0</span><br>
                        </td>
                        <td>
                            <span class="text-muted">登録日</span><br>
                        </td>
                        <td>
                            <span class="text-muted">退会</span><br>
                        </td>
                        <td>
                            <span class="text-muted">購読プラン</span><br>
                        </td>

                        <td>
                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button>
                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                            <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button>
                        </td>
                    </tr>
                  </tbody> -->
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<!-- font awesome -->
<script src="https://kit.fontawesome.com/6b19c5e69c.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const data = JSON.parse('<?=$json?>');
    console.log(data);


console.log(data[1].id);
console.log(data[1].name);
console.log(data[1].lid);


for(i=0; i<data.length - 1; i++){

    $(".table").append(
        `
        <tbody>  
            <tr>
                <td class="pl-4">${data[i]+1}</td>
                <td>
                    <h5 class="font-medium mb-0">${data[i].id}</h5>
                </td>
                <td>
                    <h5 class="font-medium mb-0">${data[i].name}</h5>
                    <span class="text-muted">${data[i].lid}</span>
                </td>
                <td>
                    <span class="text-muted">${data[i].email}</span><br>
                </td>
                <td>
                    <span class="text-muted">${data[i].kanri_flag}</span><br>
                </td>
                <td>
                    <span class="text-muted">${data[i].life_flag}</span><br>
                </td>
                <td>
                    <span class="text-muted">${data[i].register_date}</span><br>
                </td>
                <td>
                    <span class="text-muted">${data[i].unsub_date}</span><br>
                </td>
                <td>
                    <span class="text-muted">${data[i].plan_flag}</span><br>
                </td>

                <td>
                    <!-- <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="fa fa-key"></i> </button> -->
                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-trash"></i> </button>
                    <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-edit"></i> </button>
                    <!-- <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="fa fa-upload"></i> </button> -->
                </td>
            </tr>
        </tbody>

        `
    )
}



</script>

</body>
</html>

