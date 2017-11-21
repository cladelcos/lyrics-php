<?php 
	$host = "localhost";
	$db   = "devmedia";
	$user = "root";
	$pass = "";
	// conecta ao banco de dados
	$con = mysqli_pconnect($host, $user, $pass) or trigger_error(mysqli_error(),E_USER_ERROR); 
	// seleciona a base de dados em que vamos trabalhar
	$condb = mysqli_select_db($db, $con);

	$name = $phone = $submit = "";

	if(isset($_GET['name']) AND isset($_GET['phone'])){
		$name=$_GET['name'];
		$phone=$_GET['phone'];
	}
	if (!isset($_GET['submit']))
	{
	    echo 'Pls select and submit';
	 
		// Attempt insert query execution
		$sql = "INSERT INTO `cadastro` (name,phone) VALUES($name, $phone)";
		mysqli_query($sql,$condb);
	}
	else
	{
	}
	// Check connection
	if($submit === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 

?>

<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
    <p>[<?= $linha['id']?>] || <?= $linha['nome']?> / <?= $linha['telefone']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }
?>
<h1 class="bg-header">others results</h1>

<?php
    // tira o resultado da busca da memória
    mysql_free_result($dados);
?>