<?php
class CategoriesModel extends Connect{
    private $idCategory;
    private $type;
    private $name;
    private $status;
    private $createdAt;
    private $url;

    public function __construct(){
        parent::__construct();
        if(func_num_args() > 0){
            $this->idCategory = func_get_arg(0);
            $this->type = func_get_arg(1);
            $this->name = func_get_arg(2);
            $this->status = func_get_arg(3);
            $this->createdAt = func_get_arg(4);
            $this->url = func_get_arg(5);
        }
    }

    public function getAllCategories(){
        $sql = "SELECT * FROM Categories";
        $result = $this->getList($sql);
        $categories = [];
        if($result){
            foreach($result as $row){
                $category = new CategoriesModel($row['idCategory'], $row['type'], $row['name'], 
                                            $row['status'], $row['createdAt'], $row['url'] );
                array_push($categories, $category);
            }
        }
        return $categories;
    }

    public function insert(){
        try {
            $sql = "INSERT INTO Categories (type ,name, status, url) VALUES ($this->type, '$this->name', $this->status, '$this->url')";
            $param = [$this->name, $this->status, $this->type, $this->url];
            // $resutl = $this->exec($sql, $param);
            var_dump($sql);

            // return $resutl;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    

    public function getId(){
        return $this->idCategory;
    }
    public function setId($id){
        $this->idCategory = $id;
    }
    //type
    public function getType(){
        return $this->type;
    }
    public function setType($type){
        echo "🔹 Đang gán type: $type <br>";
        $this->type = $type;
    }
    //name
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    //status
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    //createdAt
    public function getCreatedAt(){
        return $this->createdAt;
    }
    public function setCreatedAt($createdAt){
        $this->createdAt = $createdAt;
    }
    //url
    public function getUrl(){
        return $this->url;
    }
    public function setUrl($url){
        $this->url = $url;
    }
}