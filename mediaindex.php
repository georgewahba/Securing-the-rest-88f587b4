<?php
if (!isset($_COOKIE['logdin'])) {
    header("Location: index.php");
}
$host = '127.0.0.1';
$db   = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}
echo $pdo->query('select version()')->fetchColumn();


$stmt = $pdo->query('SELECT * FROM netland.media;');
while ($row = $stmt->fetch()) {
    echo "<br/>" . $row['title'] . "<a href='media.php?id=" . $row['id'] . "'>edit info</a>";
}  
?>
<html>

<form action="mediaadd.php" method="get">
    <input type="submit" name="submit">
</form>

</html>
