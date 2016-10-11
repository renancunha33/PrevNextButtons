
<h1>Acessos ao controle de ativos</h1>
<div id="TextoDoAcesso">
	<span></span>
</div>
<br>
<form mathod="post">
	<input type="button" id="prev" value="<< prev">
	<input type="button" id="next" value="Next >>">
</form>
<?php
//variaveis arrays
$vetor = array();
$vetor2 = array();

//conecta ao banco
$conexao = mysqli_connect("Localhost", "root", "", "BANCO") or die (mysql_error());

//alimenta os 2 arrays, um com a data e outro com o nome do usuário
$reso = mysqli_query($conexao, "select * from acesso");
while($row = mysqli_fetch_array($reso)){
	array_push($vetor, $row['dt_acesso']);
	array_push($vetor2, $row['cd_login_acesso']);
}
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	//variáves JS alimentadas pelo PHP
	var a = 0;
	var objDataAcesso = <?php echo json_encode($vetor); ?>;
	var objNome = <?php echo json_encode($vetor2); ?>;

	//texto ao carregar página
	$("#TextoDoAcesso span").text(objNome[a]+" acessou em "+objDataAcesso[a]);

	//button next
	$( "#next" ).click(function() {
		if(a<objDataAcesso.length-1)a=a+1;$("#TextoDoAcesso span").text(objNome[a]+" acessou em "+objDataAcesso[a]);
	});

	//button prev
	$( "#prev" ).click(function() {
		if(a>0)a=a-1;$("#TextoDoAcesso span").text(objNome[a]+" acessou em "+objDataAcesso[a]); 
	});

</script>
<!--

--Crie o database chamado BANCO e insira nele a seguinte tabela

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `cd_acesso` int(11) NOT NULL,
  `cd_login_acesso` varchar(30) NOT NULL,
  `dt_acesso` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`cd_acesso`, `cd_login_acesso`, `dt_acesso`) VALUES
(6, 'admin', '14.09.2016, 11:39:10'),
(7, 'renan.cunha', '14.09.2016, 13:11:56'),
(8, 'renan.cunha', '14.09.2016, 13:12:21'),
(9, 'renan.cunha', '14.09.2016, 13:12:44'),
(10, 'renan.cunha', '14.09.2016, 13:13:25'),
(11, 'admin', '14.09.2016, 13:14:37'),
(12, 'admin', '14.09.2016, 13:15:00'),
(13, 'admin', '14.09.2016, 13:15:30'),
(14, 'renan.cunha', '14.09.2016, 13:16:48'),
(15, 'renan.cunha', '14.09.2016, 13:21:01'),
(16, 'admin', '21.09.2016, 16:17:38'),
(17, 'admin', '21.09.2016, 16:20:55'),
(18, 'admin', '21.09.2016, 16:27:15'),
(19, 'admin', '21.09.2016, 16:27:54'),
(20, 'admin', '22.09.2016, 15:28:56'),
(21, 'read', '22.09.2016, 15:35:20'),
(22, 'admin', '22.09.2016, 15:36:32'),
(23, 'admin', '22.09.2016, 15:40:15'),
(24, 'admin', '23.09.2016, 09:18:49'),
(25, 'admin', '27.09.2016, 09:08:24'),
(26, 'admin', '27.09.2016, 09:11:03'),
(27, 'admin', '27.09.2016, 09:18:19'),
(28, 'admin', '27.09.2016, 09:24:32'),
(29, 'admin', '27.09.2016, 09:25:48'),
(30, 'admin', '27.09.2016, 09:29:14'),
(31, 'admin', '27.09.2016, 09:32:34'),
(32, 'admin', '27.09.2016, 09:33:22'),
(33, 'admin', '27.09.2016, 09:36:13'),
(34, 'admin', '27.09.2016, 11:13:35'),
(35, 'admin', '27.09.2016, 11:25:30'),
(36, 'admin', '27.09.2016, 11:25:35'),
(37, 'admin', '27.09.2016, 11:25:40'),
(38, 'admin', '27.09.2016, 11:26:51'),
(39, 'admin', '27.09.2016, 11:27:02'),
(40, 'admin', '27.09.2016, 11:27:12'),
(41, 'admin', '29.09.2016, 16:28:11');
-->