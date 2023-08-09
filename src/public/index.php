<?php
declare(strict_types=1);


try {
    // 1 connection à la DB

$pdo = new PDO(
    'mysql:host=' . getenv('DB_HOST') .';dbname=' . getenv('DB_DATABASE'), 
    getenv('DB_USERNAME'), 
   getenv('DB_PASSWORD'));


// 2 Requête SQL pour récup la liste des produits



$stmt = $pdo->query("SELECT *  FROM products LIMIT 20");
$products = $stmt->fetchAll (PDO::FETCH_ASSOC);



//3  Affichage de la liste des produits

include 'public/views/layout/header.view.php';

include 'public/views/index.view.php';

include 'public/views/layout/footer.view.php';

} catch (Exception $e) {
    print_r($e->getMessage());
}
?>

