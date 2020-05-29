<?php
$mysqli = false;
function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "root", "barbershopbse");
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

function getServices($limit)
{
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM  `services` ORDER BY `id` ASC LIMIT $limit");
    closeDB();
    return resultToArray($result);
}

function getWorkers($limit)
{
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM  `workers` ORDER BY `id_worker` ASC LIMIT $limit");
    closeDB();
    return resultToArray($result);
}

function resultToArray($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) != false)
        $array[] = $row;
    return $array;
}


if (!empty($_POST['name ']) and !empty($_POST['email']) and !empty(($_POST['phone ']))) {
    $headers = 'From: Barbershop';
    $letter = " data of mail:\r\n";
    $letter = " Name:" . $_POST['name'] . "\r\n";
    $letter = " Name:" . $_POST['surname'] . "\r\n";
    $letter = " Name:" . $_POST['phone'] . "\r\n";
    $letter = " Name:" . $_POST['email'] . "\r\n";
    $letter = " Name:" . $_POST['phone'] . "\r\n";
    $letter = " Name:" . $_POST['message'] . "\r\n";
}
if($mail = mail('oleg.hoj@gmail.com', 'New order', $letter, $headers)){
   
}

//		$conn = new PDO("mysql:host=localhost; dbname=barbershopbse", 'root', 'root');
//		//if (empty($_POST['name'])) exit("Не заповнено поле");
//
//		$query = "INSERT INTO orders VALUE(:name,)";
//		$msg = $conn->prepare($query);
//		$msg->execute([ 'name' => $_POST['name'],]);
//
//
?>
