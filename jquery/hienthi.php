<?php
$pdo = new PDO("mysql:host=localhost;dbname=demo1;charset=utf8", "root", "");
$query = "SELECT * FROM test";
$stmt = $pdo->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll();
foreach($data as $value){
    echo '
        <tr>
            <td>'.$value['id'].'</td>
            <td>'.$value['name'].'</td>
        </tr>
    ';
}

