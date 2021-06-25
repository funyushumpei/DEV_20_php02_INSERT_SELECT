<?php

//1.POSTデータ取得
$id = $_GET["id"];

//2.DB接続
try{
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
}

//3.DELETE
$sql = "DELETE FROM gs_collection_table WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

$status = $stmt->execute();

//データ更新処理後
if($status==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: collection.php");
    exit();
}
?>