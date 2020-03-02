<?php

$pdostatement = $pdo->query("SELECT * FROM blog ORDER BY date DESC ");

$i = 0;

while ($blog = $pdostatement->fetch(PDO::FETCH_ASSOC)) {

    $articles[$i]['title'] = $blog['title'];
    $articles[$i]['date'] = $blog['date'];
    $articles[$i]['img'] = $blog['img'];
    $articles[$i]['description'] = $blog['description'];
    $articles[$i]['subject'] = $blog['subject'];
    $articles[$i]['content'] = $blog['content'];
    $articles[$i]['id_article'] = $blog['id_article'];
    $i++;
}


?>