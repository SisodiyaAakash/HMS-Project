<?php
    $title= "Doctor Dashboard | GUNI HMS";
    $page_name= "dashboard";

    include_once '../config/db.php';
    include_once '../models/AppointmentMaster.php';

    session_start();
    $user_name= $_SESSION["DOCTOR_USERNAME"];

    // Appointment
    $appointment_master = new AppointmentMaster();
    $appointment_list = $appointment_master->find_by_doctor($user_name);
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
        <table>
            <thead>
              <tr>
                <td class="center" colspan="5">Approved Appointment</td>
              </tr>
              <tr>
              <th>Patient Name</th>
              <th>Contact No</th>
              <th>Reason</th>
              <th>Appointment Date</th>
              <th>Appointment Time</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($appointment_list as $appointment_row): ?>
            <?php if ($appointment_row->ap_date > date("Y-m-d") && $appointment_row->status=='Approved'): ?>
            <tr>
              <td><?php echo ($appointment_row->fullname); ?></td>
              <td><?php echo ($appointment_row->phone); ?></td>
              <td><?php echo ($appointment_row->reason); ?></td>
              <td><?php echo ($appointment_row->ap_date); ?></td>
              <td><?php echo ($appointment_row->ap_time); ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach;?>
            </tbody>
          </table>
        </div>
    </div>
</body>
</html>
