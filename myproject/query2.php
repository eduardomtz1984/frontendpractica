<?php
/*header("Access-Control-Allow-Origin: *");
$mysql_host = "localhost:3306";
$mysql_database = "FirstDB";
$mysql_user = "root";
$mysql_password = "";

// Create connection
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password,$mysql_database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, portada, titulo, autor, isbn, reseña,cantidad  FROM books";
$result = $conn->query($sql);
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
  	$outp .= '{"id":"'  . $rs["id"] . '",';
		$outp .= '"portada":"'  . $rs["portada"] . '",';
		$outp .= '"titulo":"'  . $rs["titulo"] . '",';
		$outp .= '"autor":"'  . $rs["autor"] . '",';
		$outp .= '"isbn":"'  . $rs["isbn"] . '",';
		$outp .= '"reseña":"'  . $rs["reseña"] . '",';
    $outp .= '"cantidad":"'   . $rs["cantidad"] . '"}';

}
$outp ='{ "records":[ '.$outp.' ]}';
$conn->close();
echo($outp);*/

header("Access-Control-Allow-Origin: *");


mysql_connect('localhost','root','123qwe')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('firstdb')or die ('Error al seleccionar la Base de Datos: '.mysql_error());



$query = "SELECT * FROM books";
$linknombre = mysql_query($query) or die(mysql_error());
$tmp = ''; $outp = "";
while($raw=mysql_fetch_array($linknombre)){
	//$tmp = $raw["Password"];
	if ($outp != "") {$outp .= ",";}
	$outp .= '{"id":"'  . $raw["id"] . '",';
	$outp .= '"portada":"'  . $raw["portada"] . '",';
	$outp .= '"titulo":"'  . $raw["titulo"] . '",';
	$outp .= '"autor":"'  . $raw["autor"] . '",';
	$outp .= '"isbn":"'  . $raw["isbn"] . '",';
	$outp .= '"cantidad":"'   . $raw["cantidad"] . '"}';
}

$outp ='{ "records":[ '.$outp.' ]}';
//$conn->close();
echo($outp);

?>
