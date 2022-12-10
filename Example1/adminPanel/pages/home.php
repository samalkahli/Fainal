<div class="app-main__outer">
    <div id="refreshData">
    <div class="app-main__inner">   
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
    