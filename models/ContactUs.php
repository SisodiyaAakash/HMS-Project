<?php
require_once "../lib/pdo.php";

class ContactUs
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
        $query = "SELECT * FROM contact_us;";

        $this->db->query($query);

        return $this->db->resultset();
    }

    public function create($data)
    {
        $query = "INSERT INTO contact_us(fname, email, message)
                    VALUES (:fname, :email, :message)";

        $this->db->query($query);

        $this->db->bind('fname', $data['fname']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('message', $data['message']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param integer $id - Contact us id
     * @return object
     */
    public function remove($id)
    {
        $query = "DELETE FROM contact_us WHERE id= :id;";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        $affected_rows = $this->db->row_count();

        return ($affected_rows > 0) ? true : false;
    }
}
