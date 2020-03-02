<?php



$pdostatement = $pdo->query("SELECT * FROM gallery ORDER BY id_position ASC ");

$i = 1;

while ($gallery = $pdostatement->fetch(PDO::FETCH_ASSOC)) {

    if ($gallery['id_position'] != $i){
        $pdo->query("UPDATE gallery SET id_position = $i WHERE filename = '$gallery[filename]' ");
    }
    $i++;
}


?>