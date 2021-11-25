///////////////////////////////////////////////////////////////////
//	Criado por:						///
//		Deigo Fernando do Carmo Bezerra 		///
//	Para:							///
//		ITSCS						///
//		Data: 19/10/2021				///
//		Santo Amaro da Imperatriz			///
///////////////////////////////////////////////////////////////////

<?php 
$host = "localhost";
$user = "SEU_USUARAIO";
$pass = "SUA_SENHA";
$dbname = "SEU_DB";
$port = "SUA_PORTADB";
//usando o PDO para conexão com banco de dados 
$pdo = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);
try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "conectou"; 
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }
?>