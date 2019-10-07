<?php



//dbname
//host
//usuario
//senha

try {
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=127.0.0.1","luizsilva","abc123");

} 
//somente erros relacionado ao bd
catch (PDOException $e) {
    echo "Erro com Banco de dados: ".$e->getMessage();
}

//qualquer erro
catch(Exception $e){

    echo "Erro generico: ".$e->getMessage();
}

//INSERT
//1-forma
// $res = $pdo->prepare("INSERT INTO PESSOA(nome, telefone, email) VALUES (:n, :t, :e)");

// $res->bindValue(":n","Luiz");
// $res->bindValue(":t","1111111");
// $res->bindValue(":e","Luiz@email");
// $res->execute();

//2-forma
// $pdo->query("INSERT INTO PESSOA(nome,telefone,email) VALUES ('Paulo', '2222-2222', 'email@email')");

// DELETE AND UPDATE
// $cmd = $pdo->prepare("DELETE FROM PESSOA WHERE id = :id");
// $id = 2;
// $cmd->bindValue(":id", $id);
// $cmd->execute();
//OR

// $res = $pdo->query("DELETE FROM PESSOA WHERE id = '3'");

//UPDATE
// $cmd = $pdo->prepare("UPDATE PESSOA SET email = :e WHERE id = :id");
// $cmd->bindValue(":e", "email@email");
// $cmd->bindValue(":id",1);
// $cmd->execute();
//OR

// $res = $pdo->query("UPDATE PESSOA SET email = 'email@email' WHERE id = '3'");

//SELECT

$cmd = $pdo->prepare('SELECT * FROM PESSOA WHERE id = :id');
$cmd->bindValue(":id",1);
$cmd->execute();
//PRA QUANDO VEM UMA UNICA LINHA
$resultado = $cmd->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($resultado);
// echo "</pre>";
foreach ($resultado as $key => $value) {
    echo $key. ": " .$value. "<br>";
}

//PRA QUANDO VEM MAIS DE 1 REGISTRO BD
// $cmd->fetchAll();


?>