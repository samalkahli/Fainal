<?php 


// session_start();
// include_once('includes/conn.php');
// $id=$_SESSION['id'];
// $query=mysqli_query($con,"SELECT * FROM admin WHERE Ad_ID=".$id);
// $result= mysqli_fetch_array($query);
// if (strlen($_SESSION['id']==0))
//   {
//   header('location:outSession.php');

//   }
//   else
//   {
?>


<?php include_once("includes/conn.php"); ?>
<!-- MAO NI ANG HEADER -->
<?php include("includes/header.php"); ?>      

<!-- UI THEME DIRI -->
<?php// include("includes/ui-theme.php"); ?>

<div class="app-main">
<!-- sidebar diri  -->
<?php include("includes/sidebar.php"); ?>



<!-- Condition If unza nga page gi click -->
<?php 
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
     include("pages/home.php"); 
   }


 ?> 

<!-- MAO NI IYA FOOTER -->
<?php include("includes/footer.php"); ?>


  
