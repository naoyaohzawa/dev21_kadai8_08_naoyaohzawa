<?php

require_once("funcs.php");

// ページ紹介
// 一般ユーザー（kanri_flag === 0)がログインした時、このページに遷移します。
// ship_list.sqlのデータがjsonを利用して表示されています。



session_start();    
// ログインしているかsession_idをチェックする関数実行(funcs.php参照)
loginCheck();

$id = $_SESSION["id"];
$plan_flag = $_SESSION["plan_flag"];
// echo $plan_flag;

// 1. データベース接続
$pdo = db_connect();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * from ship_list JOIN ship_type ON ship_list.type = ship_type.id;");
$status = $stmt->execute();  

//３．データ表示
$view = "";
if ($status == false) {
    sql_error($stmt);
} else if($plan_flag == 2 || $plan_flag == 3 || $plan_flag == 0){
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<div class="card" style="width: 18rem;">';
        $view .= '<img class="card-img-top" src="images/shipImage'. $r["id"] . '.jpg" alt="Card image cap">';
        $view .= '<div class="card-body">';
        $view .= '<h5 class="card-title">船名:' . $r["shipName"] . '</h5>';
        $view .= '<p class="card-text">船型:' . $r["type"] . '</p>';
        $view .= '<p class="card-text">建造年:' . $r["built"] . '</p>';
        $view .= '</div>';
        $view .= '</div>';
    }
}else{
    $view = "あなたの購読プランでは閲覧できません。ユーザー情報のページから購読プランを変更してください。";
}



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ship_list.css">
    <title>ship_list</title>
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

    <div class="card-container">
    <?= $view ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    

    </script>
</body>
</html>
