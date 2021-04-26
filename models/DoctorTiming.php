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
     * @param user_name - User name
     * @return array
     */
    public function find_by_uname($user_name)
    {
        $query = "SELECT * FROM doctor_timing WHERE user_name = '$user_name'";

        $this->db->query($query);

        return $this->db->resultset();
    }
    public function create($data)
    {
        $query = "INSERT INTO doctor_timing(user_name, working_day, start_time, end_time, status)
                    VALUES (:user_name, :working_day, :start_time, :end_time, :status)";

        $this->db->query($query);

        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('working_day', $data['working_day']);
        $this->db->bind('start_time', $data['start_time']);
        $this->db->bind('end_time', $data['end_time']);
        $this->db->bind('status', $data['status']);

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
}
