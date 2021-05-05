<?php
require_once "../lib/pdo.php";

class TreatmentNotification
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
        $query = "SELECT * FROM treatment_notification;";

        $this->db->query($query);

        return $this->db->resultset();
    }

    // /**
    //  * @param user_name - Patient user_name
    //  * @return array
    //  */
    public function find_by_uname($user_name)
    {
        $query = "SELECT d.dname, tn.id, tn.notification 
                    FROM treatment_notification tn, doctor_master d 
                    WHERE d.user_name=tn.d_uname AND tn.user_name= '$user_name';";

        $this->db->query($query);

        return $this->db->resultset();
    }

    public function create($data)
    {
        $query = "INSERT INTO treatment_notification(user_name, d_uname, notification)
                    VALUES (:user_name, :d_uname, :notification)";

        $this->db->query($query);

        $this->db->bind('user_name', $data['user_name']);
        $this->db->bind('d_uname', $data['d_uname']);
        $this->db->bind('notification', $data['notification']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $user_name - user_name
     * @return object
     */
    public function remove_by_user($user_name)
    {
        $query = "DELETE FROM treatment_notification WHERE user_name= :user_name;";

        $this->db->query($query);
        $this->db->bind('user_name', $user_name);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }

    /**
     * @param integer id - id
     * @return object
     */
    public function remove($id)
    {
        $query = "DELETE FROM treatment_notification WHERE id= :id;";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }
}
