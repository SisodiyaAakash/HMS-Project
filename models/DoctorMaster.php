<?php
require_once "../lib/pdo.php";

include_once("DoctorCredential.php");
include_once("DoctorQualification.php");
include_once("DoctorTiming.php");

class DoctorMaster
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
        $query = "SELECT * FROM doctor_master;";

        $this->db->query($query);

        return $this->db->resultset();
    }

    /**
     * @param user_name - User name
     * @return array
     */
    public function find_by_uname($user_name)
    {
        $query = "SELECT * FROM doctor_master WHERE user_name = '$user_name'";

        $this->db->query($query);

        return $this->db->resultset();
    }

    /**
     * @param d_id - User name
     * @return array
     */
    public function find_by_department($d_id)
    {
        $query = "SELECT q.d_id, q.user_name, d.dname
                     FROM doctor_master d, doctor_qualification q
                     WHERE q.user_name=d.user_name AND q.d_id = '$d_id'
                     ORDER BY d.dname";

        $this->db->query($query);

        return $this->db->resultset();
    }

    /**
     * @return array
     */
    public function find_doctor_details()
    {
        $query = "SELECT d.user_name, d.dname, d.dob, dp.dept, dq.education, dq.experience
                     FROM doctor_master d, department_master dp, doctor_qualification dq
                     WHERE d.user_name=dq.user_name AND dq.d_id=dp.id
                     ORDER BY d.dname";

        $this->db->query($query);

        return $this->db->resultset();
    }

    public function create($data)
    {
        $query = "INSERT INTO doctor_master(user_name, dname, dob, gender)
                    VALUES (:user_name, :dname, :dob, :gender)";

        $this->db->query($query);

        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('dname', $data['dname']);
        $this->db->bind('dob', $data['dob']);
        $this->db->bind('gender', $data['gender']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $query = "UPDATE doctor_master
                        SET user_name= :user_name, dname= :dname, dob= :dob, gender= :gender
                        WHERE user_name= :user_name";

        $this->db->query($query);

        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('dname', $data['dname']);
        $this->db->bind('dob', $data['dob']);
        $this->db->bind('gender', $data['gender']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $user_name - doctor username
     * @return object
     */
    public function remove($user_name)
    {
        $query = "DELETE FROM doctor_master WHERE user_name= :user_name;";

        $this->db->query($query);
        $this->db->bind('user_name', $user_name);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }

    /**
     * @param string $user_name - Doctor username
     * @return object
     */
     
    public function remove_trans_table($user_name)
    {
        $doctor_cred = new DoctorCredential();
        $result_cred= $doctor_cred -> remove($user_name);
        if($result_cred===FALSE){
            return FALSE;
        }
        $doctor_qual = new DoctorQualification();
        $result_qual= $doctor_qual -> remove($user_name);
        if($result_qual===FALSE){
            return FALSE;
        }
        $doctor_timing = new DoctorTiming();
        $result_timing= $doctor_timing -> remove($user_name);
        if($result_timing===FALSE){
            return FALSE;
        }
        return TRUE;
    }
}
