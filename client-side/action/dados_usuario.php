
<?php


include_once "./connection.php";

$query_dados = "SELECT nome, registro, naturalidade
                from seeb_usuario 
                WHERE nome='Ariel Juarez'
                ORDER BY nome DESC";

$result_dados = $conn->prepare($query_dados);
$result_dados->execute();

if (($result_dados) && ($result_dados->rowCount() != 0)) {
    $info_dados = $result_dados(PDO::FETCH_ASSOC);

    $retorna = ['status' => true, 'dados' => $info_dados];
} else {

    $retorna = ['status' => false, 'msg' => "<p style='color=red'> erro </p>"];
}

echo json_encode($retorna);

?>