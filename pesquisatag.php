<html>
	<head>
		<script src="jquery/jquery-2.1.1.js"></script>
		<script>
			$(document).ready( function () {
				$(".tagsearch").click( function () {
					$("#filmes").empty();
					//alert($(this).data('tagid'));
					$.ajax({
						url:'listafilmeportag.php',
						type: 'GET',
						data : {
							tagid : $(this).data('tagid'),
						},
						datatype : 'text',
						success : function (filmes) {
							$("#filmes").html(filmes);
						}
					})	
				})
			})
		</script>
	</head>
<body>
<div id="tags">
<?php

$conn = new mysqli('localhost','web','web','filmes');

$sql = "SELECT * from ttgas";

$res = $conn->query($sql);

while($tag = $res->fetch_object()) {
	echo "<p class='tagsearch' data-tagid='". $tag->id_tag ."'>".$tag->desc."</p>";
}
//var_dump($conn);
//var_dump($result);

?>
</div>
<div id="filmes"></div>

</html>


