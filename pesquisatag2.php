<?php

$conn = new mysqli('localhost','web','web','filmes');

$sql = "SELECT * from ttgas";

$res = $conn->query($sql);

while($tag = $res->fetch_object()) {
	echo "<p>". "<a href='listafilmeportag.php?tagid=".$tag->id_tag."'>".$tag->desc."</a></p>";
}
//var_dump($conn);
//var_dump($result);

?>




