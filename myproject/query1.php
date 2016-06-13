<?php
header("Access-Control-Allow-Origin: *");


mysql_connect('localhost','root','123qwe')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('firstdb')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

$username = isset($_GET['username']);
$password = isset($_GET['password']);

$query = "SELECT Password FROM employee WHERE Username='$username'";
$linknombre = mysql_query($query) or die(mysql_error());
$tmp = 'a';
if($raw=mysql_fetch_array($linknombre)){
	$tmp = $raw["Password"];
}

if($tmp == $password){
	 echo "OK";
 }
else {
	echo "Usuario o contraseña no válidos";
}

// Create connection
/*$conn = new mysqli($mysql_host, $mysql_user, $mysql_password,$mysql_database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Password FROM Employee WHERE Username=$username";
$result = $conn->query($sql);
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
		else if( $rs["Password"] == $password )
		$outp .= "open";
  //  $outp .= '{"Username":"'  . $rs["Username"] . '",';
//    $outp .= '"Password":"'   . $rs["Password"] . '"}';

}
$outp ='{ "records":[ '.$outp.' ]}';
$conn->close();
echo($outp);*/
?>
