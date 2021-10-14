
<?php

require_once("funcs.php");


// ページ紹介
// このページは運行情報を登録するページです。
// 


session_start();    
// ログインしているかsession_idをチェックする関数実行(funcs.php参照)
loginCheck();

// 1. データベース接続
$pdo = db_connect();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM ship_list ORDER BY shipName DESC");
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

echo $_SESSION["kanri_flag"];

///////////// php end////////////
?>


<!-- ********html start************ -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/input.css">
    <title>登録画面</title>
</head>

<body>


<div class="input-container">


<h2>運行情報の登録画面</h2>
<form action="input_act.php" method="POST">

    <div class="flex">

        <h3>
            船名:
            <select id="option-menu" name="shipName" class="form-select" size="1" aria-label="size 3 select example">
            
            
            </select>
        </h3>
            
            
            <h3>
               出航日: <input type="date" name="dep_date" id="date" style="width: 80%;">
            </h3>
        
    </div>

    <div class="route">

        <h3>
            <label for="departure">出発地: <input type="text" name="departure" id="departure" style="width: 80%;"></label>
        </h3>
    
        <h3>
            <label for="arrival">到着地: <input type="text" name="arrival" id="arrival" style="width: 80%;"></label>
        </h3>
    
        <h3>
            <label for="cargo">貨物: <input type="text" name="cargo" id="cargo" style="width: 80%;"></label>
        </h3>
        <input type="submit" value="登録します" class="btn btn-primary">
    </div>
    
</form>


<div class="link">

    <a style="text-align: center;" href="select.php">運行情報一覧</a>
    

</div>
</div>


<!-- *************JQUERY start************** -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const data = JSON.parse('<?=$json?>');
    // console.log(data);
    // console.log(data[1].shipName);

    for(i=0; i<data.length - 1; i++){
        $("#option-menu").append(
            `
            <option selected name='shipName' value='${data[i].shipName}'>${data[i].shipName}</option>
            `
        );
    }

</script>
</body>
</html>