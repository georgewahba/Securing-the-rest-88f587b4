<?php
if (!isset($_COOKIE['logdin'])) {
    header("Location: index.php");
}

$title = $_POST['title'];
$rating = $_POST['rating'];
$description = $_POST['description'];
$awards = $_POST['awards'];
$seasons = $_POST['seasons'];
$country = $_POST['country'];
$lang = $_POST['lang'];
$duur = $_POST['duur'];
$datum_van_uitkomst = $_POST['datum_van_uitkomst'];
$land_van_uitkomst = $_POST['land_van_uitkomst'];
$youtube_trailer_id = $_POST['youtube_trailer_id'];

$host = 'localhost';
$dbname = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO media (title, duur, datum_van_uitkomst, land_van_uitkomst, youtube_trailer_id, rating, description, has_won_awards, seasons, country, language)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

$stmt = $pdo->prepare($sql);

$stmt->execute([$title, $duur, $datum_van_uitkomst, $land_van_uitkomst, $description, $youtube_trailer_id, $rating, $awards, $seasons, $country, $lang]);
