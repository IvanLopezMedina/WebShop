<?php
include '__DIR__/../config.php';
require_once('__dir__/../models/connectaBD.php');


$conn = connectaDB();

include 'views/header.php'; include 'views/footer.php';

$sql = 'SELECT id_categoria, `nom` FROM Categoria';

$stmt = $conn->prepare($sql);

$stmt->execute();

$categories = $stmt->fetchAll();

print_r($categories);

?>

</body>
</html>
