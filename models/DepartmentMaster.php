<?php
require_once "../lib/pdo.php";

class DepartmentMaster
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
        $query = "SELECT * FROM department_master;";

        $this->db->query($query);

        return $this->db->resultset();
    }

public function create($data)
    {
        $query = "INSERT INTO department_master(dept)
                    VALUES (:dept)";

        $this->db->query($query);

        $this->db->bind('dept', $data['dept']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param integer $id - Department id
     * @return object
     */
    public function remove($id)
    {
        $treatment = new TreatmentMaster();
        $result= $treatment -> remove_byd_id($id);

        $query = "DELETE FROM department_master WHERE id= :id;";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }
}
