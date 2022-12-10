<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star  </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body class="">
<div class="main-panel" id="dash">
    <div class="content-wrapper">     
  <h4 class="card-title">Bordered table</h4>
  <p class="card-description">
    Add class <code>.table-bordered</code>
  </p>
  <?php
  
  $query= ("SELECT F_Name, D_Name, P_Name FROM department t1 INNER JOIN faculty t2 ON t1.F_ID = t2.F_ID INNER JOIN program t4 USING (D_ID) ");
  $result= mysqli_query($conn,$query);
    

  ?>
  <table class="table table-bordered">
          
      <tr>
      
        <th>
          faculty
        </th>
        <th>
          department
        </th>
        <th>
          program
        </th>
      </tr>
    </thead>
  
    <tbody>
 

      <tr>
      <?php while ($num = mysqli_fetch_assoc($result))
   { ?>
        <td>
          <?php echo $num['F_Name'];?>
        </td>
        
        <td>
        <?php echo $num['D_Name'];?>

        </td>
        <td>
        <?php echo $num['P_Name'];?>

        </td> 
    </tr>
    <?php}?>
    </tbody>
  </table>
    </div>
  </div>
   </div>
  
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>
</html>

