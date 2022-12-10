<html>
<head>
  <meta charset="utf-8">
  <title>Sign up</title>
  <link rel="stylesheet" type="text/css" href="../../css/styleLogin.css">
  <script language="javascript" type="text/javascript">
    </script>
  <script src="../js/jquery.js"></script>
    <style>

    </style>
</head>

<body>

  <?php
  #include(include_once('includes/config.php'));
  if(!isset($_POST['submit']))
  {
    printForm();
  }
  else 
  {

    include_once('../../includes/conn.php');
    $fuid=$_POST['faculty'];
    $errors = array();
    $faculty ='';
    $department='';
    $program='';
    if(empty($_POST['faculty']))
    {
      $errors[] = 'YOU forget to enter your first name.';
    }
    else
    {
      $faculty = mysqli_real_escape_string($conn, trim($_POST['faculty']));
    }
    if(empty($_POST['department']))
    {
      $errors[] = 'YOU forget to enter your last name.';
    }
    else
    {
      $department = mysqli_real_escape_string($conn, trim($_POST['department']));
    }

    
    if(empty($errors))
    {
    
      $query = "INSERT INTO `department` (`D_ID`, `D_Name`, F_ID) VALUES (NULL, '$department','$fuid')";
      $r = mysqli_query($conn ,$query);
      
      
      
      if($r)
      {
      echo "<script>alert('DONE');</script>";
      echo "<script type='text/javascript'> document.location = 'add-program.php'; </script>";

      #echo "<script type='text/javascript'> document.location = 'q-page.php?id=".mysqli_insert_id($conn)."'; </script>";
      }
    
      else
      {
        echo '<h1>System Error</h1>
        <p class="error">you could not be registered due to a system error. We apologize for any inconvence.</p>';
        echo '<p>'. mysqli_error($conn).'<br/><br/>Query: '.$query.'</p>';


      }
      mysqli_close($conn);
      exit();
    }

    else
    {
      echo '<h1> Error!</h1>
      <p calss="error">The following error(s) occurred:<br/>';
      foreach ($errors as $msg)
      {
        echo " - $msg<br />\n";
      }
      echo '</p><p>Plasse try again.</p><p><br /></p>';  
    }
    mysqli_close($conn);	
	
}
  function printForm($faculty="", $department="" ,$program="")
  {
  ?>
  <form action="" method="post">
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
      <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <a href="../index.php"><img src="../../images/Logo.png"></a>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign up to your account</span>
              <form id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="First Name">Faculty</label>
                  
                  <select  class="form-control" name="faculty">
                    <option value="0">Select faculty:</option>
                    
                    <?php 
              include_once('../../includes/conn.php');
                $selCourse = mysqli_query($conn,"SELECT * FROM faculty ORDER BY F_ID asc");
                while ($selCourseRow = mysqli_fetch_assoc($selCourse)){ ?>
                  <option value="<?php echo $selCourseRow['F_ID']; ?>"><?php echo $selCourseRow['F_Name']; ?></option>
                <?php }
               ?>
            </select>
                </div>
                <div class="field padding-bottom--24" id='dep'>
                  <label for="Last Name">Department</label>
                  <input  class="form-control" name="department">
                </div>
                
                
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continue">
                </div>
                <span> <a href="../home.php">back</a></span>
          </div>
              </form>
            </div>
          </div>
          
      </div>
    </div>
  </div>
</form>
                    <?php } ?>
</body>

</html>