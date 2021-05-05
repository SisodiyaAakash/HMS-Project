<?php
$title = "All Appointments | GUNI HMS";
$page_name = "appointment";

include_once '../config/db.php';
include_once '../models/AppointmentMaster.php';
include_once '../models/AppointmentStatus.php';

// session_start();

// Appointment
$appointment_master = new AppointmentMaster();
if (isset($_GET['remove_appointment'])) {
  $id = $_GET['remove_appointment'];
  
  $result = $appointment_master -> remove_byid($id);

  if ($result === TRUE) {
    echo("<script>alert('Appointment removed');</script>");
  }
}
$appointment_list = $appointment_master->find_for_admin();
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
        <div class="desktop-hide">
            <h4 class="center">Please Use Wide Screen For Records</h4>
        </div>
        <!-- upcoming appointments -->
        <table>
                <thead>
                <tr>
                    <td class="center" colspan="7">Upcoming Appointments</td>
                </tr>
                <tr>
                    <th>Patient Name</th>
                    <th>Patient Contact No</th>
                    <th>Reason</th>
                    <th>Department</th>
                    <th>Doctor Name</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($appointment_list as $appointment_row): ?>
                <?php if ($appointment_row->ap_date > date("Y-m-d")): ?>
                <tr>
                    <td><?php echo ($appointment_row->fullname); ?></td>
                    <td><?php echo ($appointment_row->phone); ?></td>
                    <td><?php echo ($appointment_row->reason); ?></td>
                    <td><?php echo ($appointment_row->dept); ?></td>
                    <td><?php echo ($appointment_row->dname); ?></td>
                    <td><?php echo ($appointment_row->ap_date); ?></td>
                    <td><?php echo ($appointment_row->ap_time); ?></td>
                </tr>
                <?php endif;?>
                <?php endforeach;?>
                </tbody>
            </table>

          <table>
                <thead>
                <tr>
                    <td class="center" colspan="9">Appointment History</td>
                </tr>
                <tr>
                    <th>Patient Name</th>
                    <th>Patient Contact No</th>
                    <th>Reason</th>
                    <th>Department</th>
                    <th>Doctor Name</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                    <th class="hide"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($appointment_list as $appointment_row): ?>
                <?php if ($appointment_row->ap_date < date("Y-m-d")): ?>
                <tr>
                    <td><?php echo ($appointment_row->fullname); ?></td>
                    <td><?php echo ($appointment_row->phone); ?></td>
                    <td><?php echo ($appointment_row->reason); ?></td>
                    <td><?php echo ($appointment_row->dept); ?></td>
                    <td><?php echo ($appointment_row->dname); ?></td>
                    <td><?php echo ($appointment_row->ap_date); ?></td>
                    <td><?php echo ($appointment_row->ap_time); ?></td>
                    <td><?php echo ($appointment_row->status); ?></td>
                    <td><a href="?remove_appointment=<?php echo($appointment_row->id)?>">Delete</a></td>
                </tr>
                <?php endif;?>
                <?php endforeach;?>
                </tbody>
            </table>
      </div>
    </div>
  </body>
</html>