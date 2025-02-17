<?php
class BannerModel extends Connect{
    private $idBanner;
    private $name;
    private $image;
    public function __construct(){
        parent::__construct();
        if(func_num_args() > 0){
            $this->idBanner = func_get_arg(0);
            $this->name = func_get_arg(1);
            $this->image = func_get_arg(2);
        }
    }

    public function getBanner(){
        $sql = "SELECT * FROM Banner";
        $result = $this->getList($sql);
        $banners = [];
        if($result){
            foreach($result as $row){
                $banner = new BannerModel($row['idBanner'], $row['name'], $row['image']);
                array_push($banners, $banner);
            }
        }
        return $banners;
    }

    public function getId(){
        return $this->idBanner;
    }
    public function setId($id){
        $this->idBanner = $id;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    
    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
        $this->image = $image;
    }


}