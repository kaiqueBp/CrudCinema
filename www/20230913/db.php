<?php

$server = "db-mysql";
$user = "root";
$pass = "root";
$mydb = "teste";

$conn = new mysqli($server, $user, $pass, $mydb);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$query = "INSERT INTO vendedor (nome_vend, salario, cod_setor) VALUES ('Felipe',2000,1)";

$result = $conn->query($query);
if ($result === TRUE) {
    echo "Novo registro inserido<br>";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$query = "INSERT INTO vendedor (nome_vend, salario, cod_setor) VALUES ('Felipe',2000,1);";
$query .= "INSERT INTO vendedor (nome_vend, salario, cod_setor) VALUES ('Perez',1500,2)";

$conn->multi_query($query);
do {
    $result = $conn->store_result();
    if ($conn->error) {
        echo "Error: " . $conn->error."<br>";
    } else {
        echo "Novo registro inserido<br>";
    }
} while ($conn->next_result());

$stmt = $conn->prepare("INSERT INTO vendedor (nome_vend, salario, cod_setor) VALUES (?,?,?)");

if (!$stmt) {
    die("Error: " . $conn->error);
}

$stmt->bind_param("sdi",$nomeVend,$salario,$codVend);

for($i=0;$i<10;$i++){
    $nomeVend = "Felipe ".$i;
    $salario = $i*500;
    $codVend = $i;
    $stmt->execute();
}


$conn->close();
