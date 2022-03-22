<?php

class emailmod extends CI_Model
{
    public function insert($email, $password)
    {
        $password = md5($password);
        $result=$this->db->query("INSERT INTO mailtable (email, password) VALUES ('$email', '$password')");
    }
}


?>