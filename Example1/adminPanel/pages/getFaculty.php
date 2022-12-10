
 <?php 
 if(isset($_POST['submit']))
 {
  include_once('../../includes/conn.php');
  $fuid=$_GET['fact'];
  $errors = array();
 
  $department='';
  $program='';

  if(empty($_POST['department']))
  {
    $errors[] = '<script>alert("YOU forget to enter your last name");</script>';
  }
  else
  {
    $department = mysqli_real_escape_string($conn, trim($_POST['department']));
  }

  
  if(empty($errors))
  {
   
    $query = "INSERT INTO department ( D_Name, F_ID) VALUES ('$department','$fuid')";
    $r = mysqli_query($conn ,$query);
    
    
    
    if($r)
    {
     echo "<script>alert('DONE');</script>";
    //  header('location:../home.php');

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

?>
    <form method='post' action='add-department.php'>
   
    <div class="field padding-bottom--24">         
    <input  class="form-control" name="department">
    <div class="field padding-bottom--24">
    
    </div>
    <input type="submit" name="submit" value="Continue">
    </div>
    </form>
  