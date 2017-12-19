<?php

try {
  $conn = new PDO("sqlsrv:server = tcp:rom.database.windows.net,1433; Database = Ttt", "rom", "Rosbank1997");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE registration_on(
id INT NOT NULL IDENTITY(1,1),
PRIMARY KEY(id),
name VARCHAR(30),
email VARCHAR(30),
country VARCHAR(10),
birthday VARCHAR(10),
date DATE)";
$conn->query($sql);

echo "<h3>Таблица создана.</h3>";
}
catch (PDOException $e) {
print("Ошибка подключения к SQL Server.");
die(print_r($e));
}
?>
