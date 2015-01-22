<?php require('views/top.php'); ?>

<?php 
if(isset($_GET['page'])){
  $page = $_GET['page'];
  require('views/'.$page.'.php');
}else{
  require('views/home.php');
}
?>

<?php require('views/bottom.php'); ?>