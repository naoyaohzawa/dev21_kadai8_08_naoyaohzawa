①課題内容（課題名・どんな作品か）
課題08

+++++++アプリ紹介+++++++
船の運行情報を入力し、一覧管理できるアプリ。前回課題にユーザー情報のページと船の一覧のページを追加ver。
アプリというより、これまで学んだホームページ作りを実践して見たものです、色々作りかけですが、今後ホームページを作る際のイメージを膨らましました。

！！！注意！！！！
data base名はgs_db7にしてあります。gs_dbのデータベースがごちゃごちゃしたので、勝手ながら名前を変えて新しいdbを作成しました。
課題をご覧いただく際は、gs_db7を作成して、そこにsql（各table）をimport頂くか、
funcs.phpのline 24のdbnameを編集頂きたくお願いします。

+++++++アプリの遊び方+++++++
gs_user_tableをご覧いただければ、ログインidとパスワードが記載されているので、好きなユーザーでログイン下さい。
username    : naoya
password    : naoya
でログインすると管理者用のページがみれます。

+++++++ファイル紹介+++++++
index.php   //トップページです
login.php   //ログイン画面(メインページです)
login_act   //ログイン時のdb connect用のphpです。管理者か一般userか識別します
register.php  //新規登録画面（index.phpの新規登録ボタンから飛びます）
register_act.php    //新規登録時、db connect用のphpです
price.php   //購読プランを表示しているだけのページです
select.php  //一般user向けの船の運行情報画面です
select_admin.php  //管理者用の船の運行情報画面です（データの編集と削除ができます）
input.php   //新しい運行情報を登録します
input_act.php   //input.phpのdb connect用のphpです
update_act.php  //select_admin.phpで管理者がupdateする時のdb connect用のphpです
delete_act.php  //select_admin.phpで管理者がdeleteする時のdb connect用のphpです
logout.php  //ログアウト用のphpです
ship_list.php   //船の一覧ページです
user_profile.php    //ユーザーの個別ページです
user_list.php   //管理者がユーザー管理するページです（編集機能はついてないです。）
funcs.php   //function諸々が格納してあります
今回課題で追加

sqlファイル(table）の説明
gs_user_table   //user情報です。
lifeflag（退会ステータス）、unsub_date（退会日時）は搭載しきれなかったです。

ship_list.sql   //登録する船のリストをテーブルにしたものです。


ship_type.php   //今回は利用していないのスルー下さい。ship_list.sqlと次回紐付けます。

voyage_data.sql //運行データです。カラムの最後にinput_personがありますが、今回は利用していないです。


その他ファイル説明
フォルダcss/fonts/img/js/scssはBootstraps用のフォルダです。Bootsrapsのテンプレートをネットからダウンロードして搭載しました。



②工夫した点・こだわった点
GSでホームページ作りを一通り学んだので、それを今回ちょろっと作ってみた。作っていないリンク先がたくさんあるものの、
web pageがどのようにできているか一通り基礎が理解できたと思う。


③質問・疑問（あれば）

質問ではないが、ログインした後、Homeボタンを押すとindex.phpに戻るが、毎度ログインするのが面倒なので、
session idをkeepしている限り、ログインを押したら自動的にログインされるようにしたかった。
ログインページに行った場合、session idを持っている人は自動でログイン後のページにheaderすればいいが、時間ぎれで搭載できず。


④その他（感想、シェアしたいことなんでも）
〜感想〜
川島さんの課題のコードが美しいし、静的メソッドが利用されていて凄いなと思った。静的メソッドの書き方がわからなくて、
自分の課題そっちのけで、ずっと川島さんのコードを眺めていたので、今度どういう作りなのか聞いてみたい。



参考にしたURL