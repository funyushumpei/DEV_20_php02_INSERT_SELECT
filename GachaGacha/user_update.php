<?php

//1.POSTデータ取得
$id = $_POST["id"];
$user_name = $_POST["user_name"];
$user_id = $_POST["user_id"];
$user_pw = $_POST["user_pw"];

//2.DB接続
try{
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
}

//3.更新
$sql = 'UPDATE gs_user_table SET user_name=:user_name,user_id=:user_id,user_pw=:user_pw WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id,PDO::PARAM_INT);
$stmt->bindValue(':user_name', $user_name,PDO::PARAM_STR);
$stmt->bindValue(':user_id', $user_id,PDO::PARAM_STR);
$stmt->bindValue(':user_pw', $user_pw,PDO::PARAM_STR);

$status = $stmt->execute();

//データ更新処理後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: setting.php");
    exit();
}
?>