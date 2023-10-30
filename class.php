<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Restoran{
        private $Nama;
        private $harga;
        function __construct($Nama,$harga){
            $this->Nama=$Nama;
            $this->harga=$harga;
        }
        function setNama($Nama){
            $this->Nama=$Nama;
        }
        function set_harga($harga){     
            $this->harga=$harga;
        }
        function get_harga(){   
            return $this->harga;
        }
        function get_nama(){
            return $this->Nama;
        }
    }
    class Menu extends Restoran{
        private $namaMenu;
        function set_namaMenu($namaMenu){
$this->namaMenu=$namaMenu;
        }
        function get_namaMenu(){
            return $this->namaMenu;
        }
        
    }

    $resto1 = new Restoran("Halu", 9000);
    $resto2 = new Restoran("KFC",900000);
    $resto1->setNama("Mcdonald");
    $resto1->set_harga(300000);
    $MENU1 = new Menu("HOOOOO",299999);
    $MENU1->set_namaMenu("REGULUS MY WAIFU SEGGSSS");
    echo"Nama Restoran ; ".$resto1->get_nama()."<br>";
    echo"Harga restoran ;".$resto1->get_harga()."<br>";
    echo"Nama Restoran ; ".$resto2->get_nama()."<br>";
    echo"Harga restoran ;".$resto2->get_harga()."<br>";
    echo "Nama Menu : ".$MENU1->get_namaMenu()."<br>";
    echo "Hrgaa Menu : ".$MENU1->get_harga()."<br>";
    echo "Nama resto : ".$MENU1->get_nama()."<br>";


    ?>
</body>
</html>