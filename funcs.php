<?php
//共通に使う関数を記述してあるページです。



//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($val){
    return htmlspecialchars($val, ENT_QUOTES);
}
  

// タイムゾーンを設定
ini_set('date.timezone', 'Asia/Tokyo');


// エラー表示
ini_set("display_errors", 1);
error_reporting(E_ALL);

// データベース接続
function db_connect(){
    try {
        //Password:MAMP='root'
        $pdo = new PDO('mysql:dbname=gs_db7;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError'.$e->getMessage());
    }
    return $pdo;
}


// ログインチェック関数

function loginCheck(){
    if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()){
        header("location:index.php");
        exit();
    }else{
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
        // echo $_SESSION["chk_ssid"];
    }
}




// ログアウト
function logout(){

    session_start();

    $_SESSION = array();
    
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-42000, '/');
    }
    
    session_destroy();
    
    header("location:index.php");
    exit();
    
}


// 管理者チェック
function adminCheck(){
    // session_start();

    if($_SESSION["kanri_flag"] != 1){
        logout();
        header("location:login.php");
    }
}