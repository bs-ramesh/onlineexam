<?php 
	session_start();
 include("../conn.php");
 extract($_POST);


$exmneSess = $_SESSION['examineeSession']['usn'];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examinee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 </head>
<body style="background-image: linear-gradient(to right, #434343 0%, black 100%) !important">
 <div class="box1">
  
  
  <form class="container" style="background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%) !important;margin-top:30px" action="" method="POST">
         <h3 style="text-align:center;" >PLEASE PROVIDE YOUR FEEDBACK</h3>      
<div>

     1.How easy or difficult did you find the test to be? <input  type="number" min="0" max="5" name="feedback1" required placeholder="0-5"><br>
     2.Were the test questions clear and easy to understand?<input  type="number" min="0" max="5" name="feedback2" required placeholder="0-5"><br>
     3.How well did the test align with the material covered in class?<input  type="number" min="0" max="5" name="feedback3" required placeholder="0-5"><br>
     4.Did you feel prepared for the test?<input  type="number" name="feedback4" min="0" max="5" required placeholder="0-5"><br>
     5.Overall, how would you rate your experience taking this test?<input  type="number" min="0" max="5" required name="feedback5" placeholder="0-5"><br>
      <input class="btn btn-default" style="text-align:center;color:azure;background-image: linear-gradient(to right, #434343 0%, black 100%) !important;margin-bottom:20px" type="submit" name="submit" value="SUBMIT" style="color:black;">
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    // $asMe = $conn->query("SELECT exmne_fullname from examinee_tbl where usn='$exmneSess'");
	 $feedback1=$_POST['feedback1'];
	 $feedback2=$_POST['feedback2'];
	 $feedback3=$_POST['feedback3'];
$feedback4=$_POST['feedback4'];
$feedback5=$_POST['feedback5'];
   
 	$inssFedd = $conn->query("INSERT INTO exam_answers(axmne_id,exam_id,quest_id,exans_answer) VALUES('$exmneSess','44','149','$feedback1') ");
 	$inssFedd = $conn->query("INSERT INTO exam_answers(axmne_id,exam_id,quest_id,exans_answer) VALUES('$exmneSess','44','150','$feedback2') ");
 	$inssFedd = $conn->query("INSERT INTO exam_answers(axmne_id,exam_id,quest_id,exans_answer) VALUES('$exmneSess','44','151','$feedback3') ");
      $inssFedd = $conn->query("INSERT INTO exam_answers(axmne_id,exam_id,quest_id,exans_answer) VALUES('$exmneSess','44','152','$feedback4') ");
      $inssFedd = $conn->query("INSERT INTO exam_answers(axmne_id,exam_id,quest_id,exans_answer) VALUES('$exmneSess','44','153','$feedback5') ");



     if ($inssFedd)
     {
         echo '<script type = "text/javascript"> alert("data inserted")</script>';
     }
     else
     {
         echo '<script type = "text/javascript"> alert("data not inserted")</script>';
     }}

?>




      <!-- Question 2<input class="form-control" type="number" name="SERIAL_NO" placeholder="Enter serial no"><br>
    //   Question 3<input class="form-control" type="number" name="SERIAL_NO" placeholder="Enter serial no"><br>
    //   Question 4<input class="form-control" type="number" name="SERIAL_NO" placeholder="Enter serial no"><br>
    //   Question 5<input class="form-control" type="number" name="SERIAL_NO" placeholder="Enter serial no"><br>


      
 </body>
 </html> -->