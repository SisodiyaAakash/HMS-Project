<?php
require_once "../lib/pdo.php";

class AppointmentStatus
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
        $query = "SELECT * FROM appointment_status;";

        $this->db->query($query);

        return $this->db->resultset();
    }

    /**
     * @param id - Appointment id
     * @return array
     */
    public function find_by_id($id)
    {
        $query = "SELECT * FROM appointment_status WHERE id = '$id'";

        $this->db->query($query);

        return $this->db->resultset();
    }

    public function create($data)
    {
        $query = "INSERT INTO appointment_status(id, status)
                    VALUES (:id, 'Pending')";

        $this->db->query($query);

        $this->db->bind('id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function status_update($ap_id, $status, $message)
    {
        $query = "UPDATE appointment_status
                     SET status=:status, notify_message=:notify_message
                     WHERE id= :id";

        $this->db->query($query);

        $this -> db -> bind('id', $ap_id);
        $this -> db -> bind('status', $status);
        $this -> db -> bind('notify_message', $message);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param integer $id - Appointment ID
     * @return object
     */
    public function remove_byid($id)
    {
        $query = "DELETE FROM appointment_status WHERE id= :id;";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }
}
