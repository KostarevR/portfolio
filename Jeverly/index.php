<?php
$servername = "localhost";
$database = "f0692696_13";
$username = "f0692696_13";
$password = "123";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = 'SELECT * FROM Persons';

$result = mysqli_query($conn, $sql);

    while($row = $result->fetch_assoc()){
        
    $data[] = $row;
}

    
echo json_encode($data, JSON_UNESCAPED_UNICODE);




mysqli_close($conn);

?>
    