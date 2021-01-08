<?php


class Article
{
    private $_nom;
    private $_description;
    private $_prix;
    private $_poids;
    private $_stock;
    private $_disponible;
    private $_id;
    private $_image;

    public function __construct($nom, $description, $prix, $poids, $stock, $disponible, $id, $image){
        $this->_nom=$nom;
        $this->_description=$description;
        $this->_prix=$prix;
        $this->_poids=$poids;
        $this->_stock=$stock;
        $this->_disponible=$disponible;
        $this->_id=$id;
        $this->_image=$image;

    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function getPoids()
    {
        return $this->_poids;
    }

    public function getStock()
    {
        return $this->_stock;
    }

    public function getDisponible()
    {
        return $this->_disponible;
    }

    public function getId()
    {
        return $this->_id;
    }
    public function getImage()
    {
        return $this->_image;
    }
    public function displayArticle(Article $Article)
    {
        echo $this->_id . $this->_nom . $this->_description . $this->_prix . $this->_image . $this->_poids . $this->_stock . $this->_disponible;
    }
}





//public function displayCat($Catalogue)
//{
//    echo $Catalogue;
//}
//   function displayArticle($Article){
//    echo $Article->;
//}