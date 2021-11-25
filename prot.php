<?php
///////////////////////////////////////////////////////////////////
//	Criado por:						///
//		Deigo Fernando do Carmo Bezerra 		///
//	Para:							///
//		ITSCS						///
//		Data: 19/10/2021				///
//		Santo Amaro da Imperatriz			///
///////////////////////////////////////////////////////////////////

//importando a conexão com o DB
include_once './conexao.php';
//parametrizando regionalização de data local
date_default_timezone_set("America/Sao_Paulo");

?>
<!DOCTYPE html>
<html>
    <header>
        <meta charset="UTF-8">
        <title>Gerador de Protocolo</title>
</header>
<body>
<?php
// obter o número de entradas (como formulário de entrada) do lado de fora do script, e filtrada
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// condição se a entrada do forme é diferente de vaziu
if(!empty($dados['btprotocolo'])){
//recebendo o ip da solicitação do protocolo
    $ipprot = $_SERVER['REMOTE_ADDR'];
//usando o pdo para realisar a inserção no banco
    $stmt = $pdo->prepare('INSERT INTO protocolo (ipprot) VALUES(:ipprot)');
//executando o pdo com o array dos dados para insert
    $stmt->execute(array(
        ':ipprot' => $ipprot,
    ));
//recebendo o id inserido para não haver outro identico no DB
    $insert_id = $pdo->lastInsertId(); // pegar o id que gerou 
//recebendo id para criação do corpo do protocolo
    $data = [
        'id' => $insert_id, 
    ];
//montando a query para cadastrar o protocolo gerado
    $sql = "UPDATE protocolo SET protocolo=CONCAT(DATE_FORMAT(datacri, '%d%m%y'),id) WHERE id=:id";
//executando query com protocolo para registro no DB 
   $stmt= $pdo->prepare($sql);
    $stmt->execute($data);
//exibindo o novo protocolo gerado    
    $consulta = $pdo->query("SELECT * FROM protocolo WHERE id = $insert_id ");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        
        $novoprot =  $linha['protocolo'];
       }

}

?>
<form name="form_gproto" method="POST" action="">
<label for="nome_form"><?php echo $novoprot;?></label>
<input type="submit" value="Gerar" name="btprotocolo">
</form >



</body>
</html>