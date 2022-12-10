<!DOCTYPE html>
<html lang="en">
<head>
 
<body>
  



<?php 
session_start();
include_once('../includes/conn.php');
$id=$_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM admin WHERE Ad_ID=".$id);
$result= mysqli_fetch_array($query);
if (strlen($_SESSION['id']==0))
  {
  header('location:../outSession.php');

  }
  else
  {
 
    // include('pages/SideBar.php');
   @$page = $_GET['page'];


   if($page != '')
   {
     if($page == "add-course")
     {
    
     include("pages/add-course.php");
     }
     else if($page == "manage-course")
     {
      
     	include("pages/manage-course.php");
     }
     else if($page == "index")
     {
     	include("index.php");
     }
     else if($page == "manage-exam")
     {
      include("pages/manage-exam.php");
     }
     else if($page == "manage-examinee")
     {
      include("pages/manage-examinee.php");
     }
     else if($page == "ranking-exam")
     {
      include("pages/ranking-exam.php");
     }
     else if($page == "feedbacks")
     {
      include("pages/feedbacks.php");
     }
     else if($page == "examinee-result")
     {
      include("pages/examinee-result.php");
     }

       
   }
   // Else ang home nga page mo display
   else
   {
     include("pages/index.php"); 
   }

  }
 ?> 

<!-- MAO NI IYA FOOTER -->



  

</body>
</html>