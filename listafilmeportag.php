<?php

$tagid = NULL;

if (isset ($_GET['tagid'])) {
	$tagid = $_GET['tagid'];
}

$conn = new mysqli('localhost','web','web','filmes');

$sql = "SELECT tfilmes.id_filme,titulo FROM ttagfilme,tfilmes WHERE id_tag=$tagid AND ttagfilme.id_filme = tfilmes.id_filme";
echo ($sql);

$res = $conn->query($sql);


while($filme = $res->fetch_object()) {
	echo "<p>". $filme->titulo . "</p>";
}


?>