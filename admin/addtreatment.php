<?php
    $title= "Treatments List | GUNI HMS";
    $page_name= "treatmentlist";

    include_once '../config/db.php';
    include_once '../models/DepartmentMaster.php';
    include_once '../models/TreatmentMaster.php';

    $INPUT = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    if (isset($INPUT['submit'])) {
        
        // Patient Master Table (patient_master)
        $treatment = $INPUT['treatment-name']; 
        $d_id = $INPUT['department']; 
            
        $master_payload = array(
            "treatment" => $treatment,
            "d_id" => $d_id
        );
            
        $treatment_instance = new TreatmentMaster();
        $treatment_instance -> create($master_payload);

        echo '<script>alert("Added new treatment type successfuly")</script>';

    }

    // session_start();
    $department_master= new DepartmentMaster();
    $department_list= $department_master->find();

    $treatment_master = new TreatmentMaster();
    if (isset($_GET['remove_treatment'])) {
      $treatment_id = $_GET['remove_treatment'];

      $result = $treatment_master -> remove_byid($treatment_id);

      if ($result === TRUE) {
        echo("<script>alert('treatment removed');</script>");
      }
    }
    $treatment_list = $treatment_master->find_with_department();
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
        <div class="treatment-form">
            <form name="treatment-form" method="post" class="contact" onsubmit="return validateform();">
                <h2 class="heading">Add New Treatment Type</h2>

                <input name="treatment-name" type="text" placeholder="Treatment Name"/>

                <select name="department" id="department-input">
                    <option value="" selected>Select Department</option>
                    <?php foreach($department_list as $department_row): ?>
                        <option value="<?php echo($department_row->id);?>"><?php echo($department_row->dept); ?></option>
                    <?php endforeach; ?>
                </select>
                <button name="submit" type="submit" id="submit" value="submit">Add Treatment</button>
            </form>
        </div>

        <div class="desktop-hide">
            <h4 class="center">Please Use Wide Screen For Records</h4>
        </div>
        <!-- Treatments -->
          <table>
            <thead>
              <tr>
                <td class="center" colspan="4">Treatment Types</td>
              </tr>
              <tr>
                <th>Treatment ID</th>
                <th>Treatment Name</th>
                <th>Department</th>
                <th class="hide"></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($treatment_list as $treatment_row): ?>
              <tr>
                <td><?php echo($treatment_row->id);?></td>
                <td><?php echo($treatment_row->treatment);?></td>
                <td><?php echo($treatment_row->dept);?></td>
                <td><a href="?remove_treatment=<?php echo($treatment_row->id)?>">Delete</a></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
    </div>
</body>

<script src="../files/validate.js"></script>
<script>
    // document.forms['treatment-form'].addEventListener('submit', validateform);
    // Validation Script
    function validateform(event)
    {
      const form = document.forms['treatment-form'];
      if (!form) {
          alert("Can't find form");
          return;
      }

      // Validate treatment date
      const treatmentNameInput = form['treatment-name'];
      if (treatmentNameInput.value == "") {
          alert("Require treatment name");
          treatmentNameInput.focus();
          return false;
      }

      // Validate department
      const departmentInput = form['department'];
      if (departmentInput.value == "") {
          alert("Select department");
          departmentInput.focus();
          return false;
      }
      return true;
    }
</script>
</html>