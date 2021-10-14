<?php

// ページ紹介
// ログアウト処理の時にこのページに遷移します。ログアウトして、index.phpに戻ります。sessionがdestroyされます。


    session_start();

    $_SESSION = array();
    
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-42000, '/');
    }
    
    session_destroy();
    
    header("location:index.php");
    exit();
    

?>