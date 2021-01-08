<?php
include "Article.php";

class Catalogue
{
    public $Catalogue = array();

    public function __construct()
    {
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=db04012021', 'bob', 'azerty');
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        $products=$bdd->query('SELECT * from products');
        while ($product = $products->fetch())
        {
            $prod= new Article($product['name'],$product['description'],$product['price'],$product['weight'],$product['quantity'],$product['available'],$product['id'],$product['image']);
            array_push($this->Catalogue, $prod);
        }
    }
    public function DisplayCat(){
        foreach($this->Catalogue as $article){
            $article->displayArticle($article);
        }
    }


}
$bon=new Catalogue;
$bon->DisplayCat($bon);