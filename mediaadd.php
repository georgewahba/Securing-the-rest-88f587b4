
<?php
if (!isset($_COOKIE['logdin'])) {
    header("Location: index.php");
}
?>
<a href="index.php">Terug</a>
<br></br>
<h1>Nieuwe film</h1>
<br></br>
<form method="post" action="mediaconfirm.php">
    <label for="title">Titel</label>
    <input type="text" name="title">
    <br></br>
    <label for="duur">Duur</label>
    <input type="duur" name="duur">
    <br></br>
    <label for="datum_van_uitkomst">Datum van uitkomst</label>
    <input type="text" name="datum_van_uitkomst">
    <br></br>
    <label for="land_van_uitkomst">Land van uitkomst</label>
    <input type="text" name="land_van_uitkomst">
    <br></br>
    <label for="description">Omschrijving</label>
    <textarea name="description" cols="30" rows="10"></textarea>
    <br></br>
    <label for="youtube_trailer_id">Trailer id</label>
    <input type="text" name="youtube_trailer_id"> 
    <br></br>
    <label for="rating">Rating</label>
    <input type="text" name="rating">
    <br></br>
    <label for="award">Has Won Award</label>
    <input type="text" name="awards">
    <br></br>
    <label for="land_uitkomst">Seizoenen</label>
    <input type="text" name="seasons">
    <br></br>
    <label for="omschrijving">Land</label>
    <input type="text" name="country">
    <br></br>
    <label for="trailer_id">Taal</label>
    <input type="text" name="lang">
    <br></br>
    <br></br>
    <input type="submit" name="submit" value="create">
</form>