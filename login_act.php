<?php

require_once("funcs.php");

// ページ紹介
// ログインページからこのページに飛びます。db connectして、登録してあるユーザーか判別します。
// ユーザー情報が一致すれば、select.phpに遷移します


// session_start();
session_start();

$lid = $_POST["lid"];
$lpw = $_POST["lpw"];




//1.  DB接続します
$pdo = db_connect();
  
//２．データ取得SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid = :lid");
  $stmt->bindValue(':lid', $lid);  //Integer（数値の場合 PDO::PARAM_INT)
//   $stmt->bindValue(':lpw', $lpw);  //Integer（数値の場合 PDO::PARAM_INT)
  $status = $stmt->execute();  

//   echo $status;

//３．データ表示

if($status==false) {
$error = $stmt->errorInfo(); //Errorがある場合
exit("ErrorQuery:".$error[2]); //配列index[2]にエラーコメントあり
}



$val = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($val);


if($val !== ""){
     if(password_verify($lpw, $val["lpw"])){
        $_SESSION["chk_ssid"] = session_id();
        $_SESSION["name"] = $val["name"];
        $_SESSION["id"] = $val["id"];
        $_SESSION["kanri_flag"] = $val["kanri_flag"];
        $_SESSION["plan_flag"] = $val["plan_flag"];
     }else{
        header('Location: login.php'); 
     }
    
    if($_SESSION["kanri_flag"] == 1){
        header("location:select_admin.php");
    }else{
        header("location:select.php");
    }

    // echo $_SESSION["kanri_flag"];
}else{
    header("location:login.php");
}

?>