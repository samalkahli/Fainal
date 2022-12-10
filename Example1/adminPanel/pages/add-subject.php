<html>
<head>
  <meta charset="utf-8">
  <title>Sign in</title>  
  <link rel="stylesheet" type="text/css" href="..\..\css\styleLogin.css">
  <script src="../js/jquery.js"></script>
<script>
    function getData(data)
    {
      //alert('ok');
      if(data == 'dep')
      {
        //console.log( $('fact') );
        var fact = document.getElementById('fact').value;
        // alert(fact);
        $("#dep").empty(); 
        if(fact>0)
        {
          $.get("test.php?data=dep&fact="+fact, function(data, status)
          {
            //alert("Data: " + fact + "\nStatus: " + status); 
              $("#dep").empty(); 
              $('#dep').append(data);
          });
        }
//         if(fact==2)
//         {
//           $.get("test1.php?data=dep&fact="+fact, function(data, status)
//           {
//             //alert("Data: " + fact + "\nStatus: " + status);
//               $("#dep").empty(); 
//               $("#dep").append(data); 
//           });
//         }
        else 
        return false;
        
          
      }
    }
    </script>
</head>

<body>

  <?php
  session_start();
  if(isset($_POST['submit']))
  {
    include_once('../../includes/conn.php');
    $deid='';
    $name='';
    $semster='';
    $lecturer='';
    $errors=array();
    if(empty($_POST['name']))
    {
        $errors[] = 'select name';
    }
    else
    {
        $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    }
    if(empty($_POST['semster']))
    {
        $errors[] = 'select semster'; 
    }
    else
    {
        $semster = mysqli_real_escape_string($conn, trim($_POST['semster']));
    }
    if(empty($_POST['lecturer']))
    {
        $errors[] = 'select lecturer';
    }
    else
    {
        $lecturer = mysqli_real_escape_string($conn, trim($_POST['lecturer']));
    }
    if(empty($_POST['department']))
    {
        $errors[] = 'select department';
    }
    else
    {
        $deid = mysqli_real_escape_string($conn, trim($_POST['department']));
    }
    
    if(empty($errors))
    {
        $query = "INSERT INTO subject (Su_Name,semster, Le_ID, ) VALUES ('$name','$lecturer','$semster')";
        $r = @mysqli_query($conn ,$query);
  
        if($r)
        {
            echo "<script>alert('Profile updated successfully');</script>";
            header('location:../manage-lecturer.php');

        }
        
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
    
  else
  {
    /*function printForm($first_name="", $last_name="" ,$lecturer="")
     {*/
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
       <div class="formbg-outer">
       <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <a href="../index.php"><img src="../../images/Logo.png"></a>
        </div>
 
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Add subject</span>
              <form id="stripe-login">
              <div class="field padding-bottom--24">
                  <label>Faculty</label>
                  
                  <select  class="form-control" name="faculty" id="fact" onchange="getData('dep')">
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
                <div class="field padding-bottom--24">
                  <label for="Last Name">Department</label>
                  <select  class="form-control" name="department" id="dep">
                   

                  </select>
                </div>
             
                <div class="field padding-bottom--24">
                <label>Semster</label>
            <select class="form-control" name="semster">
              <option value="0">Select Semster</option>
              <option value="1">one</option>
              <option value="2">two</option>
              <option value="3">three</option>
              <option value="4">four</option>
              <option value="5">five</option>
              <option value="6">six</option>
              <option value="7">seven</option>
              <option value="8">eight</option>
            </select>
                </div>
            
            <div class="field padding-bottom--24">
                      <label>Lecturer</label>
            <select class="form-control" name="lecturer">
            <option value="0">Select Lecturer</option>
              <?php 
              include_once('../../includes/conn.php');
                $selCourse = mysqli_query($conn,"SELECT * FROM lecturer ORDER BY Le_ID asc");
                while ($selCourseRow = mysqli_fetch_assoc($selCourse)){ ?>
                  <option value="<?php echo $selCourseRow['Le_ID']; ?>"><?php echo $selCourseRow['Le_Name']; ?></option>
                <?php }
               ?>
            </select>
                </div>
                <div class="field padding-bottom--24">
                  <label for="name">Name The Subject</label>
                  <input type="text" name="name">
                </div>
               
                <div class="field padding-bottom--19">
                <div class="formbg-inner">

                  <input type="submit" name="submit" value="Continue">
                </div>
              </div>
              </form>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
    </form>
  <?php } ?>
  <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
</body>


</html>