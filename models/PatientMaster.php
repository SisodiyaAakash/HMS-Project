<?php
require_once "../lib/pdo.php";

class PatientMaster
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
        $query = "SELECT * FROM patient_master;";

        $this->db->query($query);

        return $this->db->resultset();
    }

    /**
     * @param user_name - User name
     * @return array
     */
    public function find_by_uname($user_name)
    {
        $query = "SELECT * FROM patient_master WHERE user_name = '$user_name'";

        $this->db->query($query);

        return $this->db->resultset();
    }

    // /**
    //  * @param user_name - User name
    //  * @return array
    //  */
    // public function find_by_uname_profile ($user_name) {
    //     $query = "SELECT * FROM patient_master WHERE user_name = '$user_name'";

    //     $this->db->query($query);

    //     return $this->db->resultset();
    // }

    public function create($data)
    {
        $query = "INSERT INTO patient_master(user_name, fullname, dob, gender, bg_id, pd, aadhar) VALUES (:user_name, :fullname, :dob, :gender, :bg_id, :pd, :aadhar)";

        $this->db->query($query);

        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('dob', $data['dob']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('bg_id', $data['bg_id']);
        $this->db->bind('pd', $data['pd']);
        $this->db->bind('aadhar', $data['aadhar']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update($data)
    {
        $query = "UPDATE patient_master
                        SET user_name= :user_name, fullname= :fullname, dob= :dob, gender= :gender, pd= :pd, aadhar= :aadhar
                        WHERE user_name= :user_name";

        $this->db->query($query);

        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('fullname', $data['fullname']);
        $this->db->bind('dob', $data['dob']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('pd', $data['pd']);
        $this->db->bind('aadhar', $data['aadhar']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update_aadhar($data)
    {
        $query = "UPDATE patient_master
                        SET user_name= :user_name, aadhar= :aadhar
                        WHERE user_name= :user_name";

        $this->db->query($query);

        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('aadhar', $data['aadhar']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param integer $user_name - patient username
     * @return object
     */
    public function remove($user_name)
    {
        $query = "DELETE FROM patient_master WHERE user_name= :user_name;";

        $this->db->query($query);
        $this->db->bind('user_name', $user_name);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }
}
