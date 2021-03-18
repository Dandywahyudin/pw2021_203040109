<!-- Deklarasi Array -->
array()  artinya array kosong

array(value1, value2, value3);
    $kota    = array(”Bandung”, “Jakarta”);
    $kota[2] = “Surabaya”;
    $kota[]  = “Sukabumi”;

[value1, value2, value3];
    $kota = [”Bandung”, “Jakarta”];


<!-- Mencetak Array  -->
forfor($i=0; $i<count($array); $i++) {
    echo $array[$i];
}

foreach ($array as $key) {
    echo $key;
  }

foreach ($array as $key) :
    echo $key;
endforeach;


