<?php
$title = "My Appointments | GUNI HMS";
$page_name = "appointment";

include_once '../config/db.php';
include_once '../models/AppointmentMaster.php';
include_once '../models/AppointmentStatus.php';

session_start();
$user_name = $_SESSION["DOCTOR_USERNAME"];

$INPUT = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$appointment_status = new AppointmentStatus();

if (isset($INPUT['action'])) {
    $action = $INPUT['action'];
    $ap_id = $INPUT['ap-id'];
    $notify_message = $INPUT['notify-message'];

    $result = $appointment_status->status_update($ap_id, $action, $notify_message);

    if ($action === 'Approved') {
      echo ("<script>alert('You approved appointment');</script>");
    }
    elseif ($action === 'Disapproved') {
      echo ("<script>alert('You disapproved appointment');</script>");
    }
}

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
  <style>
    textarea{
      width: 95%;
      height: auto;
      display: block;
      overflow: hidden;
      resize: none;
    }
    textarea ::placeholder{
      text-align: center;
    }
    form{
      border: none !important;
    }
    button{
      font-size: 16px;
      cursor: pointer;
      border: none;
      outline: none;
    }
    .approve{
      color: #3B76EF;
    }
    .disapprove{
      background-color: red;
      color: #FFF;
    }
  </style>

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
                <td class="center" colspan="8">Upcoming Appointments</td>
              </tr>
              <tr>
                <th>Patient Name</th>
                <th>Contact No</th>
                <th>Reason</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th colspan="2">Notify Message</th>
                <th class="hide"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($appointment_list as $appointment_row): ?>
                <?php if ($appointment_row->ap_date > date("Y-m-d") && $appointment_row->status=='Pending'): ?>
              <tr>
                <td><?php echo ($appointment_row->fullname); ?></td>
                <td><?php echo ($appointment_row->phone); ?></td>
                <td><?php echo ($appointment_row->reason); ?></td>
                <td><?php echo ($appointment_row->ap_date); ?></td>
                <td><?php echo ($appointment_row->ap_time); ?></td>

                <form name="appointment-status-change" method="post">
                  <td colspan="2">
                    <textarea type="text" name="notify-message" placeholder="Write Notify Message" rows="4">The appointment will be at <?php echo ($appointment_row->ap_time); ?>
                    </textarea>
                    <input hidden name="ap-id" type="text" value="<?php echo ($appointment_row->id) ?>" readonly />
                  </td>
                  <td>
                    <button class="approve" type="submit" name="action" value="Approved">Approve</button>
                    <hr />
                    <button class="disapprove" type="submit" name="action" value="Disapproved">Disapprove</button>
                  </td>
                </form>
              </tr>
              <?php endif;?>
              <?php endforeach;?>
            </tbody>
          </table>

          <table>
            <thead>
              <tr>
                <td class="center" colspan="6">Appointment History</td>
              </tr>
              <tr>
              <th>Patient Name</th>
              <th>Contact No</th>
              <th>Reason</th>
              <th>Appointment Date</th>
              <th>Appointment Time</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($appointment_list as $appointment_row): ?>
            <?php if ($appointment_row->ap_date < date("Y-m-d")): ?>
            <tr>
              <td><?php echo ($appointment_row->fullname); ?></td>
              <td><?php echo ($appointment_row->phone); ?></td>
              <td><?php echo ($appointment_row->reason); ?></td>
              <td><?php echo ($appointment_row->ap_date); ?></td>
              <td><?php echo ($appointment_row->ap_time); ?></td>
              <td><?php echo ($appointment_row->status); ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach;?>
            </tbody>
          </table>
      </div>
    </div>
  </body>
</html>