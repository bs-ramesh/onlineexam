<?php 
session_start();
 include("../conn.php");
 

extract($_POST);
$encryptpassword = md5($_POST['pass']);
$selAcc = $conn->query("SELECT * FROM examinee_tbl WHERE usn='$username' AND exmne_password='$encryptpassword'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if($selAcc->rowCount() > 0)
{
  $_SESSION['examineeSession'] = array(
  	 'usn' => $selAccRow['usn'],
  	 'examineenakalogin' => true
  );
  $res = array("res" => "success");

}
else
{
  $res = array("res" => "invalid");
}




 echo json_encode($res);
 ?>