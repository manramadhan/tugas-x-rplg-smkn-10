<?php 

class Laptop {
    // property
    public $merk;
    protected $tipe;
    public $harga;
    // method
    
    // construct - destruct
    public function __construct() {
        echo "Laptop telah dinyalakan";
        echo "<br />";
    }

    public function __destruct() {
        echo "Laptop telah dimatikan";
    }

    // setter
    public function setMerk($merk) {
        $this->merk = $merk;
        echo "Merk laptop: ".$merk;
        echo "<br />";
    }

    public function setTipe($tipe) {
        $this->tipe = $tipe;
        echo "Tipe laptop: ".$tipe;
        echo "<br />";
    }

    public function setHarga($harga) {
        $this->harga = $harga;
        echo "Harga laptop: ".$harga;
        echo "<br />";
    }

    // getter
    public function getMerk() {
        return $this->merk;
    }

    public function getTipe() {
        return $this->tipe;
    }   

    public function getHarga() {
        return $this->harga;
    }

}

class Asus extends Laptop {
    public $layar;
    protected $berat;
    private $password;

    public function __construct() {
        echo "Masukkan Password";
        echo "<br />";
    }

    public function __destruct() {
        echo "Password telah dihapus";
        echo "<br />";
    }

    // setter
    public function setLayar($layar) {
        $this->layar = $layar;
        echo "Layar laptop: ".$layar;
        echo "<br />";
    }

    public function setBerat($berat) {
        $this->berat = $berat;
        echo "Berat laptop: ".$berat;
        echo "<br />";
    }

    public function setPassword($password) {
        $this->password = $password;
        echo "Password laptop: ".$password;
        echo "<br />";
    }

    // getter
    public function getLayar() {
        return $this->layar;
    }

    public function getBerat() {
        return $this->berat;
    }   

    public function getPassword() {
        return $this->password;
    }
}

// instansiasi
$laptop = new Laptop;

$laptop->setMerk("Asus");
$laptop->setTipe("Core i3");
$laptop->setHarga("3JT");

$asus = new Asus; 
 
$asus->setLayar("14'6 inci");
$asus->setBerat("1,3 KG");
$asus->setPassword(101006);


// memanggil method 

?>