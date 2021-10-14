<?php

require_once("funcs.php");

// 

session_start();

$id = $_SESSION["id"];


$error = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!$shipName = filter_input(INPUT_POST, 'shipName')){
        $error[] = '船名を選んでください';
    }else {$shipName = $_POST["shipName"];
    }
    
    if(!$dep_date = filter_input(INPUT_POST, 'dep_date')){
        $error[] = '出航日を選択してください';
    }else{
        $dep_date = $_POST["dep_date"]; //出航日
    }

    if(!$departure = filter_input(INPUT_POST, 'departure')){
        $error[] = '出発港を入力してください';
    }else{
        $departure = $_POST["departure"]; //到着港
    }

    if(!$arrival = filter_input(INPUT_POST, 'arrival')){
        $error[] = '到着港を入力してください';
    }else{
        $arrival = $_POST["arrival"]; //出発港
    }

    if(!$cargo = filter_input(INPUT_POST, 'cargo')){
        $error[] = 'Cargoを入力してください';
    }else{
        $cargo = $_POST["cargo"]; //出発港
    }

}

if(count($error) === 0){

    $pdo = db_connect();
      
    //３．データ登録SQL作成
    $stmt = $pdo->prepare("INSERT INTO voyage_data(id, shipName, input_date, dep_date, departure, arrival, cargo, input_person)
    VALUES(NULL, :shipName, sysdate(), :dep_date, :departure, :arrival, :cargo, :id)");
    
    //  2. バインド変数を用意
    $stmt->bindValue(':shipName', $shipName, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':dep_date', $dep_date, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':departure', $departure, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':arrival', $arrival, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':cargo', $cargo, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
    
    //  3. 実行
    $status = $stmt->execute(); 

    //４．データ登録処理後
    if($status==false){
        //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
        $error = $stmt->errorInfo();
        exit("ErrorMessage:".$error[2]);
    }

    if($_SESSION["kanri_flag"] === 1){
        header("location:select_admin.php");
    }else{
        header("location:select.php");
    }
    
}else{
    echo "入力していない項目があります";
    var_dump($error);

    echo "<input  type='button' value='修正する' onclick='history.back(-1)'>";

}
   


// echo "<br>xxx" . "kk";


?>