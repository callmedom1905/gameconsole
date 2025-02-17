<?php
class UsersModel extends Connect{
    private $idUser;
    private $email;
    private $password;
    private $role;
    private $active;
    public function __construct(){
        parent::__construct();
        if(func_num_args() >= 5){
            $this->idUser = func_get_arg(0);
            $this->email = func_get_arg(1);
            $this->password = func_get_arg(2);
            $this->role = func_get_arg(3);
            $this->active = func_get_arg(4);
        }
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM Users";
        $result = $this->getList($sql);
        $users = [];
        if($result){
            foreach($result as $row){
                 //mật khẩu nên trả về null
                 //lấy mật khẩu ng dùng đưa vào csdl so sánh và return True False
                $user = new UsersModel($row['idUser'], $row['email'],$row['password'], $row['role'], $row['active']);
                array_push($users, $user);
            }
        }
        return $users;
    }

    public function getOneUser($id){
        try {
            $sql = "SELECT * FROM Users WHERE idUser = $id";
            $result = $this->getInstance($sql);
            if($result){
                $user = new UsersModel($result['idUser'], $result['email'], $result['password'], $result['role'], $result['active']);
                return $user;
            }
        } catch (Exception $e) {
            error_log("Lỗi khi lấy dữ liệu: " . $e->getMessage());
            return false;
        }
    }

    public function insert(){
        try{
            $sql = "INSERT INTO Users (email, password) VALUES (?,?)";
            $param = [$this->email, $this->password];
            $result = $this->exec($sql, $param);
            if($result){
                return true;
            }
        }catch(Exception $e){
            error_log("Lỗi khi chèn dữ liệu: " . $e->getMessage());
            return false;
        }
    }



    public function getId(){
        return $this->idUser;
    }
    public function setId($id){
        $this->idUser = $id;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    public function getRole(){
        return $this->role;
    }
    public function setRole($role){
        $this->role = $role;
    }

    public function getActive(){
        return $this->active;
    }
    public function setActive($active){
        $this->active = $active;
    }
    
    
}