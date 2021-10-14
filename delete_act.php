<?php
// ページ紹介
// 管理者がselect_admin.phpで削除ボタンをクリックした時、このページに遷移します。
// このページはdb connectようなので、ブラウザには表示されません。


// select.phpからデータを受信する

require_once("funcs.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST["id"]; //id
    
}


$pdo = db_connect();

//３．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM voyage_data WHERE id=:id;");

//  2. バインド変数を用意
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute(); 

//４．データ登録処理後
if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("ErrorMessage:".$error[2]);
}

if($_SESSION["kanri_flag"] != 1){
    header("location:select.php");
}else{
    header("location:select_admin.php");
}


    


?>