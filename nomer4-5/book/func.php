<?php
session_start();
require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM book";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'name' => $data['name'],
		'category_id' => $data['category_id'],
		'writer_id' => $data['writer_id'],
		'Publication_year' => $data['Publication_year'],
		'img' => $data['img'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `book` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'name' => $data['name'], 
		'category_id' => $data['category_id'], 
		'writer_id' => $data['writer_id'], 
		'Publication_year' => $data['Publication_year'], 
		'img' => $data['img'], 
		
    );
  }
return $datas;
}

function Insert(){
  $name=$_POST['name']; 
		$category_id=$_POST['category_id']; 
		$writer_id=$_POST['writer_id']; 
		$Publication_year=$_POST['Publication_year']; 
		$img=$_POST['img']; 
		
  $query = "INSERT INTO `book` (`id`,`name`,`category_id`,`writer_id`,`Publication_year`,`img`)
VALUES (NULL,'$name','$category_id','$writer_id','$Publication_year','$img')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Update($id){
  $name=$_POST['name']; 
		$category_id=$_POST['category_id']; 
		$writer_id=$_POST['writer_id']; 
		$Publication_year=$_POST['Publication_year']; 
		$img=$_POST['img']; 
		
  $query = "UPDATE `book` SET `name` = '$name',`category_id` = '$category_id',`writer_id` = '$writer_id',`Publication_year` = '$Publication_year',`img` = '$img' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Delete($id){
  $query = "DELETE FROM `book` WHERE `id` = '$id'";
  $exe = mysqli_query(Connect(),$query);
    if($exe){
      // kalau berhasil
      $_SESSION['message'] = " Data Sudah dihapus ";
      $_SESSION['mType'] = "success ";
      header("Location: index.php");
    }
    else{
      $_SESSION['message'] = " Data Gagal dihapus ";
      $_SESSION['mType'] = "danger ";
      header("Location: index.php");
    }
}


if(isset($_POST['insert'])){
  Insert();
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
?>
