<?php  
class Register_model{

    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data){
        $username = htmlspecialchars($data['username']);
        $password = md5($data['password']);
        $level = "user";
        $alamat = $data['alamat'];

        $query = "INSERT INTO user(username,password,level,alamat) VALUES ('$username','$password','$level','$alamat')";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
}