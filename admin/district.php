<?php
    $title= "Districts | GUNI HMS";
    $page_name= "states";
    
    include_once '../config/db.php';
    include_once '../models/District.php';
    
    session_start();
    $state_id=NULL;

    if(isset($_GET['state_id'])){
      $state_id=$_GET['state_id'];
      $_SESSION['state_id']=$state_id;
    }
    else if(isset($_SESSION['state_id'])){
      $state_id=$_SESSION['state_id'];
    }
    
    $district_master = new District();
    
    $INPUT = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    
    if (isset($_GET['remove_district'])) {
      $id = $_GET['remove_district'];
      
      $result = $district_master -> remove($id);
      
      if ($result === TRUE) {
        echo("<script>alert('District removed');</script>");
      }
    }

    if (isset($INPUT['submit'])) {

        // Doctor Master Table (doctor_master)
        $district = $INPUT['district'];

        $master_payload = array(
            "sid" => $state_id,
            "district" => $district
        );
        
        $district_master -> create($master_payload);

        echo '<script>alert("New district added successfully")</script>';
    }
    // district Data Fetching
    $district_master = new District();
    $district_list = $district_master->find_by_state($state_id);
  ?>
<!DOCTYPE html>
<html>
  <?php
      include_once 'comps/head.php';
      ?>
    <body>
    <?php
        include_once 'comps/header.php';
    ?>
    <div class="pagearea">
      <div class="container">
        <h2 class="heading">district Records</h2>
        <div class="form-flex">
            <form name="district-form" method="post" class="contact" onsubmit="return validateform();">
                <h2 class="heading">Add New district</h2>
                <input name="district" type="text" placeholder="district Name"/>
                <button name="submit" type="submit" id="submit" value="submit">Add district</button>
            </form>
        </div>

        <div class="desktop-hide">
            <h4 class="center">Please Use Wide Screen For Records</h4>
        </div>
        <!-- Doctors lists-->
        <table>
          <thead>
            <tr>
              <td class="center" colspan="3">District List</td>
            </tr>
            <tr>
              <th>ID</th>
              <th>District Name</th>
              <th class="hide"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($district_list as $district_row): ?>
            <tr>
              <td><?php echo ($district_row->id); ?></td>
              <td><?php echo ($district_row->district); ?></td>
              <td><a href="?remove_district=<?php echo($district_row->id)?>">Delete</a></td>
            </tr>
          </tbody>
            <?php endforeach;?>
        </table>
      </div>
    </div>
  </body>
  <script>
      // document.forms['district-form'].addEventListener('submit', validateform);
      // Validation Script
      function validateform(event)
      {
          const form = document.forms['district-form'];

          if (!form) {
              alert("Can't find form");
              return;
          }

          // validate district name
          const nameInput = form['district'];
          if (nameInput.value.length === 0) {
              alert("Require district name");
              nameInput.focus();
              return false;
          }
          else if (alphaspaceExp.test(nameInput.value) === false) {
              alert("Invalid name");
              nameInput.focus();
              return false;
          }
          return true;
      }
  </script>
</html>