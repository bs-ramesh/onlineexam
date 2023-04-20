<?php 

 include("../../../conn.php");

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body style="background-image: linear-gradient(to right, #434343 0%, black 100%) !important">
    <div class="container" style="background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%) !important;margin-top:30px">
    <table class="content-table">
        <thead>
            <tr>
                <th><h2>FEEDBACKS</h2></th>
</thead>
<table class="table table-bordered">
    <tr style="background-color:red;">
        <th>USN</th>
        <th>Feedback Question</th>
        <th>Rating</th>
</tr></tr>
 <?php
   $q = $conn->query("SELECT ea.axmne_id, eqt.exam_question, ea.exans_answer FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id WHERE eqt.exam_id='44' ");
   while ($row = $q->fetch(PDO::FETCH_ASSOC))
    { 
        echo "<tr>";
        echo "<td>"; echo $row['axmne_id']; echo "</td>";
        echo "<td>"; echo $row['exam_question']; echo "</td>";
        echo "<td>"; echo $row['exans_answer']; echo "</td>";
echo "</tr>";
       
    }
 ?>
 </table>
</table>
 </body>
 </html>
 