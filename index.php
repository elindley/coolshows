<?php
include("connection.php");
include("header.php");
?>
<div class="background">
<h1>Submit a Show</h1>

<form  action="submit.php" method="POST">
Title: <input  type="text" name="title">
Description: <input type="text" name="description">
<input type="submit">
</form>

<h1>Upcoming Shows</h1>
<?php 
$response = mysql_query("SELECT * FROM `show`");
while($row = mysql_fetch_assoc($response)){
  echo "<h2>" .  $row["title"] .  "</h2> <p>" . $row["description"] . "</p>";
}
?>

</div>
<?php include("footer.php"); ?>
