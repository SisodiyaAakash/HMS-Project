<?php
$title = "Patient Dashboard | GUNI HMS";
$page_name = "dashboard";

include_once '../config/db.php';
include_once '../models/DepartmentMaster.php';
include_once '../models/AppointmentMaster.php';
include_once '../models/AppointmentStatus.php';
include_once '../models/PatientMaster.php';
include_once '../models/PatientMaster.php';

session_start();
$p_username = $_SESSION["PATIENT_USERNAME"];

$INPUT = filter_var_array($_POST, FILTER_SANITIZE_STRING);
if (isset($INPUT['submit'])) {
    // // Patient master table (appointment)
    $aadhar = $INPUT['aadhar'];

    $aadhar_payload = array(
        "user_name" => $p_username,
        "aadhar" => $aadhar,
    );

    $aadhar_instance = new PatientMaster();
    $aadhar_instance->update_aadhar($aadhar_payload);

    echo '<script>alert("Aadhar added successfuly")</script>';
}
// Department Data Fetching
$department_master = new DepartmentMaster();
$department_list = $department_master->find();

// Appointment
$appointment_master = new AppointmentMaster();
$appointment_list = $appointment_master->find_by_uname($p_username);

//Patient details fetching
$patient_data = new PatientMaster();
$patient_data_list = $patient_data->find_by_uname($p_username);
?>
<!DOCTYPE html>
<html>
    <?php
include_once 'comps/head.php';
?>
  <body>
      <style>
        .adhar-form{
            position:absolute;
            right: 8px;
            margin-top: 5px;
            height: 100px;
            background-color: #FFB051;
            border-radius: 10px;
            display: none;
        }
        .adhar-btn:hover .adhar-form{
            display: block;
        }
        form{
            width: 80%;
            margin-left:auto;
            margin-right: auto;
            display: flex;
            flex-direction: column;
            border:none;
            padding:0.5rem !important;
            margin: 0;
        }
        input, button{
            background-color:white !important;
            outline:none !important;
            border:none !important;
        }
        input{
            width: 200px !important;
            margin:0;
            font-size: 20px !important;
            padding:5px !important;"
            background-color: #fff !important;
        }
        button{
            position: absolute;
            right: 8px;
            top: 30px;
            background-color:#3B76EF !important;
            color:#FFF !important;
            border-radius:5px !important;
            border:none !important;
            max-width:8rem !important;
            padding: 0.5rem 1rem !important;
            height: auto !important;
        }
        .notify-card:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .notify-card .appointment-info {
            border-bottom: 1px solid #223e54;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        padding: 0.5rem;
        color: #223e54;
        font-size: calc(15px + 0.4vw);
    }
    .msg-container{
        display: flex;
        flex-wrap: wrap;
    }
    .notify-card{
        margin: 12px;
        cursor: pointer;
        width: 30%;
        border: 1px solid #45474D;
        border-radius: 12px;
    }
    .adhar{
        width: 40%;
        height: 100px;
        position: relative;
    }
    .adhar .msg{
        align-items: center;
        display: flex;
        justify-content: space-between;
    }
    .adhar-btn{
        background-color: #FFB051;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        border: 1px solid #FFB051;
        color: #fff;
    }
        .adhar-btn:hover{
            background-color: transparent;
            border: 1px solid #FFB051;
            color: #FFB051;
        }
        .notify-card:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .notify-card .appointment-info{
            border-bottom: 1px solid #223E54;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            padding: 0.5rem;
            color: #223E54;
            font-size: calc(15px + 0.4vw);
        }
        .notify-card .msg{
            font-size: calc(10px + 0.4vw);
            padding: 0.5rem;
            color: #45474D;
        }
        @media screen and (max-width: 800px){
            .notify-card{
                width: 90%;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
    <?php
include_once 'comps/header.php';
?>
    <div class="pagearea">
        <div class="container">
            <div class="msg-container">
                <div class="notify-card">
                    <div class="appointment-info">
                        From Dr.Aakash Sisodiya
                        <br />
                        Date: 30 April 2021 at 2:30:00
                    </div>
                    <div class="msg">
                        Sorry we unable to consult you right now due to lack of resources now. Please wait for a week if possible.
                    </div>
                </div>

                <?php foreach ($patient_data_list as $patient_data_row): ?>
                    <?php if ($patient_data_row->aadhar == ""): ?>
                        <div class="notify-card adhar">
                            <div class="appointment-info">From HMS System</div>
                            <div class="msg">Please register your aadhar number. <span id="adhar-btn" class="adhar-btn">Add aadhar</span></div>
                            <div class="adhar-form">
                                <form name="aadhar-form" method="post" class="contact" onsubmit="return validateform();">
                                    <input name="aadhar" type="text" placeholder="Aadhar number" />
                                    <button name="submit" type="submit" id="submit" value="submit">Add aadhar</button>
                                </form>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endforeach;?>

            </div>
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
              <th>Doctor</th>
              <th>Department</th>
              <th>Reason</th>
              <th>Appointment Date</th>
              <th>Appointment Time</th>
              <th>Status</th>
              <th class="hide"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($appointment_list as $appointment_row): ?>
            <tr>
              <td><?php echo ($appointment_row->dname); ?></td>
              <td><?php echo ($appointment_row->dept); ?></td>
              <td><?php echo ($appointment_row->reason); ?></td>
              <td><?php echo ($appointment_row->ap_date); ?></td>
              <td><?php echo ($appointment_row->ap_time); ?></td>
              <td><?php echo ($appointment_row->status); ?></td>
              <td>
                <a href="#">View Report</a>
                <hr />
                <a href="#">Delete Appointment</a>
              </td>
            </tr>
          </tbody>
            <?php endforeach;?>
        </table>
        </div>
    </div>
</body>
<script>
    var opened = true;
    $(document).ready(function(){
        $("#adhar-btn").click (function () {
            if (opened === true) {
                // Logic for close adharform
                $(".adhar-form").css("display", "block");
                opened=false;
            }
            else {
                // Logic for open adharform
                $(".adhar-form").css("display", "none");
                opened=true;
            }
        })
    });
</script>
<script src="../files/validate.js"></script>
<script>
    // document.forms['aadhar-form'].addEventListener('submit', validateform);
    // Validation Script
    function validateform(event)
    {
      const form = document.forms['aadhar-form'];
      if (!form) {
          alert("Can't find form");
          return;
      }
      // Validate Aadhar number
      const aadharInput = form['aadhar'];
        if (aadharInput.value == "") {
            alert("Require aadhar number for verification");
            aadharInput.focus();
            return false;
        }
        else if (numericExp.test(aadharInput.value) === false) {
            alert("Invalid aadhar details please use 0 to 9 only")
            aadharInput.focus();
            return false;
        }
        else if (aadharInput.value.length !== 12) {
            alert("Aadhar number should be 12 digits.")
            aadharInput.focus();
            return false;
        }


      return true;
    }
</script>
</html>
