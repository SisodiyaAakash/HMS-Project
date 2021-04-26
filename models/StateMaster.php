<?php
require_once "../lib/pdo.php";

class StateMaster
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
        $query = "SELECT * FROM state_master;";

        $this->db->query($query);

        return $this->db->resultset();
    }

    public function create($data)
    {
        $query = "INSERT INTO state_master(state_name)
                    VALUES (:state_name)";

        $this->db->query($query);

        $this->db->bind('state_name', $data['state_name']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param integer $id - state id
     * @return object
     */
    public function remove($id)
    {
        $query = "DELETE FROM state_master WHERE id= :id;";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }
}
