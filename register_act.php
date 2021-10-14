<?php

require_once("funcs.php");

// ページ紹介
// register.phpから遷移します。新規登録者情報をdbにconnectするページです。




$name = $_POST["name"];
$lid = $_POST["lid"];
$email = $_POST["email"];
$lpw = $_POST["lpw"];
$lpw_match = $_POST["lpw_match"];


$error = [];


if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!$name = filter_input(INPUT_POST, 'name')){
        $error[] = 'フルネームが入力されていません';
    }else{
        $lid = $_POST["lid"]; //username
    }

    if(!$lid = filter_input(INPUT_POST, 'lid')){
        $error[] = 'usernameが入力されていません';
    }else{
        $lid = $_POST["lid"]; //username
    }

    if(!$email = filter_input(INPUT_POST, 'email')){
        $error[] = 'emailを入力して下さい';
    }else {$email = $_POST["email"]; //email
    }
    
    if(!$lpw = filter_input(INPUT_POST, 'lpw')){
        $error[] = 'パスワードを入力して下さい';
    }else{
        $lpw = $_POST["lpw"]; //password
    }
    if(!$lpw_match = filter_input(INPUT_POST, 'lpw_match')){
        $error[] = '確認用のパスワードを入力して下さい';
    }else{
        $lpw_match = $_POST["lpw_match"]; //password
    }

    if($lpw !== $lpw_match){
        $error[] = 'パスワードがマッチしません';
    }

    $plan = $_POST["plan"];

}


if(count($error) === 0){


    $pdo = db_connect();

    $lpw = password_hash($lpw, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO gs_user_table (id, name, lid, email, lpw, kanri_flag, 
    life_flag, register_date, unsub_date, plan_flag) 
    VALUES (NULL,:name,:lid,:email,:lpw,0,0,sysdate(),null,:plan)");
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':lid', $lid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':plan', $plan, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
    $status = $stmt->execute();  

    //   echo $status;
    // INSERT INTO gs_user_table (id, name, lid, email, lpw, kanri_flag, life_flag, register_date, unsub_date, plan_flag) VALUES (NULL,'ohzawa', 'ohzawa','ohzawa','ohzawa',0,0,sysdate(),null,1);
    
    //３．データ表示
    
    if($status==false) {
    $error = $stmt->errorInfo(); //Errorがある場合
    exit("ErrorQuery:".$error[2]); //配列index[2]にエラーコメントあり
    }else{
        header("location:select.php");
    }
    

}else{
    
    echo "入力していない項目があります";

    echo "<input  type='button' value='修正する' onclick='history.back(-1)'>";

}

?>