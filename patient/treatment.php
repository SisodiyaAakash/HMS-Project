<?php
    $title= "My Treatment Records | GUNI HMS";
    $page_name= "treatment";

    include_once '../config/db.php';
    include_once '../models/TreatmentMaster.php';
    include_once '../models/TreatmentRecords.php';

    session_start();
    $p_username = $_SESSION["PATIENT_USERNAME"];
        // treatment
    $treatment_master = new treatmentMaster();
    $treatment_list = $treatment_master->find();

    // treatment
    $treatment_record = new TreatmentRecords();
    $treatment_record_list = $treatment_record->find_by_patient($p_username);
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
            <h2 class="heading">Treatment Records</h2>
            <div class="desktop-hide">
                <h4 class="center">Please Use Wide Screen For Records</h4>
            </div>
          <table>
          <thead>
            <tr>
              <td class="center" colspan="8">Recent Treatment Records</td>
            </tr>
            <tr>
              <th>Patient Name</th>
              <th>Doctor Name</th>
              <th>Treatment Description</th>
              <th>Treatment</th>
              <th>Treatment Duration</th>
              <th>Date</th>
              <th>Time</th>
              <th>Cost</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($treatment_record_list as $treatment_record_row): ?>
            <tr>
              <td><?php echo ($treatment_record_row->fullname); ?></td>
              <td><?php echo ($treatment_record_row->dname); ?></td>
              <td><?php echo ($treatment_record_row->description); ?></td>
              <td><?php echo ($treatment_record_row->treatment); ?></td>
              <td><?php echo ($treatment_record_row->duration); ?></td>
              <td><?php echo ($treatment_record_row->start_date); ?></td>
              <td><?php echo ($treatment_record_row->start_time); ?></td>
              <td><?php echo ($treatment_record_row->cost); ?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        </div>
    </div>
</body>
</html>
