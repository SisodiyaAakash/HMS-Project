<?php
require_once "../lib/pdo.php";

class DoctorTiming
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * @return array
     */
    public function find()
    {
        $query = "SELECT * FROM doctor_timing;";

        $this->db->query($query);

        return $this->db->resultset();
    }

    /**
     * @param u_name - User name
     * @return array
     */
    public function find_by_uname($u_name)
    {
        $query = "SELECT d.day_name, dt.working_day, dt.start_time, dt.end_time
                    FROM day_master d, doctor_timing dt 
                    WHERE d.id=dt.working_day AND dt.u_name = '$u_name'
                    ORDER BY dt.working_day";

        $this->db->query($query);

        return $this->db->resultset();
    }
    public function create($data)
    {
        $query = "INSERT INTO doctor_timing(u_name, working_day, start_time, end_time)
                    VALUES (:u_name, :working_day, :start_time, :end_time)";

        $this->db->query($query);

        $this->db->bind('u_name', $data['u_name']);
        $this->db->bind('working_day', $data['working_day']);
        $this->db->bind('start_time', $data['start_time']);
        $this->db->bind('end_time', $data['end_time']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $u_name - doctor username
     * @return object
     */
    public function remove($u_name)
    {
        $query = "DELETE FROM doctor_timing WHERE u_name= :u_name;";

        $this->db->query($query);
        $this->db->bind('u_name', $u_name);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }

    /**
     * @param string $u_name - doctor username
     * @param string $working_day - day
     * @return object
     */
    public function remove_day($u_name,$working_day)
    {
        $query = "DELETE FROM doctor_timing WHERE u_name= :u_name AND working_day= :working_day;";

        $this->db->query($query);
        $this->db->bind('u_name', $u_name);
        $this->db->bind('working_day', $working_day);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }
}
