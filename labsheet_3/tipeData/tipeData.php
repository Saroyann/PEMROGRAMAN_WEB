<?php 
$String = "ini String";
echo $String;
echo '<br>';
$Integer = 123;
echo $Integer;
echo '<br>';
$float = 1.2;
echo $float;
echo '<br>';
$Boolean = true;
echo $Boolean;
echo '<br>';
$Array = ['kalukng', 'Jabau', 'Teninukng'];
foreach ($Array as $jabauEnak) {
    echo $jabauEnak;
}
echo '<br>';

//definisikan kelas
class makananTonyooi {
    public $makanan1;

    //membuat konstruktor
    public function __construct($makanan) {
        $this->makanan1 = $makanan;
    }
    public function tampilkan() {
        echo 'makanan tonyooi pertama : ' . $this->makanan1 . '<br>';
            }
}


$nyama = new makananTonyooi('Jabau');
$nyama->tampilkan();

$null = null;
echo $null;