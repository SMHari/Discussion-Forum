<?php
		include "db.php";
        $comment = mysql_real_escape_string($_POST['comment']);
        $userid = $_POST['userid'];
        $postid = $_POST['postid'];
        date_default_timezone_set("Asia/Kolkata");
        $datetime=date("Y-m-d h:i:s");
        $comment = mysql_query("Insert into tblcomment (comment,post_Id,datetime,user_Id) values ('$comment','$postid','$datetime','$userid') ");
        $sql = mysql_query("SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id='$postid' and c.user_Id='$userid' 
        					and c.datetime='$datetime'");

	 while($row=mysql_fetch_assoc($sql)){
                    echo "<label>Comment by: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }



              ?>