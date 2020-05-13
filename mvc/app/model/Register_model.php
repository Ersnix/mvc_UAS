<?php  
class Register_model{

    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data){
        $nama = htmlspecialchars($data['nama']);
        $username = htmlspecialchars($data['username']);
        $password = $data['password'];
        $level = $data['level'];

        $query = "INSERT INTO user(username,password,level) VALUES ('$username','$password','$level')";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
}