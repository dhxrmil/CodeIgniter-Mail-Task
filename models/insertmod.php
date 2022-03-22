<?php

class InsertMod extends CI_Model
{

    public function insert($email, $password)
    {
        //$sql = $this->db->query("INSERT INTO mailtable(email,password) values ('$email','$password')");
        $this->db->query(id, $id);
        $this->db->insert('mailtable', $id);
    }
}

?>

