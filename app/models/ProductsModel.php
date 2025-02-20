<?php
class ProductsModel extends Connect
{
    private $idProduct;
    private $name;
    private $price;
    private $salePrice;
    private $discription;
    private $image;
    private $listImages;
    private $condition;
    private $quantity;
    private $status;
    private $view;
    private $createdAt;
    private $updatedAt;
    private $idCategory;
    private $cate_name;


    public function __construct()
    {
        parent::__construct();
        if (func_num_args() >= 14) {
            $this->idProduct = func_get_arg(0);
            $this->name = func_get_arg(1);
            $this->price = func_get_arg(2);
            $this->salePrice = func_get_arg(3);
            $this->discription = func_get_arg(4);
            $this->image = func_get_arg(5);
            $this->listImages = func_get_arg(6);
            $this->condition = func_get_arg(7);
            $this->quantity = func_get_arg(8);
            $this->status = func_get_arg(9);
            $this->view = func_get_arg(10);
            $this->createdAt = func_get_arg(11);
            $this->updatedAt = func_get_arg(12);
            $this->idCategory = func_get_arg(13);
            // $this->cate_name = func_get_arg(14);
        }

    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM Products";
        // $sql = "SELECT Products.* , Categories.name as cate_name FROM Products JOIN Categories ON Products.idCategory = Categories.idCategory ORDER BY Products.idProduct";
        $result = $this->getList($sql);
        $products = [];
        if ($result) {
            foreach ($result as $row) {
                $product = new ProductsModel(
                    $row['idProduct'],
                    $row['name'],
                    $row['price'],
                    $row['salePrice'],
                    $row['discription'],
                    $row['image'],
                    $row['listImages'],
                    $row['condition'],
                    $row['quantity'],
                    $row['status'],
                    $row['view'],
                    $row['createdAt'],
                    $row['updatedAt'],
                    $row['idCategory'],
                    // $row['cate_name']
                );
                array_push($products, $product);
            }
        }
        return $products;
    }

    public function getDetail($id)
    {
        $sql = "SELECT * FROM Products WHERE idProduct = $id";
        $result = $this->getInstance($sql);
        if ($result) {
            $product = new ProductsModel(
                $result['idProduct'],
                $result['name'],
                $result['price'],
                $result['salePrice'],
                $result['discription'],
                $result['image'],
                $result['listImages'],
                $result['condition'],
                $result['quantity'],
                $result['status'],
                $result['view'],
                $result['createdAt'],
                $result['updatedAt'],
                $result['idCategory']
            );
            return $product;
        }
        return null;
    }

    public function getProHot()
    {
        try {
            $sql = "SELECT * FROM Products ORDER BY view DESC LIMIT 6";
            $result = $this->getList($sql);
            $proHot = [];
            if ($result) {
                foreach ($result as $row) {
                    $product = new ProductsModel(
                        $row['idProduct'],
                        $row['name'],
                        $row['price'],
                        $row['salePrice'],
                        $row['discription'],
                        $row['image'],
                        $row['listImages'],
                        $row['condition'],
                        $row['quantity'],
                        $row['status'],
                        $row['view'],
                        $row['createdAt'],
                        $row['updatedAt'],
                        $row['idCategory']
                    );
                    array_push($proHot, $product);
                }
            }
            return $proHot;
        } catch (Exception $e) {
            return $e->getMessage();
        }


    }

    public function getProNew()
    {
        $sql = "SELECT * FROM Products ORDER BY idProduct DESC LIMIT 4";
        $result = $this->getList($sql);
        $proNew = [];
        if ($result) {
            foreach ($result as $row) {
                $product = new ProductsModel(
                    $row['idProduct'],
                    $row['name'],
                    $row['price'],
                    $row['salePrice'],
                    $row['discription'],
                    $row['image'],
                    $row['listImages'],
                    $row['condition'],
                    $row['quantity'],
                    $row['status'],
                    $row['view'],
                    $row['createdAt'],
                    $row['updatedAt'],
                    $row['idCategory']
                );
                array_push($proNew, $product);
            }
        }
        return $proNew;
    }

    public function insert()
    {
        try {
            $sql = "INSERT INTO Products (name, price, salePrice, discription, image, listImages, `condition`, quantity, status, idCategory)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $param = [$this->name, $this->price, $this->salePrice, $this->discription, $this->image, $this->listImages, $this->condition, $this->quantity, $this->status, $this->idCategory];
            $result = $this->exec($sql, $param);
            return $result;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function update()
    {
        try {
            $sql = "UPDATE Products SET name = ?, price = ?, discription = ?, image = ?, listImages = ?, condition = ?, quantity = ?, status = ?, view = ?, idCategory = ?";
            $param = [$this->name, $this->price, $this->discription, $this->image, $this->listImages, $this->condition, $this->quantity, $this->status, $this->view, $this->idCategory];
            $result = $this->exec($sql, $param);
            if ($result) {
                return true;
            }
        } catch (Exception $e) {
            return false;
        }

    }

    public function delete()
    {
        try {
            $sql = "DELETE FROM Products WHERE idProduct = ?";
            $param = [$this->idProduct];
            $result = $this->exec($sql, $param);
            if ($result) {
                return true;
            }
        } catch (Exception $e) {
            return false;
        }
    }




    //id product
    public function getId()
    {
        return $this->idProduct;
    }
    public function setId($id)
    {
        $this->idProduct = $id;
    }
    //name
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    //price
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    //salePrice
    public function getSalePrice()
    {
        return $this->salePrice;
    }
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
    }
    //discription
    public function getDiscription()
    {
        return $this->discription;
    }
    public function setDiscription($discription)
    {
        $this->discription = $discription;
    }
    //image
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    //listImages
    public function getListImages()
    {
        return $this->listImages;
    }
    public function setListImages($listImages)
    {
        $this->listImages = $listImages;
    }
    //condition
    public function getCondition()
    {
        return $this->condition;
    }
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }
    //quantity
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    //status
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }
    //view
    public function getView()
    {
        return $this->view;
    }
    public function setView($view)
    {
        $this->view = $view;
    }
    //idCategory
    public function getIdCategory()
    {
        return $this->idCategory;
    }
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
    }
    //cate_name
    public function getCateName()
    {
        return $this->cate_name;
    }

    public function setCateName($cate_name)
    {
        $this->cate_name = $cate_name;
    }

}