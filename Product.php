<?php
require_once __DIR__ . '/Type.php';
class Product
{
    protected $name;
    protected $code;
    protected $price;
    protected $quantity;
    protected $brand; //classe brand
    protected $type; //classe tipo
    protected $description;
    protected $picture;
    protected $animal; // classe animals

    public function __construct($name, $price, $picture, $code, $brand, $type, $description, $quantity, $animal)
    {
        $this->name = $name;
        $this->price = $price;
        $this->picture = $picture;
        $this->code = $code;
        $this->brand = $brand;
        $this->type = $type;
        $this->decription = $description;
        $this->quantity = $quantity;
        $this->animal = $animal;

        if ($type instanceof Type) {
            $this->type = $type;
        }
    }
}

$product1 = new Product('Royal Canin Maxi Adult', 52.90, 'https://arcaplanet.vtexassets.com/arquivos/ids/243809-1200-auto?v=637455010535500000&width=1200&height=auto&aspect=true', 126414894634484, 'Royal Canin', 'Food', 'Crocchette per cani Royal Canin Size Maxi Adult. Alimento secco completo per cani adulti di grande taglia, con un peso compreso tra i 26 e i 44 kg, dai 15 mesi ai 5 anni di età.', 2, 'Dog');
$product2 = new Product('Tiragraffi Badalona Trixie Beige', 36.95, 'https://arcaplanet.vtexassets.com/arquivos/ids/223801-1200-auto?v=637454735937700000&width=1200&height=auto&aspect=true', 6491343254923752759, 'Trixie', 'Toy', 'Nessuna Descrizione', 1, 'Cat');

echo '<pre>';
var_dump($product1);
var_dump($product2);
echo '</pre>';
