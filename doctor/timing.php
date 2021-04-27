<?php
    $title= "My Timing | GUNI HMS";
    $page_name= "timing";

    include_once '../config/db.php';
    include_once '../models/DayMaster.php';
    include_once '../models/DoctorTiming.php';
    
    session_start();
    $doctor_timing_instance = new DoctorTiming();
    $user_name= $_SESSION["DOCTOR_USERNAME"];
    
    $INPUT = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    
    if (isset($_GET['remove_day'])) {
      $work_day = $_GET['remove_day'];

      $result = $doctor_timing_instance -> remove_day($user_name,$work_day);

      if ($result === TRUE) {
        echo("<script>alert('Day timing removed');</script>");
      }
    }

    if (isset($INPUT['submit'])) {
        // Doctor timing table (doctor_timing)
        $u_name = $user_name;
        $working_day = $INPUT['day'];
        $start_time = $INPUT['start-time'];
        $end_time = $INPUT['end-time'];
  
        $doctor_timing_payload = array(
            "u_name" => $u_name,
            "working_day" => $working_day,
            "start_time" => $start_time,
            "end_time" => $end_time,
            "d_uname" => $user_name,
        );
  
        $doctor_timing_instance->create($doctor_timing_payload);
        
        echo '<script>alert("Added timing successfully")</script>';
    }

    $day= new DayMaster();
    $day_list= $day->find();

    $doctor_timing = new DoctorTiming();
    $doctor_timing_list = $doctor_timing->find_by_uname($user_name);
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
        <form name="timing-form" method="post" class="contact" onsubmit="return validateform();">
          <h2 class="heading">Add New Timing</h2>

          <select name="day">
            <option selected value="">Select day</option>
            <?php foreach($day_list as $day_row): ?>
              <option <?php foreach($doctor_timing_list as $doctor_timing_row): ?><?php if($day_row->id === $doctor_timing_row->working_day) { echo "disabled"; } ?><?php endforeach; ?> value="<?php echo($day_row->id);?>"><?php echo($day_row->day_name); ?></option>
            <?php endforeach; ?>
          </select>

          <h6 class="label">Start Time</h6>
          <input name="start-time" type="time" placeholder="Start Time"/>

          <h6 class="label">End Time</h6>
          <input name="end-time" type="time" placeholder="End Time"/>

          <button name="submit" type="submit" id="submit" value="submit">Add Timing</button>
        </form>

          <table>
            <thead>
              <tr>
                <td class="center" colspan="4">Doctor Timing</td>
              </tr>
              <tr>
                <th>Day</th>
                <th>From</th>
                <th>To</th>
                <th class="hide"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($doctor_timing_list as $doctor_timing_row): ?>
              <tr>
                <td><?php echo($doctor_timing_row->day_name);?></td>
                <td><?php echo($doctor_timing_row->start_time);?></td>
                <td><?php echo($doctor_timing_row->end_time);?></td>
                <td>
                  <a href="?remove_day=<?php echo($doctor_timing_row->working_day)?>">Delete Timing</a>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>

        <div class="day-table"></div>
      </div>
    </div>
  </body>
  <script src="../files/validate.js"></script>
<script>
    // Validation Script
    function validateform(event)
    {
        const form = document.forms['timing-form'];

        if (!form) {
            alert("Can't find form");
            return;
        }
        // Validate day
        const dayInput = form['day'];
        if (dayInput.value == "") {
            alert("Select day");
            dayInput.focus();
            return false;
        }

        // Validate starttime
        const startTimeInput = form['start-time'];
        if (startTimeInput.value == "") {
            alert("Select starttime");
            startTimeInput.focus();
            return false;
        }

         // Validate endtime
        const endTimeInput = form['end-time'];
        if (endTimeInput.value == "") {
            alert("Select endtime");
            endTimeInput.focus();
            return false;
        }
        return true;
    }
</script>
</html>