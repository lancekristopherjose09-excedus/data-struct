<form method="post" action="greet.php">
    <label>name <input name="name" required></label>
    <button>greet</button>
</form>
<?php
$name= $_POST["name"]?? "";
echo htmlspecialchars($name,ENT_QUOTES, "UTF-8");
?>

