<?php include "../../config/koneksi.php";
//get
$stock = $_GET['stock'];

$query = "SELECT * FROM pos_mproduct order by sku asc";
if($stock > 0){
    $query = "SELECT * FROM pos_mproduct where stockqty > 0 order by sku asc";
}


$json = array();
$no = 1;
$statement = $connec->query($query);
foreach ($statement as $r) {
    $json[] = array(
        "no" => $no,
        "sku" => $r['sku'],
        "name" => $r['name'],
        "price" => $r['price'],
        "stock" => $r['stockqty']
    );

    $no++;
}


$json_string = json_encode($json);
//return json

echo $json_string;

?>